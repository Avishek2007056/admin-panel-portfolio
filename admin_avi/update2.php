<?php

$connection = mysqli_connect('localhost', 'root', '', 'myportfolio');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {

    $u_p_image = $_REQUEST['p_image']; 
    $u_p_name = $_POST['p_name'];
    $u_p_details = $_POST['p_details'];
    // $u_password = $_POST['password'];
    $u_id = $_POST['hidden_id'];

    $update_query = "UPDATE portfolio SET p_image='$u_p_image', p_name='$u_p_name', p_details='$u_p_details'  WHERE id='$u_id'";
    $update = mysqli_query($connection, $update_query);
    if($update){
        header("location: view.php?message=Data%20updated%20successfully");
        exit;
    } else {
        echo "Error updating data: " . mysqli_error($connection);
    }
}

?>
