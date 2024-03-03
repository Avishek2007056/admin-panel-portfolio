<?php

$connection = mysqli_connect('localhost', 'root', '', 'myportfolio');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {

    $u_ex_icon = $_REQUEST['ex_icon']; 
    $u_ex_title = $_POST['ex_title'];
    $u_ex_text = $_POST['ex_text'];
    // $u_password = $_POST['password'];
    $u_id = $_POST['hidden_id'];

    $update_query = "UPDATE experience SET ex_icon='$u_ex_icon', ex_title='$u_ex_title', ex_text='$u_ex_text'  WHERE id='$u_id'";
    $update = mysqli_query($connection, $update_query);
    if($update){
        header("location: view.php?message=Data%20updated%20successfully");
        exit;
    } else {
        echo "Error updating data: " . mysqli_error($connection);
    }
}

?>
