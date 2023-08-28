<?php
include 'config.php';

$contentkeyone = "Astrology_section_two";



$sql = "SELECT * FROM `website_contents` WHERE section_name = '{$contentkeyone}'";

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