<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>


    <?php

        $connection = mysqli_connect('localhost', 'root', '', 'myportfolio');

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_REQUEST['id'])) {
            $edit_id = $_REQUEST['id'];
            $edit_query =  "SELECT * FROM portfolio where id = $edit_id";
            $info = mysqli_query($connection, $edit_query);
            while($row = mysqli_fetch_assoc($info)) {
    
    ?>
     <div class="container">
        <h2>Update Project</h2>
        <form action="update2.php" method="POST">
            <label for="p_image">Image</label>
            <input type="text" name="p_image" value="<?php echo $row['p_image'] ?>">
            <label for="p_name">Project Name</label>
            <input type="text" name="p_name" value="<?php echo $row['p_name'] ?>">
            <label for="p_details">Description</label>
            <input type="text" name="p_details" value="<?php echo $row['p_details'] ?>">
            <!-- <label for="password">Password</label> -->
            <!-- <input type="password" name="password" value=""> -->
            <input type="submit" name="submit" value="Update">
            <input type="hidden" name="hidden_id" value="<?php echo $edit_id?>">
        </form>
    </div>
    

    <?php
        }
    }
    mysqli_close($connection);
    ?>

</body>

</html>