<?php
include 'config.php';


$input = file_get_contents('php://input');
$decode = json_decode($input, true);

$sitetitle = $decode["sitetitle"];

$sitediscripation = $decode["sitediscripation"];

$sitemainheading = $decode["sitemainheading"];
$sitemaincontent = $decode["sitemaincontent"];



$sql = "INSERT INTO `site_index`(`index_title`, `index_discripation`, `index_main_heading`, `index_main_content`) VALUES ('{$sitetitle}', '{$sitediscripation}', '{$sitemainheading}', '{$sitemaincontent}')";
if(mysqli_query($conn, $sql)){
    echo json_encode(array('insert'=>"Success"));
}else{
    echo json_encode(array('insert'=>"Failed"));
}
?>

