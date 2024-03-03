<?php

$connection = mysqli_connect('localhost', 'root', '', 'myportfolio');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$del_id =  $_REQUEST['id'];

$delete_query = "DELETE FROM experience where id=$del_id";

$delete =  mysqli_query($connection, $delete_query);

if ($delete) {
    header("location: view.php?message=Data%20deleted%20successfully");
} else {
    echo "Error deleting data: " . mysqli_error($connection);
}

mysqli_close($connection);
?>
