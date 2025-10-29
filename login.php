<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<?php
  session_start();
  require_once("settings.php");

  $conn = mysqli_connect($host, $username, $password, $database);

  // Get user input
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  // Simple query to check credentials
  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: profile.php");
    exit();
  } else {
    echo "❌ Incorrect username or password.";
  }
?>
</body>
</html>