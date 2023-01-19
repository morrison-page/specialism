<?php
    // Connect to DB
    require 'connect.php';
    
    // Grab Login Inputs
    $username = $_POST['loginUser'];
    $password = $_POST['loginPass'];

    // Get Username and Corisponding Pass
    $sql = "SELECT * FROM users WHERE username = ?;";

    // Working on SQL Prep
    $sqlPrep = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($sqlPrep, 's', $username);
    mysqli_stmt_execute($sqlPrep);
    $result = mysqli_stmt_get_result($sqlPrep);

    // Starts Verification Process
    if ($row = mysqli_fetch_assoc($result)){
        $storedPassword = $row['password']; 
        if (mysqli_num_rows($result) > 0) {
            if (password_verify($password, $storedPassword)) {
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['loggedin'] = 1;
                 
                $adminCheck = $row['admin'];
                if ($adminCheck === 1) {
                    $_SESSION['adminCheck'] = 1;
                    header('Location: ../dashboard.php');
                } else {
                    $_SESSION['adminCheck'] = 0;
                    header('Location: ../dashboard.php');
                };
            } else {
                session_start();
                $_SESSION['loginErrorMsg'] = 'Incorrect password or username';
                header('Location: ../login.php');
            };
        };
    } else {
        session_start();
        $_SESSION['loginErrorMsg'] = 'Incorrect password or username';
        header('Location: ../login.php');
    };
?>