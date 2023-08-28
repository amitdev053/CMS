<?php
include 'config.php';


$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$astroheading = $decode["astroheading"];

$astrodiscripation = $decode["astrodiscripation"];



$sql = "INSERT INTO `astrology_section_one`(`heading`, `discripation`) VALUES ('{$astroheading}', '{$astrodiscripation}')";
if(mysqli_query($conn, $sql)){
    echo json_encode(array('insert'=>"Success"));
}else{
    echo json_encode(array('insert'=>"Failed"));
}
?>

