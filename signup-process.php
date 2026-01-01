<?php
declare(strict_types=1);
if(empty($_POST['username'])){
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    Username is required';
    exit;
}
if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    Invalid email address';
    exit;
}
if(strlen($_POST['pass']) < 8){
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    Password must have 8 characeters';
    exit;
}
if($_POST['pass'] !== $_POST['re-pass']){
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    Correctly type your password on both fields';
    exit;
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
     echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
     <p>Given email address already taken</p>';
}
else{
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
     <p>Something is wrong. Try again later</p>';
}