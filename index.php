<?php
session_start();
if(isset($_SESSION['user_id'])){
    $pgsql = require __DIR__."/db.php";
    $query = "SELECT * FROM user_details  WHERE id = {$_SESSION['user_id']}";
    $result = $pgsql->query($query)->fetchAll();
    $user = $result[0];
    if(!isset($user)){
        echo '<p>User does not exist!</p>
        <p>Login <a href="login.php">here.</a></p>
        <p>If you do not have account Signup <a href="signup.html">here.</a></p>';
        exit;
    }
}
else{
        echo '<p>User does not exist!</p>
        <p>Login <a href="login.php">here.</a></p>
        <p>If you do not have account Signup <a href="signup.html">here.</a></p>';
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to home!</h1>
    <h3>Hello <?= $user["name"] ?></h3>
    <p>You are logged in</p>
    <p>You can Logout <a href="logout.php">here</a>
</body>
</html>