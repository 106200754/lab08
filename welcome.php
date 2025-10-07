<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
</head>
<body>
    <?php
        include_once ("header.inc");
        include_once ("footer.inc");
    ?>
    <?php
        session_start();
        if(isset($_SESSION['user'])){
            echo "Welcome, " .$_SESSION['user'];
        }else{
            header('Location: login.html');
        }
    ?>
</body>
</html>