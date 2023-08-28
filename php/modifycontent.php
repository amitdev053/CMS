<?php
include 'config.php';


$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$contentid = $decode["modifycontentid"];
$section = $decode["modifysection"];
$contentname = $decode["modifycontentname"];
$contentvalue = $decode["modifycontentvalue"];




$sql = "UPDATE `website_contents` SET `section_id`='{$section}',`content_heading`='{$contentname}',`content_discripation`='{$contentvalue}' WHERE `content_id`='{$contentid}'";


if(mysqli_query($conn, $sql)){
    echo json_encode(array('insert'=>"Success"));
}else{
    echo json_encode(array('insert'=>"Failed"));
}
?>

