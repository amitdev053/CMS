<?php
include 'config.php';

$updateid = $_GET['editconid'];

$sql = "SELECT * FROM `website_contents` WHERE content_id = $updateid";

$result = mysqli_query($conn, $sql);
$output =[];
$colrow =mysqli_num_rows($result);
if($colrow > 0){
while($row = mysqli_fetch_assoc($result)){

$output[] = $row;
}
}else{
$output['empty'] = ['empty'];
}

mysqli_close($conn);

echo json_encode($output);
?>