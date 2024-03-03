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
            $edit_query =  "SELECT * FROM experience where id = $edit_id";
            $info = mysqli_query($connection, $edit_query);
            while($row = mysqli_fetch_assoc($info)) {
    
    ?>
     <div class="container">
        <h2>Update Data</h2>
        <form action="update.php" method="POST">
            <label for="ex_icon">Icon</label>
            <input type="text" name="ex_icon" value="<?php echo $row['ex_icon'] ?>">
            <label for="ex_title">Title</label>
            <input type="text" name="ex_title" value="<?php echo $row['ex_title'] ?>">
            <label for="ex_text">Text</label>
            <input type="text" name="ex_text" value="<?php echo $row['ex_text'] ?>">
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