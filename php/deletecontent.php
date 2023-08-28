<?php
include 'config.php';

$conid = $_GET['conid'];

$sql = "DELETE FROM `website_contents` WHERE content_id = $conid ";

if(mysqli_query($conn, $sql)){
echo json_encode(array('insert' => 'Success'));
}
else{
echo json_encode(array('insert' => 'failed'));
}

?>