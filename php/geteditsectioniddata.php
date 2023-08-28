<?php
include 'config.php';

$editsecid = $_GET['editsecid'];

$sql = "SELECT * FROM `website_section` WHERE section_id = '{$editsecid}' ";

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