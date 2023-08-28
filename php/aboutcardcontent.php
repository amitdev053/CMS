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
    location.href ="../backendastrology.php"
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
if(isset($_POST['addcardcontentbtn'])){

$aboutcardheading=$_POST['aboutcardheading'];
$aboutcarddiscripation=$_POST['aboutcarddiscripation'];

$aboutcardimage=$_FILES['aboutcardimage'];

// print_r($aboutimage);

$filename = $aboutcardimage['name'];
$filepath = $aboutcardimage['tmp_name'];
$fileerror = $aboutcardimage['error'];



  $uploadimage = '../uploadimg/aboutcardcontentimg/' .$filename;

   move_uploaded_file($filepath, $uploadimage);

//    echo $uploadimage;

    $Insertquery ="INSERT INTO `about_card_section`(`about_card_heading`, `about_card_discriparion`, `about_card_pic`) VALUES ('{$aboutcardheading}', '{$aboutcarddiscripation}','{$filename}')";


    $query = mysqli_query($conn, $Insertquery);
    echo '<script>upload()</script>';


}else{
    echo '<script>notupload()</script>';
}

?>
</body>
</html>

