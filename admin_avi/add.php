<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Experience</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h2>Add Experience</h2>
    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'myportfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ex_icon = $_POST['ex_icon'];
        $ex_title = $_POST['ex_title'];
        $ex_text = $_POST['ex_text'];

        $insert_query = "INSERT INTO experience (ex_icon, ex_title, ex_text) VALUES ('$ex_icon', '$ex_title', '$ex_text')";

        if (mysqli_query($connection, $insert_query)) {
            $message = "New record added successfully";
            echo "<script>alert('$message'); window.location.href='view.php';</script>";
            exit();
        } else {
            $message = "Error: " . $insert_query . "<br>" . mysqli_error($connection);
            echo "<script>alert('$message'); window.location.href='view.php';</script>";
            exit();
        }
    }
    mysqli_close($connection);
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="ex_icon">Icon:</label>
        <input type="text" name="ex_icon" id="ex_icon" required><br><br>

        <label for="ex_title">Title:</label>
        <input type="text" name="ex_title" id="ex_title" required><br><br>

        <label for="ex_text">Text:</label><br>
        <textarea name="ex_text" id="ex_text" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Add">
    </form>
</body>

</html>