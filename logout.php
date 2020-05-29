<?php
    session_start();
    session_destroy();
    setcookie('msg', 'You have been logged out!',time()+1);
    header('Location: index.php');
?>