<?php
$path = __DIR__."/config.ini";
if(file_exists($path)){
    $config = parse_ini_file($path, true);
    $host = $config['database']['host'];
    $port = $config['database']['port'];
    $name = $config['database']['db_name'];
    $user = $config['database']['db_user'];
    $pass = $config['database']['db_pass'];

    $dsn = "pgsql:host=$host;port=$port;dbname=$name";
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    if($pdo){
        return $pdo;
    }
    else{
        echo $pdo->errorInfo();
        echo $pdo->errorCode();
    }
}