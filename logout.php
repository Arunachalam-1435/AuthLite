<?php
declare(strict_types=1);
session_start();
session_destroy();
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Logout</title>
</head>
<body>
    <p>You are logged out</p>
    <p>Login <a href="login.php">here.</a></p>
    <p>If you do not have account Signup <a href="signup.html">here.</a></p>
</body>
</html>';

?>