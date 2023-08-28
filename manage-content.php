<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aarcharya backend Site</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<script src="https://cdn.tiny.cloud/1/xot0aq315hsltf2zvlh7pmdharpw156u4glm1e8ox3hwg2tk/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" integrity="sha512-WEQNv9d3sqyHjrqUZobDhFARZDko2wpWdfcpv44lsypsSuMO0kHGd3MQ8rrsBn/Qa39VojphdU6CMkpJUmDVw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script>
      tinymce.init({
        selector: '#updatecontentdiscripation',
      });
     
    </script>
<style>
      body{
        background:#eee;
      }
    .managecontenttable{
    
        width: 70vw;
    background: white;
    margin: 10px auto;
   
    transform: translate(100px, 10px);
    padding: 20px;
    border-radius:10px
}

.managecontenttable tr td{
  font-size:13px;
}

    
#deleteoverlay {
  position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  
  padding: 20px 30px;

  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
#editoverlay{
    position: fixed; /* Sit on top of the page content */
  display: none; /* Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  
  padding: 20px 30px;

  bottom: 0;
  background-color: rgba(0,0,0,0.5); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}

.deleteheading{
    
    font-size: 20px;
    font-weight: 600;
    font-family: poppins;

}
.update-dialog{
    margin:0px auto;
}
.outermangetable{
    display: flex !important;
    justify-content: center;
    align-items: center;
    width: 90vw;
    /* padding: 100px; */
    /* border: 1px solid black; */
    flex-direction: column;
   padding: 30px;
    margin: 0px auto;
    text-align: center;
}
.siteheading{
    font-size:26px;
    margin-left:9rem;
    font-family:poppins;
    font-weight:600;
    
}
.addmanagebtn{
  
    background:#ff0844;
  transition:all 0.3s ease-in-out;
    font-size:17px;
 border:none;
    color:white;
    font-family:poppins;
    cursor:pointer;
}
.addmanagebtn:hover{
  background:white;
  outline:none;
  color:#ff0844;
  border:1px solid #ff0844;

    
}
.deletebtn{
    background:#ff0844 !important;
    border:none;
   border:1px solid #ff0844 !important;

}
.deletebtn:hover{
    background:white !important;
    color:#ff0844 !important;
    
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
   
    margin-left:-5rem;
}

.addsectionbtn{
    width:100%;
    margin-top:10px;
    background:#ff0844;
    border:none;
  }
  .siteheading {
    font-size: 26px;
    margin-left: 0rem;
    font-family: poppins;
    font-weight: 600;
}
.editbtn:hover{
    background:white;
    color:blue;
}
@media screen and (min-width:1450px) and (max-width:2500px){
  body{
     margin:0;
     height:100vh;
     padding:0;
     overflow-x:hidden;
  }
  footer{
    width:100vw ;
    position: absolute;
 
    position: absolute !important;
    background:#ff0844 !important;
  }
  .footerbox{
    background:#ff0844 !important;
  }
}

.search-container {
  display: flex;
    justify-content: space-between;
    align-items: center;
}

.searchinput {
  padding:8.8px;
width:30vw !important;
outline:none;
  font-size: 14px;

  border-bottom:1px solid #eee !important;
  border-top:1px solid #eee !important;
  border-left:1px solid #eee !important;
  border: none;
}

.search-container button {
  float: right;
  padding: 9.2px 15px;
  background:#ff0844 !important;
  margin-right: 16px;

  color:white;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ccc;
}
.siteimages{
  width:10vw;
}


footer{
    position: absolute;
 
    width: 83.3vw;
    background:#ff0844 !important;
    margin-left: 13rem;
  
}
.add_content{
  border:1px solid #ff0844 !important;
  transition:all 0.3s ease-in-out;
}
.add_content:hover{
  background:white !important;
  color:#ff0844 !important;
  
}
#contentnotexit{
  font-size:15px;
  font-weight:600;
}
</style>

</head>
<body>

<?php include 'navbar.php';?>





<div class="container managecontenttable">

<div class="search-container">

<h1 class="siteheading text-center ">Manage Content</h1>
    <form action="">
      <input type="text" onkeyup="searchContent(event)" onfocus="changeSearchIcon()" onblur="setsearchicon()"class="searchinput" id="searchinput" placeholder="Search your content ...." name="search">
      <button type="submit" arial-label="search"><i id="searchicon" class="fa fa-search"></i></button>
    </form>
    <button class="btn btn-info add_content" id="add_content_btn">Add Content</button>
  </div>
<table class="table table-bordered text-center mt-3 align-middle">

        <thead>
            <tr>
              
                <th>Section Id</th>
                <th>Content Name</th>
                <th>Content Value</th>
                <th>Content image</th>
                <th>Content Video</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
           
           
        </tbody>
    </table>
  

</div>






 <!-- Delete modal ------------------------->
 <div id="deleteoverlay" >
<div class="modal-dialog modal-dialog-centered innermodal">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title deleteheading" id="staticBackdropLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="modalclose()"></button>
      </div>
      <div class="modal-body">
        Are your sure want to delete content
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="modalclose()">Cancel</button>
        <button type="button" onclick="deleteTableContent()"  class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
 </div>
 </div>
 <!-- Delete modal ------------------------->


 
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
    <input type="text" id="updatecontentdiscripation" name="contentvalue" class="form-control"  >
   </div>
  
   <button type="submit" id="modaifycontentbtn"  class="btn btn-primary addsectionbtn">Submit</button>
 </form>

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
  <div class="text-center text-light p-3" >
    Manage Your Content in a single place 
    <a class="text-light footerlink" href="https://www.babusiya.com/" target="_blank">babusiya.com</a>
  </div>
  <!-- Copyright -->
</footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>




<script>


let add_content_btn =document.getElementById('add_content_btn').addEventListener('click', function(){
  location.href= "website-content.php"
})
function getContent(){
  fetch("php/getcontents.php").then(function(response){
    return response.json()
  }).then(function(data){
   
   let tbody =document.getElementById('tbody')
    if(data['empty']){
     
   let simpleTr = `<tr><td colspan="6" id="contentnotexit">Content does not exit</td></tr>`
   tbody.innerHTML += simpleTr
   
     
    }else{
     
      let section = document.getElementById('section')
      let tr =''
      for(let i in data){
      
         let content_d =data[i].content_discripation

         
  let tt= content_d.split(" ", 20,) + "...";
 
let maintitle =tt.toString().replaceAll(",", " ")


            tr +=
            `
            <tr class="trrow">

                <td>${data[i].section_id}</td>
                <td id="conname">${data[i].content_heading}</td>
              <td id="content_dis">${maintitle}</td>
                
                <td><img src="uploadimg/${data[i].content_image}" id="siteimage" class="img-fluid siteimages bimages" /></td>
                <td> 
  <video width="150" height="150" id="outputaboutcardvideo" controls>
  <source src="uploadimg/${data[i].content_video}" id="videosrc"  type="video/mp4">
 </video>
  </td>
                <td id="edit"><button class="btn btn-primary editbtn" onclick="editContent(${data[i].content_id})">Edit</button></td>
                <td id="del"><button class="btn btn-danger deletebtn" onclick="deleteContent('${data[i].content_id}', '${data[i].content_name}')">Delete</button></td>                
            </tr>
            
            
            `
            tbody.innerHTML = tr
      }
     
      
    }
  })
}




getContent()
let deletecontentid;
let contentname
function deleteContent(id, name){
    console.log(id)
    deletecontentid = id
    contentname =name
    console.log(name)
    let overlay = document.querySelector('#deleteoverlay').style.display ="block"
   
}
function deleteTableContent(){
   
fetch('php/deletecontent.php?conid='+deletecontentid,{
    method:'DELETE',
}).then(function(response){
    return response.json()
}).then(function(result){
    console.log(result)
    console.log(result.insert)
    if(result.insert == "Success"){
        Toastify({
          text:"Website Content has been Deleted",
          duration: 3000,
          newWindow: true,
          gravity: "bottom", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
          },
        }).showToast();
   
        let overlay = document.querySelector('#deleteoverlay').style.display ="none"
        getContent()
    }else{
        Toastify({
          text:"Website Content has not been deleted ",
          duration: 3000,
          newWindow: true,
          gravity: "bottom", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "#ff0844",
          },
        }).showToast();
        let overlay = document.querySelector('#deleteoverlay').style.display ="none"
    }
}) 



}

function modalclose(){
    let overlay = document.querySelector('#deleteoverlay').style.display ="none"
    let updateoverlay = document.querySelector('#editoverlay').style.display ="none"
}



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
         option.innerText = data[i].section_id

         section.appendChild(option);
      }
     
      
    }
  })
}
getSectionId()

function editContent(id){
    console.log(id)
    // let overlay = document.querySelector('#editoverlay').style.display ="block"

   
location.href= "updatecontent.php?editconid="+id
}


//Set the number of character in content discripation

function searchContent(event){
  let searchinput = document.getElementById('searchinput').value

  if(searchinput === ''){
    getContent()
   
    return false
  }else{
    fetch("php/searchcontent.php?searchid="+searchinput).then(function(response){
    return response.json()
  }).then(function(data){   
   let tbody =document.getElementById('tbody')
    if(data['empty']){
     
   let simpleTr = `<tr><td colspan="5">Content does not exit</td></tr>`
   tbody.innerHTML = simpleTr
   return false;
     
    }else{
     
      let section = document.getElementById('section')
      let tr =''
      for(let i in data){
      
          
            tr +=
            `
            <tr class="trrow">

                <td>${data[i].section_id}</td>
                <td id="conname">${data[i].content_heading}</td>
                <td>${data[i].content_discripation}</td>
                <td><img src="uploadimg/${data[i].content_image}" class="img-fluid siteimages" /></td>
                <td> 
                <video width="150" height="150" id="outputaboutcardvideo" controls>
                <source src="uploadimg/${data[i].content_video}"  type="video/mp4">
                </video>
                </td>
                <td id="edit"><button class="btn btn-primary editbtn" onclick="editContent(${data[i].content_id})">Edit</button></td>
                <td id="del"><button class="btn btn-danger deletebtn" onclick="deleteContent('${data[i].content_id}', '${data[i].content_name}')">Delete</button></td>                
            </tr>
            
            
            `
            tbody.innerHTML = tr
      }
     
      
    }
  })
  }

}
function changeSearchIcon(){
        console.log("onblur")
        let searchicon =document.getElementById('searchicon').className = "fa-solid fa-xmark"
      let searchclass= document.getElementById('searchicon').className
      console.log(searchclass)
      if(searchclass == "fa-solid fa-xmark"){
document.getElementById('searchicon').addEventListener('click', function(){
          document.getElementById('searchinput').value =""
          

        })
}else{

}
 }

 
      function setsearchicon(){
        console.log("onblur")
        let searchicon =document.getElementById('searchicon').className = "fa fa-search"
        Toastify({
          text:"Provide what content your want to find",
          duration: 3000,
          newWindow: true,
          gravity: "bottom", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "white",
            color:"black",
          },
        }).showToast();
      }


</script>
</body>
</html>