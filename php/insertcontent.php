<?php
include 'config.php';


$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$section = $decode["section"];
$contentname = $decode["contentname"];
$contentvalue = $decode["contentvalue"];



$sql = "INSERT INTO `website_contents`(`section`, `content_name`, `content_value`) VALUES ('{$section}', '{$contentname}', '{$contentvalue}')";
if(mysqli_query($conn, $sql)){
    echo json_encode(array('insert'=>"Success"));
}else{
    echo json_encode(array('insert'=>"Failed"));
}
?>

