<?php
$name = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
if(move_uploaded_file($tmp, __DIR__."/uploads/".$name)){
    echo "File uploaded successfully";
}
else{
    echo "File can't uploaded";
}