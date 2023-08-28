<?php
include 'config.php';

$secid = $_GET['secid'];

$sql = "DELETE FROM `website_section` WHERE section_id = '{$secid}' ";

if(mysqli_query($conn, $sql)){
echo json_encode(array('insert' => 'Success'));
}
else{
echo json_encode(array('insert' => 'failed'));
}

?>