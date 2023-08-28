<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Content Management</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- bootstrap css link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.tiny.cloud/1/xot0aq315hsltf2zvlh7pmdharpw156u4glm1e8ox3hwg2tk/tinymce/5/tinymce.min.js" 
    referrerpolicy="origin"></script>
    

  <script>
      tinymce.init({
        selector: '#sitediscripation',
       
      });
  
    
  </script>
    
<style>
    body{
    background:#eee;

  }
  .addsectionform{
    width:50vw;
    padding:30px 50px;
    background:white;
    box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
    margin:50px auto;
    transform: translate(60px, 20px);
    border-radius: 10px;
  }
  .sectionheading{
    font-size: 30px;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    text-align: center;
    margin-bottom: 20px;
  }
  .addsectionbtn{
    width:100%;
    margin-top:10px;
    background:#ff0844;
    border:none;
  }
  .active{
    
    margin: 20px 0px;
    background: #0d6efd !important;
transition: all 0.3s linear;
    padding: 6px 10px;
    cursor: pointer;

}
footer{
    position: absolute;
  
    width: 83.3vw;
    background:#ff0844 !important;
    margin-left: 13rem;
  
}

/* About Image Input box style Starts here------------------------------------ */

.drop-container {
  position: relative;
  display: flex;
  gap: 10px;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 200px;
  padding: 20px;
  border-radius: 10px;
  border: 1px solid #eee;
  color: #444;
  cursor: pointer;
  transition: background .2s ease-in-out, border .2s ease-in-out;
}

.drop-container:hover {
  background: #eee;
  border-color: #111;
}

.drop-container:hover .drop-title {
  color: #222;
}

.drop-title {
  color: #444;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  transition: color .2s ease-in-out;
}

input[type=file] {
  width: 350px;
  max-width: 100%;
  color: #444;
  padding: 5px;
  background: #fff;
  border-radius: 10px;
  border: 1px solid #555;
}

input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background:#ff0844;
  padding: 10px 20px;
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}

.outputimg{
  width:10vw;
}
/* About Image Input box style Completed------------------------------------ */

</style>
</head>
<body>

<?php include 'navbar.php';?>

<!-- fiveth Form Starts Here-------------------------------------->
<div class="container addsectionform">
<h1 class="sectionheading">Create Content</h1>
<form id="astrologycontent" method="post" action="./php/uploadindexcontent.php"  enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Site Title</label>
    <input type="text" class="form-control" id="sitetitle" name="sitetitle" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Discripation</label> 
    <input type="text" id="sitediscripation"  name="sitediscripation" class="form-control"  >
  </div>

 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Main Heading</label>
    <input type="text" class="form-control" id="sitemainheading" name="sitemainheading" required>
  </div>

 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Main Content</label>
    <input type="text" class="form-control" id="sitemaincontent" name="sitemaincontent" required>
  </div>

  <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Add Image</label>   
    <label for="images" class="drop-container">
    <img src="" id="outputsiteimage" class="img-fluid outcardputimg" alt="">
  <input type="file" id="siteimageinput" accept="image/*" name="siteimageinput"  required>
  <!-- <input type="text" style="display:none;text-align: center; border:none;" id="imagename" required> -->
</label>

  </div>
 
  <button type="submit" id="sitebtn" name="addcontentbtn" class="btn btn-primary addsectionbtn">Submit</button>
</form>
</div>
<!-- fiveth Form Completed Here-------------------------------------->


<footer class=" text-center text-lg-start">
   <!-- Copyright -->
  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Manage Your Content in a single place 
    <a class="text-light footerlink" href="https://www.babusiya.com/" target="_blank">babusiya.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- bootstrap Js link -->
<script src="https://kit.fontawesome.com/1508b7bacb.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>



<script>
 
// function reset(){
//     let addsectionform =document.getElementById('astrologycontent').reset()
// }

// let astrologobtn =document.getElementById('sitebtn').addEventListener('click', function(e){
// e.preventDefault()

// let sitecontent={}

// sitecontent['sitetitle'] = document.getElementById('sitetitle').value

// sitecontent['sitediscripation'] =(((tinyMCE.get('sitediscripation').getContent()).replace(/(&nbsp;)*/g, "")).replace(/(<p>)*/g, "")).replace(/<(\/)?p[^>]*>/g, "")


// sitecontent['sitemainheading'] = document.getElementById('sitemainheading').value
// sitecontent['sitemaincontent'] = document.getElementById('sitemaincontent').value

// console.log(sitecontent)

// let sitecontentjson = JSON.stringify(sitecontent)
// fetch('php/indexcontent.php',{
//         method:"Post",
//         header:{
//             'Content-type': 'application/json',
            
//         },
//         body:sitecontentjson,
//     }).then(function(response){
//         response =JSON.parse(sitecontentjson)
//         return response
       
//     }).then(function(result){
//         console.log("This is result",result)
//         reset()
//         Toastify({
//           text:"Content has been uploaded succesfully",
//           duration: 3000,
//           newWindow: true,
//           gravity: "bottom", // `top` or `bottom`
//           position: "center", // `left`, `center` or `right`
//           stopOnFocus: true, // Prevents dismissing of toast on hover
//           style: {
//             background: "linear-gradient(to right, #00b09b, #96c93d)",
//           },
//         }).showToast();
       
//     }).catch(function(err){
//         console.log("We can't submit", err)
//     })




// })


let cardimages = document.getElementById('siteimageinput')
 document.getElementById('siteimageinput').onchange = evt => {
  const [file] = cardimages.files
 let  filename = cardimages.files[0].name
  if (file) {
    let outputsiteimage =document.getElementById('outputsiteimage')
    outputsiteimage.src = URL.createObjectURL(file)
    // console.log(filename)
    document.getElementById('siteimageinput').style.display= "none"
    // document.getElementById('imagename').style.display ="block"
    // document.getElementById('imagename').value = filename
  }
}
</script>
</body>
</html>