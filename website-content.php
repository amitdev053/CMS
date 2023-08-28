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
        forced_root_block : "",
        selector: '#contentvalue',
        branding: false,
        name: 'contentvalue',
           newLine: true,
           settings: {
              pasteType: 'formattedClean',
              preserve: '',
              afterPasteClean: function (body) {            
                 body = GetWithoutScriptString(body)
                    return body;
                 },
              },
      });
      
   
    </script>
<style>
    body{
    background:#eee;

  }
  .addsectionform{
    width: 70vw;
    padding: 30px 50px;
    background: white;
    box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
    margin: 50px auto;
    transform: translate(100px, 20px);
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
  width: 89%;
    max-width: 100%;
    color: #444;
    padding: 5px 10px;
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
#outputaboutcardimg{
  width:10vw;
}
/* About Image Input box style Completed------------------------------------ */

#contentvalue{
  font-size:13px !important;


}
</style>
</head>
<body>

<?php include 'navbar.php';?>

<div class="container addsectionform">
<h1 class="sectionheading">Add Website Content</h1>
<form id="addcontentform" method="post" action="./php/uploadwebsitecontent.php"  enctype="multipart/form-data">
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Section Name</label>
    <select class="form-select" id="section" name="sectionname" aria-describedby="emailHelp" required>
    <option value="Select-Selection" id="editor" class="sectionoption">Section Name</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Content Name</label>
    <input type="text" class="form-control" id="contentname" name="contentheading" >
   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Content Value</label> 
    <input type="text" id="contentvalue" name="contentdiscripation" class="form-control"  >
  </div>
  <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Add Image</label>   
    <label for="images" class="drop-container">
    <img src="" id="outputaboutcardimg" class="img-fluid outcardputimg" alt="">
  <input type="file" id="aboutcardimage" accept="image/*" onChange="dragNdrop(event)" name="contentimage" ondrop="drop()"  >
  <!-- <input type="text" style="display:none;text-align: center; border:none;" id="imagename" required> -->
</label>

  </div>
  <div class="mb-3">
    
     <label for="exampleInputEmail1" class="form-label">Video Preview</label>   
     
    <label for="images" class="drop-container">
    <!-- <img src="" id="outputaboutcardvideo" class="img-fluid outcardputimg" alt=""> -->
    <video width="320" height="180" id="outputaboutcardvideo" controls>
     <source src=""  type="video/mp4">
     <source src="" type="video/ogg">
  Your browser does not support the video tag.
</video>
 
  <!-- <input type="text" style="display:none;text-align: center; border:none;" id="imagename" required> -->
</label>

<div class="mt-4">
<label for="exampleInputEmail1" class="form-label">Add Video</label>   
<input type="file" id="aboutcardvideo" ondrop="drop()" onChange="dragNdrop(event)" accept="video/*" name="contentvideo"  >
</div>

  </div>
 
  <button type="submit" id="addcontentbtn" class="btn btn-primary addsectionbtn" name="websitecontentbtn">Submit</button>
</form>
</div>

<footer class=" text-center text-lg-start">
   <!-- Copyright -->
  <div class="text-center text-light p-3" >
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


//     function reset(){
//         let addsectionform =document.getElementById('addcontentform').reset()
//     }
// let addsectionbtn = document.getElementById('addcontentbtn').addEventListener('click', function(e){
//     e.preventDefault()
//     let websitecontent ={}
//     websitecontent['section'] = document.getElementById('section').value
//     websitecontent['contentname'] = document.getElementById('contentname').value
//     websitecontent['contentvalue'] = (((tinyMCE.get('contentvalue').getContent()).replace(/(&nbsp;)*/g, "")).replace(/(<p>)*/g, "")).replace(/<(\/)?p[^>]*>/g, "")
//     console.log(websitecontent)

//     let websitecontentjson = JSON.stringify(websitecontent)
   
//     console.log(websitecontentjson)
//     fetch('php/insertcontent.php',{
//         method:"Post",
//         header:{
//             'Content-type': 'application/json',
//         },
//         body:websitecontentjson,
//     }).then(function(response){
//         response =JSON.parse(websitecontentjson)
//                 return response
       
//     }).then(function(result){
//         console.log("This is result",result)
//         reset()
//         Toastify({
//           text:"Website Content has been created Successfully",
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

function getSectionId(){
  fetch("php/getsectionid.php").then(function(response){
    return response.json()
  }).then(function(data){
    console.log(data)
   
    if(data['empty']){
   let selectedsec =document.getElementById('selectedsec').innerText = "Section does not Exit"
     
     
    }else{
      console.log("Record is Exit", data)
      let section = document.getElementById('section')
     
      for(let i in data){
        let option = document.createElement("option");
        option.setAttribute('value',data[i].section_id);
         option.innerText = data[i].section_name

         section.appendChild(option);
      }
     
      
    }
  })
}
getSectionId()

var header = document.getElementById("verticalul");
var btns = header.getElementsByClassName("linkli");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}

let cardimages = document.getElementById('aboutcardimage')
 document.getElementById('aboutcardimage').onchange = evt => {
  const [file] = cardimages.files
 let  filename = cardimages.files[0].name
  if (file) {
    let aboutcardimg =document.getElementById('outputaboutcardimg')
    aboutcardimg.src = URL.createObjectURL(file)
    // console.log(filename)
    document.getElementById('aboutcardimage').style.display= "none"
    // document.getElementById('imagename').style.display ="block"
    // document.getElementById('imagename').value = filename
  }
}



let cardvideo = document.getElementById('aboutcardvideo')
 document.getElementById('aboutcardvideo').onchange = evt => {
  const [file] = cardvideo.files
 let  vidofilename = cardvideo.files[0].name
  if (file) {
    let aboutcardvideo =document.getElementById('outputaboutcardvideo')
    aboutcardvideo.src = URL.createObjectURL(file)
    // console.log(filename)
    // document.getElementById('aboutcardvideo').style.display= "none"
    // document.getElementById('imagename').style.display ="block"
    // document.getElementById('imagename').value = filename
  }
}

function drag() {
    document.getElementById('aboutcardimage').parentNode.className = 'draging dragBox';
    document.getElementById('aboutcardvideo').parentNode.className = 'draging dragBox';
}
function drop() {
    document.getElementById('aboutcardimage').parentNode.className = 'dragBox';
    document.getElementById('aboutcardvideo').parentNode.className = 'dragBox';
}



</script>
</body>
</html>