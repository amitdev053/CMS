<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aarcharya backend Site</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.tiny.cloud/1/xot0aq315hsltf2zvlh7pmdharpw156u4glm1e8ox3hwg2tk/tinymce/5/tinymce.min.js" 
    referrerpolicy="origin"></script>
    

  <script>
      tinymce.init({
        selector: '#updatecontentdiscripation',
      });
     
    </script>
<style>
      body{
        background:#eee;
      }
.managecontenttable tr td{
  font-size:13px;
}
    .managecontenttable{
    
        width: 70vw;
    background: white;
    margin: 10px auto;
    transform: translate(100px, 10px);
    padding: 20px;
    border-radius:10px
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
    width: 40vw;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 0.3rem;
    outline: 0;
   
    margin-left:auto;
}
.outerform{
    padding:20px 30px !important;
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
    bottom: 0 !important;
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
.head{
  display:flex;
  align-items:center;
  justify-content:center;
  padding:5px 0px;
  margin-bottom:10px;
  
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

/* Overlay Css Start Here ------------------------*/

#sectionnameoverlay {
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
.overlaycontainer{

    background: white;
    width: 30vw;
padding:30px 30px;
    margin-top: 20vh;
    border-radius: 6px;
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;

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
   
  }
.crossicon{
    float: right;
    background: white;
    padding: 0px 1px;
    border-radius: 50%;
    font-size: 23px;
    font-weight: 800 !important;
    transition:all 0.4s ease-in-out;
}

.crossicon:hover{
    transform: scale(1.5,1.5);
    
}
.createsectionheading{
    font-size: 20px;
}
/* Overlay Css Completed Here ------------------------*/
footer{
    position: absolute;
  bottom:0;
    width: 84.7vw;
    background:#ff0844 !important;
    margin-left: 13rem;
  
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
    <button class="btn btn-info add_content" id="add_section_btn">Add Section</button>
  </div>
<table class="table table-bordered text-center mt-3 align-middle">

        <thead>
            <tr>
              
                <th>Section Id</th>
                <th>Section Name</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody id="tbody">
           
           
        </tbody>
    </table>
  

</div>

<!-- Create Section Name Section Start Here-------------------------->
<!-- Gallery Image Modal Box Start here -------------------------- -->
<div id="sectionnameoverlay" >
	
	<div class="container overlaycontainer">
		<!-- Photo Grid Starts Here -->
        <i class="fa-solid fa-xmark crossicon" onclick="closeoverlay()"></i>  	
<h1 class="sectionheading createsectionheading">Create Section Id</h1>

<form id="createdsectionid" >
   

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Section Name</label>
    <input type="text" class="form-control" id="sectionnamei" aria-describedby="emailHelp" required>    
  </div>
  
 
  <button type="submit" id="createdsectionidbtn" onclick="genrateSectionId(event)" class="btn btn-primary addsectionbtn">Submit</button>
</form>

	<!-- Photo Grid End Here -->
	</div>
</div>

<!-- Gallery Image Modal Box Completed here ---------------------------->
<!-- Create Section Name Section Start Here-------------------------->




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
     <label for="exampleInputEmail1" class="form-label">Section Name</label>
    <input type="text" id="updatesectionname" name="contentvalue" class="form-control"  >
   </div>

  
  
   <button type="submit" id="modifysectionid"  class="btn btn-primary addsectionbtn">Submit</button>
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


let add_section =document.getElementById('add_section_btn').addEventListener('click', function(){
  let overlay = document.querySelector('#sectionnameoverlay').style.display ="block"
})

function closeoverlay(){
  let overlay = document.querySelector('#sectionnameoverlay').style.display ="none"
}
function getContent(){
  fetch("php/getsectionid.php").then(function(response){
    return response.json()
  }).then(function(data){
   
   let tbody =document.getElementById('tbody')
    if(data['empty']){
     
   let simpleTr = `<tr><td colspan="5">Content does not exit</td></tr>`
   tbody.innerHTML += simpleTr
   
     
    }else{
     
      let section = document.getElementById('section')
      let tr =''
      for(let i in data){
      
         
            tr +=
            `
            <tr class="trrow">

                <td>${data[i].section_id}</td>
                <td id="conname">${data[i].section_name}</td>
                <td id="edit"><button class="btn btn-primary editbtn" onclick="editContent('${data[i].section_id}')">Edit</button></td>
                <td id="del"><button class="btn btn-danger deletebtn" onclick="deleteContent('${data[i].section_id}')">Delete</button></td>           
            </tr>
            
            
            `
            tbody.innerHTML = tr
      }
     
      
    }
  })
}

getContent()
let deletecontentid 
function deleteContent(id){
    console.log(id)
    deletecontentid = id
  
    let overlay = document.querySelector('#deleteoverlay').style.display ="block"
   
}


function deleteTableContent(){
   console.log(deletecontentid)
   fetch('php/deletesectionid.php?secid='+deletecontentid,{
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
let editid 
function editContent(id){
console.log(id)

    editid= id
let editoverlay =document.getElementById('editoverlay').style.display="block"
fetch("php/geteditsectioniddata.php?editsecid="+id).then(function(response){
  return response.json()
}).then(function(result){
  
for(let r in result){
  let updatesectionname = document.getElementById('updatesectionname').value = result[r].section_name
}

})
}

let modifysectionid = document.getElementById('modifysectionid').addEventListener('click', function(e){
  e.preventDefault()
  let updatesectioniddata ={}
  updatesectioniddata['updatesectionname'] = document.getElementById('updatesectionname').value

  let coustomid =  updatesectioniddata['updatesectionname'].replace(/[0-9]/g, '')
  let mainsecid =coustomid.replace(" ","_")
  let gensecid= mainsecid.split(" ", 1)
  let genrateid = gensecid.toString().toLowerCase()

  updatesectioniddata['editmainid'] = editid 

  updatesectioniddata['editsecid'] = genrateid


console.log(updatesectioniddata)
    
    let updatesectioniddatajson = JSON.stringify(updatesectioniddata)
        fetch('php/putsectionid.php',{
        method:"Put",
        body:updatesectioniddatajson,
        headers:{
            'Content-type': 'application/json',
        }        
    }).then(function(response){
        response =JSON.parse(updatesectioniddatajson)
        return response
            
    }).then(function(result){
       
      
        document.getElementById('sectionnamei').value =""   
            Toastify({
          text:"Website Section Id has been created Successfully",
          duration: 3000,
          newWindow: true,
          gravity: "bottom", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
          },
        }).showToast();
   
         getContent()
 document.querySelector('#editoverlay').style.display ="none"
    }).catch(function(err){
        console.log("Couldn't sand", err)
    })
   



})
// let deletecontentid;
// let contentname
// function deleteContent(id, name){
//     console.log(id)
//     deletecontentid = id
//     contentname =name
//     console.log(name)
//     let overlay = document.querySelector('#deleteoverlay').style.display ="block"
   
// }
// function deleteTableContent(){
   
// fetch('php/deletecontent.php?conid='+deletecontentid,{
//     method:'DELETE',
// }).then(function(response){
//     return response.json()
// }).then(function(result){
//     console.log(result)
//     console.log(result.insert)
//     if(result.insert == "Success"){
//         Toastify({
//           text:"Website Content has been Deleted",
//           duration: 3000,
//           newWindow: true,
//           gravity: "bottom", // `top` or `bottom`
//           position: "center", // `left`, `center` or `right`
//           stopOnFocus: true, // Prevents dismissing of toast on hover
//           style: {
//             background: "linear-gradient(to right, #00b09b, #96c93d)",
//           },
//         }).showToast();
   
//         let overlay = document.querySelector('#deleteoverlay').style.display ="none"
//         getContent()
//     }else{
//         Toastify({
//           text:"Website Content has not been deleted ",
//           duration: 3000,
//           newWindow: true,
//           gravity: "bottom", // `top` or `bottom`
//           position: "center", // `left`, `center` or `right`
//           stopOnFocus: true, // Prevents dismissing of toast on hover
//           style: {
//             background: "#ff0844",
//           },
//         }).showToast();
//         let overlay = document.querySelector('#deleteoverlay').style.display ="none"
//     }
// }) 



// }

// function modalclose(){
//     let overlay = document.querySelector('#deleteoverlay').style.display ="none"
//     let updateoverlay = document.querySelector('#editoverlay').style.display ="none"
// }



// function getSectionId(){
//   fetch("php/getsectionid.php").then(function(response){
//     return response.json()
//   }).then(function(data){
//     console.log(data)
   
//     if(data['empty']){
//    let selectedsec =document.getElementById('selectedsec').innerText = "Section does not Exit"
     
     
//     }else{
//       console.log("Record is Exit", data)
//       let section = document.getElementById('updatesection')
     
//       for(let i in data){
//         let option = document.createElement("option");
//         option.setAttribute('value',data[i].section_id);
//          option.innerText = data[i].section_id

//          section.appendChild(option);
//       }
     
      
//     }
//   })
// }
// getSectionId()

// function editContent(id){
//     console.log(id)
//     let overlay = document.querySelector('#editoverlay').style.display ="block"

//     fetch('php/updatecontent.php?editconid='+id).then(function(response){
//     return response.json()
// }).then(function(result){


// for(let k in result){
//     console.log(result[k].section_name)
    
// let updatesection = document.getElementById('updatesection').value = result[k].section_name
// console.log(updatesection.value)
// let updatecontentname = document.getElementById('updatecontentheading').value = result[k].content_heading

// tinymce.get('updatecontentdiscripation').setContent(result[k].content_discripation)



// }
// })
// }
// function reset(){
//         let addsectionform =document.getElementById('addcontentform').reset()
//     }
// let addsectionbtn = document.getElementById('modaifycontentbtn').addEventListener('click', function(e){
    
//     let modifycontent ={}
//     modifycontent['modifycontentid'] = document.getElementById('updatecontentid').value
//     modifycontent['modifysection'] = document.getElementById('updatesection').value
//     modifycontent['modifycontentname'] = document.getElementById('updatecontentname').value
//     modifycontent['modifycontentvalue'] = (((tinyMCE.get('updatecontentvalue').getContent()).replace(/(&nbsp;)*/g, "")).replace(/(<p>)*/g, "")).replace(/<(\/)?p[^>]*>/g, "")
//     console.log(modifycontent)
    

//   if(modifycontent['modifysection']==''){
//     alert("Please Enter Section id")
//   }
//   else if( modifycontent['modifycontentname'] == ''){
//     alert("Please Enter Content name")
//   }
//   else if(modifycontent['modifycontentvalue'] == ''){
//     alert("Please Enter Content Value")
//   }
//   else{
//     let modifysectionjson = JSON.stringify(modifycontent)
//     console.log(typeof modifysectionjson)

//     fetch('php/modifycontent.php',{
//         method:"Put",
//         body:modifysectionjson,
//         headers:{
//             'Content-type': 'application/json',
//         }        
//     }).then(function(response){
//                 response =JSON.parse(modifysectionjson)
//                 return response
//     }).then(function(result){
//         console.log("Data Insert : ",result['insert'])
       
      
//             Toastify({
//           text:"Website Section has been created Successfully",
//           duration: 3000,
//           newWindow: true,
//           gravity: "bottom", // `top` or `bottom`
//           position: "center", // `left`, `center` or `right`
//           stopOnFocus: true, // Prevents dismissing of toast on hover
//           style: {
//             background: "linear-gradient(to right, #00b09b, #96c93d)",
//           },
//         }).showToast();
//        reset()
//        document.querySelector('#editoverlay').style.display ="none"
//        getContent()
//     }).catch(function(err){
//         console.log("Couldn't sand", err)
//     })
// }
// e.preventDefault()
// })

function searchContent(event){
  let searchinput = document.getElementById('searchinput').value

  if(searchinput === ''){
    getContent()
   
    return false
  }else{
    fetch("php/searchsectionid.php?searchid="+searchinput).then(function(response){
    return response.json()
  }).then(function(data){   
   let tbody =document.getElementById('tbody')
    if(data['empty']){
     
   let simpleTr = `<tr><td colspan="5">Content does not exit</td></tr>`
   tbody.innerHTML += simpleTr
   
     
    }else{
     
      let section = document.getElementById('section')
      let tr =''
      for(let i in data){
      
          
            tr +=
            `
            <tr class="trrow">

                <td>${data[i].section_id}</td>
                <td id="conname">${data[i].section_name}</td>
                              
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
 
function reset(){
   
        document.getElementById('sectionnamei').value =""
    }
// Reset form function Completed------------------------------//
function genrateSectionId(event){
  event.preventDefault()
  let createdid={}
  createdid['sectionnameinput'] = document.getElementById('sectionnamei').value
  console.log(createdid)
  let secid = createdid['sectionnameinput'].replace(/[^a-zA-Z ]/g, "")
  let coustomid = secid.replace(/[0-9]/g, '')
  let mainsecid =coustomid.replace(" ","_")
  let gensecid= mainsecid.split(" ", 1)
  let genrateid = gensecid.toString().toLowerCase()



createdid['genratesecid'] = genrateid
  if(createdid['sectionnameinput']==''){
    alert("Provide Section name")
  } 

else{ 
    
    let createdsectionidjson = JSON.stringify(createdid)
        fetch('php/insertsectionid.php',{
        method:"Post",
        body:createdsectionidjson,
        headers:{
            'Content-type': 'application/json',
        }        
    }).then(function(response){
        response =JSON.parse(createdsectionidjson)
        return response
            
    }).then(function(result){
       
      
        document.getElementById('sectionnamei').value =""   
            Toastify({
          text:"Website Section Id has been created Successfully",
          duration: 3000,
          newWindow: true,
          gravity: "bottom", // `top` or `bottom`
          position: "center", // `left`, `center` or `right`
          stopOnFocus: true, // Prevents dismissing of toast on hover
          style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
          },
        }).showToast();
   
         getContent()
 document.querySelector('#sectionnameoverlay').style.display ="none"
    }).catch(function(err){
        console.log("Couldn't sand", err)
    })
   
}
}

function modalclose(){
    let overlay = document.querySelector('#deleteoverlay').style.display ="none"
    let editoverlay = document.querySelector('#editoverlay').style.display ="none"
   
}
</script>
</body>
</html>