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

  // Get form data
  $email = trim($_POST['email']);
  $user = $_SESSION['username'];

  // Insert user into the database
  $query = "UPDATE users SET email='$email' WHERE username='$user'";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "✅ Email successfully changed.</a>.";
      if (mysqli_num_rows($result) > 0) {
      echo "<table border='1' cellpadding='5'>";
      echo "<tr><th>Username</th><th>Email</th></tr>";
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $row['username'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "</tr>";
      }
      echo "</table>";
  } else {
    echo "❌ Failed to change email.";
  }
}
?>
</body>
</html>