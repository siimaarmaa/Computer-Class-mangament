<?php 
session_start(); 

include 'core/config.php'; 

$username = $_POST['username']; 
$password = $_POST['password']; 

if(strlen($username) > 0 && strlen($password) > 0){ 

    if ($db instanceof PDO) { 
        $sql = $db->prepare("SELECT username, password FROM users WHERE username = :username AND password = :password"); 
        $sql->execute(array(':username' => $username, 
                            ':password' => md5($password))); 

        if($sql->rowCount()){ 
            $_SESSION['logged_in'] = true; 
            $_SESSION['username']  = $username; 

            header("Location: members.php"); 
        } 
        else { 
            echo 'Wrong username or password'; 
        } 
    } 
    else { 
        echo '!PDO'; 
    } 
} 
?>