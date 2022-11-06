<?php

class Login
{
  private $_id;
  private $_kasutajanimi;
  private $_parool;
  private $_passmd5;

  private $_errors;
  private $_access;
  private $_login;
  private $_token;

  public function __construct()
  {
    $this->_errors = array();
    $this->_login  = isset($_POST['login'])? 1 : 0;
    $this->_access = 0;
    $this->_token  = $_POST['token'];

    $this->_id       = 0;
    $this->_kasutajanimi = ($this->_login)? $this->filter($_POST['kasutajanimi']) : $_SESSION['kasutajanimi'];
    $this->_parool = ($this->_login)? $this->filter($_POST['parool']) : '';
    $this->_passmd5  = ($this->_login)? md5($this->_parool) : $_SESSION['parool'];
  }

  public function isLoggedIn()
  {
    ($this->_login)? $this->verifyPost() : $this->verifySession();
    return $this->_access;
  }

  public function filter($var)
  {
    return preg_replace('/[^a-zA-Z0-9]/','',$var);
  }

  public function verifyPost()
  {
    try
    {
      if(!$this->isTokenValid())
         throw new Exception('<font color="red">Vigane vorm esitatud</font>');

      if(!$this->isDataValid())
         throw new Exception('<font color="red">Valed andmed esitatud</font>');

      if(!$this->verifyDatabase())
         throw new Exception('<font color="red">Kasutajanimi ja parool ei klapi</font>');

    $this->_access = 1;
    $this->registerSession();
    }
    catch(Exception $e)
    {
      $this->_errors[] = $e->getMessage();
    }
  }

  public function verifySession()
  {
    if($this->sessionExist() && $this->verifyDatabase())
       $this->_access = 1;
  }

  public function verifyDatabase()
  {
    $data = mysql_query("SELECT id FROM andmed WHERE kasutajanimi = '{$this->_kasutajanimi}' AND parool = '{$this->_passmd5}'");
 
   if(mysql_num_rows($data))
      {
        list($this->_id) = @array_values(mysql_fetch_assoc($data));
        return true;
      }
    else
      { return false; }
  }

  public function isDataValid()
  {
    return (preg_match('/^[a-zA-Z0-9]{5,12}$/',$this->_kasutajanimi) && preg_match('/^[a-zA-Z0-9]{5,12}$/',$this->_parool))? 1 : 0;
  }

  public function isTokenValid()
  {
    return (!isset($_SESSION['token']) || $this->_token != $_SESSION['token'])? 0 : 1;
  }

  public function registerSession()
  {
    $_SESSION['id'] = $this->_id;
    $_SESSION['kasutajanimi'] = $this->_kasutajanimi;
    $_SESSION['parool'] = $this->_passmd5;
 mysql_query("INSERT INTO logid(kasutaja) VALUES ('{$this->_kasutajanimi}')");
  }

  public function sessionExist()
  {
    return (isset($_SESSION['kasutajanimi']) && isset($_SESSION['parool']))? 1 : 0;
  }

  public function showErrors()
  {
    echo "";

    foreach($this->_errors as $key=>$value)
      echo $value."<br>";
  }
}

?>