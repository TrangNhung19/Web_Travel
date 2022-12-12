<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {	
    setcookie('username','',time()-1314000,"/");
    setcookie('password','',time()-1314000,"/");
}
header('Location: ../index.php');



// session_start();

// session_unset();

// session_destroy();

// header("Location: ../index.php");

?>