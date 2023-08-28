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
    location.href ="../backendabout.php"
}

function upload(){
    Toastify({
        text:"Image has been uploaded",
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
          text: "Image has not been uploaded",
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
if(isset($_POST['addcontentbtn'])){

$aboutheading=$_POST['aboutheading'];
$aboutdiscripation=$_POST['aboutdiscripation'];
$aboutyear=$_POST['aboutyear'];
$aboutimage=$_FILES['aboutimage'];

// print_r($aboutimage);

$filename = $aboutimage['name'];
$filepath = $aboutimage['tmp_name'];
$fileerror = $aboutimage['error'];



  $uploadimage = '../uploadimg/' .$filename;

   move_uploaded_file($filepath, $uploadimage);

//    echo $uploadimage;

    $Insertquery ="INSERT INTO `about_section`(`about_heading`, `about_discripation`, `about_year`, `about_image`) VALUES ('{$aboutheading}', '{$aboutdiscripation}', '{$aboutyear}', '{$uploadimage}')";


    $query = mysqli_query($conn, $Insertquery);
    echo '<script>upload()</script>';


}else{
    echo '<script>notupload()</script>';
}

?>
</body>
</html>

