<?php
    declare(strict_types=1);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $mail = $_POST['email'];
        $password = hash("md5", $_POST['password']);
        $psql = require __DIR__."/db.php";
        $query = "SELECT * FROM user_details WHERE email='$mail' and password='$password'";
        $result = $psql->query($query)->fetchAll();
        $user = $result[0];
        if($user){
            session_start();
            $_SESSION['user_id'] = $user['id'];
            if($_SESSION['user_id'] != 0){
                header("Location: index.php");
                exit;
            }
            else{
                header("Location: login-failure.html");
                exit;
            }
        }
        else{
                header("Location: login-failure.html");
                exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="login">
    </form>
</body>
</html>