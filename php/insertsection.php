<?php
include 'config.php';


$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$sectionid = $decode["sectionid"];
$sectionname = $decode["sectionname"];



$sql = "INSERT INTO `website_section`(`section_id`, `section_name`) VALUES ('{$sectionid}', '{$sectionname}')";

if(mysqli_query($conn, $sql) === TRUE){
    echo json_encode(array('insert'=>"Success"));
   
}else{
    echo json_encode(array('insert'=>"Failed"));
    
}
$conn->close();
?>

