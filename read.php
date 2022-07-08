<?php
    include('includes/db.php');

    $sql = "SELECT * FROM demo_table";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if ($row['id'] == $id) {
            echo '<form method="POST" action="update.php" class="form-inline">';
            echo '<td> <input class="form-control" type="text" name="name" value="' . $row['name'] . '" /> </td>';
            echo '<td> <input class="form-control" type="number" name="score" value="' . $row['score'] . '" /> </td>';
            echo '<td> <button type="submit" class="btn btn-primary">Save</button> </td>';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '" />';
            echo '</form>';
        } else {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['score'] . "</td>";
            echo
                '<td> 
                    <a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Update</a> 
                    <a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a> 
                </td>';
                
            echo "<tr>";
        }
    }
    $conn->close();
?>