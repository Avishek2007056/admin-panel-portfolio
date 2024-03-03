<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
<?php

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        echo '<script>alert("All fields are required.")</script>';
        exit;
    }

    if (strlen($password) < 8) {
        echo '<script>alert("Password must be at least 8 characters long.")</script>';
        exit;
    }

    $connection = mysqli_connect('localhost', 'root', '', 'myportfolio');
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $usernameToCheck = mysqli_real_escape_string($connection, $username);
    $sql = "SELECT COUNT(*) AS count FROM reg_table WHERE username = '$usernameToCheck'";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }

    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];

    if ($count > 0) {
        echo '<script>alert("Username already exists!")</script>';
        exit;
    }

    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $password)) {
        echo '<script>alert("Password must contain at least one letter, one number, and one special character.")</script>';
        exit;
    }

    $insert_query = "INSERT INTO reg_table (username, email, password) ";
    $insert_query .= "VALUES ('$username', '$email', '$password')";
    
    $insert = mysqli_query($connection, $insert_query);

    if ($insert) {
        echo '<script>alert("User inserted successfully!")</script>';
    } else {
        die("Not inserted" . mysqli_error($connection));
    }

    mysqli_close($connection);
}

?>



    <div class="container">
        <h2>User Registration Form</h2>

        <form action="reg.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>