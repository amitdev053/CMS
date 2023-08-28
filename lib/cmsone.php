<?php
// Index page Image, heading & paragraph script starts Here----------------------------------->

include '../php/config.php';


// function getindexpagedata(){
    include '../php/config.php';

$indexsectionname = "index_page";
$indexsql = "SELECT * FROM `website_contents` WHERE section_name = '{$indexsectionname}'";
$indexresult = mysqli_query($conn, $indexsql);

$indexcolrow =mysqli_num_rows($indexresult);

// }
// Index page Image, heading & paragraph script completed Here----------------------------------->


//About Image, heading & paragraph  script starts Here----------------------------------->

$aboutsectionname = "About _section";
$aboutsqlone = "SELECT * FROM `website_contents` WHERE section_name = '{$aboutsectionname}'";

$aboutresultone = mysqli_query($conn, $aboutsqlone);

$aboutcolrowone =mysqli_num_rows($aboutresultone);

//About Image, heading & paragraph  script Completed Here----------------------------------->

// About Card Section script starts Here--------------------------------------->

$aboutcardkey = "about_card_section";
$sqltwo = "SELECT * FROM `website_contents` WHERE section_name = '{$aboutcardkey}'";
$resultone = mysqli_query($conn, $sqltwo);
$colrowone =mysqli_num_rows($resultone);


// About Card Section script complete Here--------------------------------------->

// Astrology Service Section script start here---------------------------------->

// ------------------------------------ Subsection --------------------------->

// Astrology Astrologer Service Section script start here---------------------------------->

$astrologysectioname = "Astrology_section_one";

$astrologysql = "SELECT * FROM `website_contents` WHERE section_name = '{$astrologysectioname}'";

$astrologyresult = mysqli_query($conn, $astrologysql);

$astrologycolrow =mysqli_num_rows($astrologyresult);

// Astrology Astrologer Service Section script completed here---------------------------------->

// Astrology Numerology Service Section script start here---------------------------------->

$numerologysectionname = "Numerolgy_section_one";

$numerologysql = "SELECT * FROM `website_contents` WHERE section_name = '{$numerologysectionname}'";

$numerologyresult = mysqli_query($conn, $numerologysql);

$numerologycolrow =mysqli_num_rows($numerologyresult);


// Astrology Numerology Service Section script Complted here---------------------------------->

// Astrology Vastu Service Section script start here---------------------------------->

$vastusectionname = "Vastu_section_one";

$vastusql = "SELECT * FROM `website_contents` WHERE section_name = '{$vastusectionname}'";

$vasturesult = mysqli_query($conn, $vastusql);

$vastucolrow =mysqli_num_rows($vasturesult);

// Astrology Vastu Service Section script Completed here---------------------------------->

// Astrology AstroVastu Service Section script start here---------------------------------->


$astrovastusectionname = "astrovastu_section_one";

$astrovastusql = "SELECT * FROM `website_contents` WHERE section_name = '{$astrovastusectionname}'";

$astrovasturesult = mysqli_query($conn, $astrovastusql);

$astrovastucolrow =mysqli_num_rows($astrovasturesult);


// Astrology AstroVastu Service Section script Completed here---------------------------------->

// ------------------------------------ Subsection End --------------------------->

// Astrology Service Section script Completed here---------------------------------->

// Video Section script starts here---------------------------------->
$videosectionname = "video_sec_one";

$videosql = "SELECT * FROM `website_contents` WHERE section_name = '{$videosectionname}'";

$videoresult = mysqli_query($conn, $videosql);

$videocolrow =mysqli_num_rows($videoresult);

// Video Section script completed here---------------------------------->

// Remedies Section script starts here---------------------------------->

$storysectionname = "Remedies Story";
$storysql = "SELECT * FROM `website_contents` WHERE section_name = '{$storysectionname}'";
$storyresult = mysqli_query($conn, $storysql);
$storycolrow =mysqli_num_rows($storyresult);

// Remedies Section script completed here---------------------------------->


?>