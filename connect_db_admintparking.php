<?php

$conn = new mysqli('localhost', 'root', '', 'ghpgad');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>