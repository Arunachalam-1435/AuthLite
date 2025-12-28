<?php
    declare(strict_types=1);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $psql = require __DIR__."/db.php";
        $query = "SELECT * FROM user_details WHERE email=";
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