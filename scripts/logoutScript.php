<?php
    session_start();
    session_destroy();
    unset($_SESSION['adminCheck']);
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    header('Location: ../sessionCheck.php');
?>