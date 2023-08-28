<?php
include 'config.php';


$sql = "SELECT * FROM `website_section` ";

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