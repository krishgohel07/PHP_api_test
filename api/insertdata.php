<?php

header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');

include 'api.php';
$temp_array=[];

if($_SERVER['REQUEST_METHOD']=='POST'){
$book_name=$_POST['book_name'];
$author_name=$_POST['author_name'];
$publish_year=$_POST['publish_year'];

$api=new API();
$temp=$api->insertData($book_name,$author_name,$publish_year);
if($temp){
    $temp_array['msg']="Record insereted successfully";
}
else{
    $temp_array['msg']="Record insertion failed";
    
}
echo json_encode($temp_array);
}
else{
    $temp_array['msg']="Only POST Method is allowed";
    echo json_encode($temp_array);
}
?>