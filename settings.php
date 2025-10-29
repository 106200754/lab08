<!DOCTYPE html>
<html lang="en">
<head>
    <title>Setting</title>
</head>
<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "week10_db"; // Replace with your actual DB name

    $dbconn = mysqli_connect($host, $username, $password, $database);

    if (!$dbconn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
</body>
</html>