<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.tiny.cloud/1/xot0aq315hsltf2zvlh7pmdharpw156u4glm1e8ox3hwg2tk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#updatecontenttextareaa',
      });
     
    </script>

    <style>
        body{
            background:#eee;
        }
 .addsectionbtn{
            width:100%;
    margin-top:10px;
    background:#ff0844;
    border:none;
        }
 .outerform{
    padding:20px 30px !important;
}
.update-modal{
    position: relative;
    display: flex;
    flex-direction: column;
    width: 60vw;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
   
    margin-left:-3rem;
}
footer{
    position: absolute;
  
    width: 83.3vw;
    background:#ff0844 !important;
    margin-left: 13rem;
  
}
#updatecontenttextarea{
  font-size:15px;
}


    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
    <!-- Update modal ------------------------->


<div id="editoverlay"  >
<div class="modal-dialog modal-dialog-centered innermodal ">
    <div class="modal-dialog update-dialog">
    <div class="modal-content update-modal ">
      <div class="modal-header update-modal-header ">
        <h5 class="modal-title deleteheading" id="staticBackdropLabel">Update Content</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="modalclose()"></button>
      </div>
      <div class="outerform">
      <form id="addcontentform">
   
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Section</label>
     <select class="form-select" id="updatesection" aria-describedby="emailHelp" required>
     <option value="Select-Selection" id="editor" class="sectionoption">Select Section</option>
 </select>
   </div>
  
   <div class="mb-3">
     <!-- <label for="exampleInputPassword1" class="form-label">Content id</label> -->
     <input type="hidden" class="form-control" id="updatecontentid" required>
    
   </div>
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Content Heading</label>
    <input type="text" id="updatecontentheading" name="contentvalue" class="form-control"  >
   </div>

   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Content Discripation</label>
    <textarea type="text" id="updatecontenttextarea" name="contentvalue" rows="6" class="form-control">
        
    </textarea>
   </div>
  
   <button type="submit" id="modaifycontentbtn"  class="btn btn-primary addsectionbtn">Submit</button>
 </form>
<?php
$edit_id =$_GET['editconid'];
?>
 <input type="hidden" id="updatevalueid" value="<?php echo $edit_id; ?>">
</div>
 </div>
</div>
    </div>
  </div>
 </div>
 </div>
 
 

 <!-- Update modal ------------------------->
 <footer class=" text-center text-lg-start">
   <!-- Copyright -->
  <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    Manage Your Content in a single place 
    <a class="text-light footerlink" href="https://www.babusiya.com/" target="_blank">babusiya.com</a>
  </div>
  <!-- Copyright -->
</footer>
<script
  src="https://code.jquery.com/jquery-3.6.4.js"integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
		<script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
<script>

$(document).ready(function(){
  console.log("JQUERY is running")
})
function reset(){
        let addsectionform =document.getElementById('addcontentform').reset()
    }



function geteditdata(){

let id =document.getElementById('updatevalueid').value
 

    fetch('php/updatecontent.php?editconid='+id).then(function(response){
    return response.json()
}).then(function(result){
  console.log(result)
let section = document.getElementById('updatesection')
for(let k in result){

    console.log(result[k].section_id)
let option = document.createElement("option"); 
option.setAttribute('value',result[k].section_id);
option.innerText = result[k].section_id
section.appendChild(option);
section.value = result[k].section_id
let updatecontentname = document.getElementById('updatecontentheading').value = result[k].content_heading

let discripation = result[k].content_discripation
// document.getElementById('tinymce').value = result[k].content_discripation
let contentarea=document.getElementById('updatecontenttextarea').value =discripation;
console.log(discripation)





}
})
}
geteditdata()


function getSectionId(){
  fetch("php/getsectionid.php").then(function(response){
    return response.json()
  }).then(function(data){
    console.log(data)
   
    if(data['empty']){
   let selectedsec =document.getElementById('selectedsec').innerText = "Section does not Exit"
     
     
    }else{
      console.log("Record is Exit", data)
      let section = document.getElementById('updatesection')
     
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

function redirectmaincontent(){
  location.href= "manage-content.php"
}
let addsectionbtn = document.getElementById('modaifycontentbtn').addEventListener('click', function(e){
  e.preventDefault()
    let modifycontent ={}
    modifycontent['modifycontentid'] = document.getElementById('updatevalueid').value
    modifycontent['modifysection'] = document.getElementById('updatesection').value
    modifycontent['modifycontentname'] = document.getElementById('updatecontentheading').value
    modifycontent['modifycontentvalue'] = document.getElementById('updatecontenttextarea').value
    console.log(modifycontent)
    

  if(modifycontent['modifysection']==''){
    alert("Please Enter Section id")
  }
  else if( modifycontent['modifycontentname'] == ''){
    alert("Please Enter Content name")
  }
  else if(modifycontent['modifycontentvalue'] == ''){
    alert("Please Enter Content Value")
  }
  else{
    let modifysectionjson = JSON.stringify(modifycontent)
    console.log(modifysectionjson)

    fetch('php/modifycontent.php',{
        method:"Put",
        body:modifysectionjson,
        headers:{
            'Content-type': 'application/json',
        }        
    }).then(function(response){
                response =JSON.parse(modifysectionjson)
                return response
    }).then(function(result){
        console.log("Data Insert : ",result)
       
      
            Toastify({
          text:"Website Section has been created Successfully",
          duration: 3000,
          newWindow: true,
          gravity: "bottom", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
          },
        }).showToast();
       reset()
setTimeout(redirectmaincontent , 3000);
      
    }).catch(function(err){
        console.log("Couldn't sand", err)
    })
}

})
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>