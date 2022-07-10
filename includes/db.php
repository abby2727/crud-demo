<?php 
    $conn = new mysqli("localhost", "root", "", "crud-demo");
    if (!$conn) {
        echo "Database connection failed";
    }
?>