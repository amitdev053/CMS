<?php
include 'config.php';

$search = $_GET['searchid'];
$sql = "SELECT * FROM `website_section` Where concat(section_name, section_id) LIKE '%{$search}%'";

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