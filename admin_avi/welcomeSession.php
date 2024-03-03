<!-- Task-4: Session -->

<?php
session_start();
if (isset($_SESSION['cookiecount'])) {
    $_SESSION['cookiecount'] = $_SESSION['cookiecount'] + 1;
} else {
    $_SESSION['cookiecount'] = 0;
}

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
        $_SESSION['username'] = $username; 
        header("location: welcomeSession.php");
    } else {
        echo "<h2>Invalid username or password.</h2>";
    }

    mysqli_close($connection);
}

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    echo "<h2>Welcome, $username!</h2>";
    echo "<h2>Session No.:" . $_SESSION['cookiecount'] . "!</h2>";
} else {
    header("location: loginSession.php"); 
}
?>