<?php
    session_start();
    setcookie('name', '', time() - 30);
    session_unset();
    session_destroy();
    header('Location: homepage.php');
?>