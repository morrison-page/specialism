<?php
    // Require connection file
    require 'connect.php';
    // Craft SQL query
    $username = $_SESSION['username'];
    $getItemsSQL = "SELECT * FROM users WHERE users.username = '$username'";
    $result = mysqli_query($conn, $getItemsSQL);

    // Chuck Data into table
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr> <td>' . $row['user_id'] . '</td>';
        echo '<td>' . $row['username'] . '</td></tr>';
    };
?>