<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>
<body>


<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
function redirect(){
    location.href ="../website-content.php"
}
function checkValue(){
  let section =document.getElementById('section').value

if(section == 'Select-Selection'){
  alert("Provide Section Name")
}
else{
  return false
}
}

function upload(){
    Toastify({
        text:"Content has been uploaded",
        duration: 3000,
        newWindow: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "linear-gradient(to right, #00b09b, #96c93d)",
        },
      }).showToast();
      setTimeout(redirect, 2000)
     
    }

    function notupload(){
        Toastify({
          text: "Content has not been uploaded",
          duration: 3000,
          newWindow: true,
          gravity: "top", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "linear-gradient(to right, #ff8080, #ff1a1a)",
          },
        }).showToast();
        setTimeout(redirect, 2000)
    }
</script>
<?php
include 'config.php';
$section_name = $_POST['sectionname'];
if($section_name == 'Select-Selection'){
  echo '<script>alert("Provide Section Name")</script>';
  echo '<script>location.href= "../website-content.php"</script>';
}
else{

if(isset($_POST['websitecontentbtn'])){
  
$sectioname=$_POST['sectionname'];

$contentheading=$_POST['contentheading'];

$contentdiscripation=strip_tags($_POST['contentdiscripation']);

$contentimage=$_FILES['contentimage']; 

$contentvideo=$_FILES['contentvideo']; 





$filename = $contentimage['name'];
$filepath = $contentimage['tmp_name'];
$fileerror = $contentimage['error'];


$videofilename = $contentvideo['name'];
$videofilepath = $contentvideo['tmp_name'];
$videofileerror = $contentvideo['error'];


$dd = $contentdiscripation;


  $uploadimage = '../uploadimg/' .$filename;

  $uploadvideo = '../uploadimg/' .$videofilename;

   move_uploaded_file($filepath, $uploadimage);

   move_uploaded_file($videofilepath, $uploadvideo);



    // $Insertquery ="INSERT INTO `website_contents`(`section_name`, `content_heading`, `content_discripation`, `content_image`, `content_video`) VALUES ('{$sectioname}', '{$contentheading}','{$dd}', '{$filename}', '{$videofilename}')";
     // $query = mysqli_query($conn, $Insertquery);


    $query = $conn->prepare("INSERT INTO `website_contents`(`section_id`, `content_heading`, `content_discripation`, `content_image`, `content_video`) VALUES ('{$sectioname}',?,?, '{$filename}', '{$videofilename}')");

    $query->bind_param("ss", $contentheading, $dd);

    $query->execute();

    echo '<script>upload()</script>';
    


}else{
    echo '<script>notupload()</script>';
}
}

?>
</body>
</html>

