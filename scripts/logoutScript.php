<?php
    session_start();
    session_destroy();
    unset($_SESSION['adminCheckSession']);
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    header("Location: ../loginForm.php");
?>