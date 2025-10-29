<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
</head>
<body>
    <?php
        session_start();
        require_once("settings.php");
        if (!isset($_SESSION['username'])) {
            header("Location: login.html");
            exit();
        }
        
        $user = $_SESSION['username'];
        $query = "SELECT * FROM users WHERE username='$user'";
        $result = mysqli_query($dbconn, $query);
        $row = mysqli_fetch_assoc($result);

    ?>

    <p>Welcome, <?php echo $row['username']; ?></p>
    <p>Email: <?php echo $row['email']; ?></p>
    <h1>Edit profile</h1>
    <form method="post" action="update_profile.php">
        <label for="email">New Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>