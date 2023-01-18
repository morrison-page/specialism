<?php
    // Connect to DB
    require 'connect.php';
    
    // Grab Form Inputs
    $username = $_POST['regUsername'];
    $password = $_POST['regPassword'];

    // Hash Password
    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    //Check if username is already in use
    $sql = "SELECT * FROM users WHERE username = ?;";
    $sqlPrep = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($sqlPrep, 's', $username);
    mysqli_stmt_execute($sqlPrep);
    $result = mysqli_stmt_get_result($sqlPrep);

    if(mysqli_num_rows($result) > 0) {
        echo "Username already in use, please Login or Use another name.";
        exit();
    } else {
        // Make Query and Execute
        $sql = "INSERT INTO users (username, password, admin) VALUES(?,?,0)";
        $sqlPrep = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($sqlPrep, 'ss', $username, $hashedPass);
        mysqli_stmt_execute($sqlPrep);

        // Log the user in after register 
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = 1;

        header('Location: ../index.php');
    };
?>