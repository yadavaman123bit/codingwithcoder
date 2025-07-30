<?php
$host ="sql307.thsite.top";
$dbname = "thsi_37446612_User6_database";
$username = "thsi_37446612";
$password = "nIcOrkg4";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
    }
    ?>