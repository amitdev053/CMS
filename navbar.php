<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
</style>
<style>
*{
    margin: 0;
    padding: 0;
}
body{
    font-family:poppins;
}

.horizontalheader{
    padding: 20px 0px 20px 220px;
    
z-index: 50;

background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
 
}
.fixed{
    position: fixed;
    top: 0;
}
.horizontalheader .container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 7px 112px;
    
}
.header2icon{
    width: 3vw;
    font-size: 23px;
    color: black;
    margin-top: 13px;
    cursor: pointer;
    margin-left: auto;
}
#verticalicon{
    cursor: pointer;
    font-size: 20px;
    color: #044b90;
    padding: 10px 13px;
    border-radius:7px;
    background: white;
    border: 1px solid wheat;
    outline: none;
}

#closeicon{
    cursor: pointer;
    font-size: 23px;
    color: #99b19c;
}
.verticalheader{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    position: fixed;
    height: 100vh;
    background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
    z-index: 1;
    top: 0;
    padding: 0px 0px;
    left: 0;
    opacity: 1;
    margin-right: 2rem;
transition: all 0.3s linear;
    width: 16vw;
}
.verticalheader ul{
    list-style: none;
    margin: 20px 0px;
    
    width: 16vw;
    padding: 5px 9px;
    

}
.verticalheader li{

    margin: 20px 0px;
    background: #f5576c;
transition: all 0.3s linear;
    padding: 6px 10px;
    cursor: pointer;

   
   }
.verticalheader li:hover{
    background: #ff0844;
}
.verticalheader li a{
 text-decoration: none;
 text-decoration: none;
 color: white !important;
   
    transition: all 0.3s linear;
    font-size: 14px;
    font-weight: 700;
}

.rightdiv{
    background:#f5576c;
    padding: 10px 20px;
    color: white;
    cursor: pointer;
    font-size: 14px;
    border-radius: 5px;
    font-weight: 500;
}

@media screen and (max-width:480px){
    *{
        width: 100vw;
        box-sizing: border-box;
   
    }
    .ftco-section{
        margin-left: 0px;
    }
    .horizontalheader{
        width: 100vw;
    }
    .horizontalheader .container{

    }
}

/* Overlay Css Start Here ------------------------*/

#overlay {
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


/* Retrification in vertical navbar------------------------- */

.imgcontainer{
    width:100%;
    padding:20px 10px;
    display:flex;
    border-bottom:2px solid #ff0844;
    justify-content:center;
    align-items:center;
    
}
.imgcontainer img{
  width: 46%;
  filter: drop-shadow(2px 4px 6px #ff0844);
  transition:all 0.5s ease-in-out;

}
.imgcontainer img:hover{
    filter: drop-shadow(2px 4px 6px white);
    cursor: pointer;
}
.sittingicon{
    position:absolute;
    right:20px;
    bottom:50px;
    color:white;
    font-size:23px;
    cursor:pointer;
    transition:all 0.8s ease-in-out;
}
.sittingicon:hover{
transform:rotate(360deg);
font-size:23px;
}
</style>
<head>
<header>
<header>



<div class="container verticalheader" id="verticalheader">
	<div class="imgcontainer">
        <img src="./aachaarya/image/aachaarya-logo.png" onclick="firstPage()" alt="">
    </div>
	<ul id="verticalul">
    <li class="linkli" onclick="redirectthree()"><a href="manage-content.php" onclick="tabletr()">Manage Content<i  style="float:right ;    padding: 5px 5px;" class="fa-solid fa-angle-right"></i></a></li>
    <li class="linkli" onclick="websitecontent()"><a href="website-content.php" >Add Content <i  style="float:right ;    padding: 5px 5px;" class="fa-solid fa-angle-right"></i></a></li>

    <li class="linkli" onclick="managesection()"><a href="manage-section.php" >Manage Sections <i  style="float:right ;    padding: 5px 5px;" class="fa-solid fa-angle-right"></i></a></li>
    
      
       
        


	</ul>
    <i class="fa-sharp fa-solid fa-gear sittingicon"></i>
</div>
		</header>
<!-- Gallery Image Modal Box Start here -------------------------- -->
<div id="overlay" >
	
	<div class="container overlaycontainer">
		<!-- Photo Grid Starts Here -->
        <i class="fa-solid fa-xmark crossicon" onclick="closeoverlay()"></i>  	
<h1 class="sectionheading createsectionheading">Create Section Id</h1>

<form id="createdsectionid" >
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Section Id</label>
    <input type="text" class="form-control" id="sectionidinput" aria-describedby="emailHelp" required>    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Section Name</label>
    <input type="text" class="form-control" id="sectionnameinput" aria-describedby="emailHelp" required>    
  </div>
  
 
  <button type="submit" id="createdsectionidbtn" class="btn btn-primary addsectionbtn">Submit</button>
</form>

	<!-- Photo Grid End Here -->
	</div>
</div>

<!-- Gallery Image Modal Box Completed here -------------------------- -->
    <script src="https://kit.fontawesome.com/1508b7bacb.js" crossorigin="anonymous"></script>
  
<script>
	function websitecontent(){
		location.href="website-content.php"
	}
	function firstPage(){
		location.href="manage-content.php"
	}
	function managesection(){
		location.href="manage-section.php"
	}
  function redirectone(){
		location.href="numerologist.php"
	}
    function redirectthree(){
		location.href="manage-content.php"
	}
    function arracharyaindex(){
		location.href="arracharyaindex.php"
	}

    function redirectabout(){
		location.href="backendabout.php"
	}
    function redirectastrology(){
		location.href="backendastrology.php"
	}

// Sticky navbar Function Starts Here
// let blogrow=document.querySelector('.sectionheading')
// console.log(blogrow)
// const nav = new IntersectionObserver ((entries, observer)=>{

// const entry = entries[0];
// console.log(entry.isIntersecting);

// if(entry.isIntersecting ==false){
//   let horizontalheader=document.querySelector('.horizontalheader').classList.add('fixed')
// }
// else{
//   let horizontalheader=document.querySelector('.horizontalheader').classList.remove('fixed')
// }


// },{
//     root:null,
//     threshold: 0,
// })

// nav.observe(blogrow)

// Overlay Js Display function Start------------------------------//

function tabletr(){
	
	let overlay = document.querySelector('#overlay').style.display ="block"
	
	
}
// Overlay Js hide function Start------------------------------//
function closeoverlay(){
    let closeoverlay = document.querySelector('#overlay').style.display ="none"
	
}
// Overlay Js hide function Complete------------------------------//
// Reset form function Start here------------------------------//




</script>