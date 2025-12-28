<?php
declare(strict_types=1);
if(empty($_POST['username'])){
    die("Username is required");
}
if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
    die("Invalid Email address");
}
if(strlen($_POST['pass']) < 8){
    die("Password must have 8 characters");
}
if($_POST['pass'] !== $_POST['re-pass']){
    die("Correctly type your password on both fields");
}
$username = $_POST['username'];
$email = $_POST['mail'];
$password = hash("md5", $_POST['re-pass']);
$pgsql = require __DIR__."/db.php";
$query = "INSERT INTO user_details values('$username', '$email', '$password')";
$rows = $pgsql->exec($query);
if($rows > 0){
    header("Location: signup-success.html");
    exit;
}
elseif($pgsql->errorCode() == 23505){
     echo "Given email address already taken";
}
else{
    echo "Something is wrong. Try again later";
}