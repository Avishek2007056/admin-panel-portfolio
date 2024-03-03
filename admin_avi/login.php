<?php
session_start();

$connection = mysqli_connect('localhost', 'root', '', 'myportfolio');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM reg_table WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;

            if ($_POST['remember'] == "on") {
                setcookie("username", $username, time() + (86400 * 30), "/");
            }

            header("Location: welcome.html");
            exit;
        }
    }

    echo '<script>alert("Invalid username or password")</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="container">
    <h2>User Login Form</h2>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>">
        <input type="password" name="password" placeholder="Password">
        <input type="checkbox" name="remember"> Remember me
        <input type="submit" name="submit" value="Login">
    </form>
</div>

</body>
</html>
