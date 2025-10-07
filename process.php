<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
</head>
<body>
    <?php
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username=='admin' && $password=='password123'){
            $_SESSION['user']=$username;
            header('Location: welcome.php');
        }else{
            echo "Invalid login.<a href='login.html'>Try again</a>";
        }
    ?>
</body>
</html>