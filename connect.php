<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbderma";

    // create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // check connection
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
?>