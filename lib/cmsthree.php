

<?php
$index_data;
function get_cms_content($sectionname, $sectionid)
{

    include '../php/config.php';

    $indexsql = "SELECT website_contents.content_heading, website_contents.content_discripation, website_contents.content_image FROM website_contents INNER JOIN website_section ON website_contents.section_id = website_section.section_id Where website_contents.section_id= '{$sectionid}'";

    $get_result = mysqli_query($conn, $indexsql);

    $get_data_rows = mysqli_num_rows($get_result);

    if ($get_data_rows > 0) {

        $indexrow = mysqli_fetch_assoc($get_result);

  } else {
        echo "Section coming Soon";
    }


    return $indexrow;
}





?>