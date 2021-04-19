<?php

$conn = new mysqli('localhost', 'root', 'Robin2001', 'foodsys');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>