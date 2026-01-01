<?php
session_start();
$name = $_FILES['image']['name']; 
$tmp = $_FILES['image']['tmp_name'];
$fPath = "uploads/".$name;
if(move_uploaded_file($tmp, $fPath)){
    $conn = require __DIR__."/db.php";
    $query = "SELECT * FROM user_details  WHERE id = {$_SESSION['user_id']}";
    $result = $conn->query($query)->fetchAll();
    $id = $result[0]['id'];
    $query = "UPDATE user_details SET profile_pic_path='$fPath' WHERE id='$id'";
    $rows = $conn->exec($query);
    if($rows > 0){
        echo json_encode([
            "success"=> true,
            "path"=> $fPath
        ]);
    }
    else{
    http_response_code(500);
    echo json_encode([
        "success"=> false
    ]);
}
}
else{
    http_response_code(500);
    echo json_encode([
        "success"=> false
    ]);
}