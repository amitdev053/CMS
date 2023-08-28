<?php
include 'config.php';


$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$sectionidinput = $decode["genratesecid"];
$sectionnameinput = $decode["sectionnameinput"];




$sql = "INSERT INTO `website_section`(`section_id`, `section_name`) VALUES ('{$sectionidinput}','{$sectionnameinput}')";

if(mysqli_query($conn, $sql) === TRUE){
    echo json_encode(array('insert'=>"Success"));
   
}else{
    echo json_encode(array('insert'=>"Failed"));
    
}
$conn->close();
?>

