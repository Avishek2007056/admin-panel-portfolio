<!-- Task-4: Cookies -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'myportfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM reg_table WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        setcookie("username", $username, time() + (86400 * 30), "/"); // Set cookie with username
        header("location: welcomeCookie.php");
    } else {
        echo "<h2>Invalid username or password.</h2>";
    }

    mysqli_close($connection);
}

if (isset($_COOKIE['username'])) {
    if(isset($_COOKIE['cookiecount'])) {
        setcookie('cookiecount', $_COOKIE['cookiecount']+1, time() + (86400 * 30), "/");
    } else {
        setcookie("cookiecount", 0, time() + (86400 * 30), "/");
    }
    $username = $_COOKIE['username'];
    echo "<h2>Welcome, $username!</h2>";
    echo "<h4>Cookie No.:".$_COOKIE['cookiecount']."!</h2>";
} else {
    header("location: loginCookies.php");
}
?>