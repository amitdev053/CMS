<?php
include 'config.php';


$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$updatesectionname = $decode["updatesectionname"];

$editmainid = $decode["editmainid"];

$editsecid = $decode["editsecid"];





$sql = "UPDATE `website_section` SET `section_id`='{$editsecid}', `section_name`='{$updatesectionname}' WHERE `section_id`='{$editmainid}'";


if(mysqli_query($conn, $sql)){
    echo json_encode(array('insert'=>"Success"));
}else{
    echo json_encode(array('insert'=>"Failed"));
}
?>
