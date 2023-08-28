<?php
 
function get_cms_content($sectionid, $contentname)
{
    include '../php/config.php';
  

$sql = "SELECT * FROM `website_contents` WHERE section_id='{$sectionid}' and content_heading= '{$contentname}'";


    $result = mysqli_query($conn, $sql);

    $colrow = mysqli_num_rows($result);

    if ($colrow > 0) {
        $row = mysqli_fetch_assoc($result);

    

    } else {
        echo "Section not Exist";
    }





    return $row;
}





?>
