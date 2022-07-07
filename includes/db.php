<?php 
    $conn = new mysqli("localhost", "root", "", "exp_db");
    if (!$conn) {
        echo "Database connection failed";
    }
?>