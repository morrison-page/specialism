<?php
    // User Verification Functions

    function loginCheck() {
        if($_SESSION['loggedin']===1) {
            return 1; 
        } elseif($_SESSION['loggedin']===0) {
            return 0;
        } else {
            ('Location: login');
        };
    };

    function adminCheck() {
        if ($_SESSION['adminCheck'] === 1) {
            echo 'Hello Admin';
        } elseif ($_SESSION['adminCheck'] === 0) {
            header('Location: index');
        } else {
            header('Location: index');
        }
    };


    // Quiz Functions

    function getQuestions() {
        require 'connect.php';
        $sql = "SELECT * FROM questions;";
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_all($result);
    };

    function getOptions($relevantID) {
        require 'connect.php';
        $sql = "SELECT * FROM options WHERE ptions.qid = $relevantID;";
        $result = mysqli_query($conn, $sql);
        return mysqli_fetch_all($result);
    };
?>