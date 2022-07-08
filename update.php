<?php
    include('includes/db.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $score = $_POST['score'];

    $sql = "UPDATE `demo_table` SET `name`='$name',`score`='$score' WHERE id = '$id';";
    $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>