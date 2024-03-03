<!-- Task-4: Session -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sessions</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>

    <div class="container">
        <h2>Login</h2>

        <form action="welcomeSession.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

</html>

<!-- 
The session-based login system securely stores user authentication information 
on the server side, ensuring better security for sensitive data, 

while the cookie-based login system stores the username in a client-side cookie, 
making it less secure due to potential client-side manipulation and interception. 
-->