<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <style>
        html {
            height: 100%;
            background-image: url('https://source.unsplash.com/1920x1080/?nature');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: rgba(255, 255, 255, 0.8);
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #e0e0e0;
        }

        form {
            display: inline;
        }

        button {
            padding: 8px 16px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            margin-right: 5px;
        }

        button.update {
            background-color: #ffc107;
        }

        button.delete {
            background-color: red;
        }

        button.add {
            background-color: #28a745;
        }

        button.logout {
            background-color: #007bff;
        }

        button.logout:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'myportfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $show_query = "SELECT * FROM experience";
    $show = mysqli_query($connection, $show_query);
    $count = mysqli_num_rows($show);

    if ($count > 0) {
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ex_icon</th>
                <th>ex_title</th>
                <th>ex_text</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($show)) {
                $id =  $row["id"];
                $ex_icon =  $row["ex_icon"];
                $ex_title =  $row["ex_title"];
                $ex_text =  $row["ex_text"];
            ?>
            <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $ex_icon; ?></td>
                <td><?php echo $ex_title; ?></td>
                <td><?php echo $ex_text; ?></td>
                <td>
                    <form action="edit.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" class="update">Update</button>
                    </form>
                    <form action="delete.php" method="get">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" class="delete">Delete</button>
                    </form>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    } else {
        echo "No data in database.";
    }
    mysqli_close($connection);

    if (isset($_GET['message'])) {
        $message = htmlspecialchars($_GET['message']);
        echo "<script>alert('$message');</script>";
    }
    ?>
    <form action="add.php">
        <button type="submit" class="add">Add</button>
    </form>
    <form action="login.php">
        <button type="submit" class="logout">Logout</button>
    </form>
</body>

</html>
