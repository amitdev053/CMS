<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Content Management</title>
    <link rel="icon" type="image/x-icon" href="./img/logo.webp">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- bootstrap css link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<style>
  body{
    background:#eee;

  }
  .addsectionform{
    width:50vw;
    padding:50px 50px;
    background:white;
    box-shadow: 0 0 0 0 rgba(90, 113, 208, 0.11), 0 4px 16px 0 rgba(167, 175, 183, 0.33);
    margin:50px auto;
    border-radius: 10px;
    transform: translate(90px, 80px);

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
  
</style>
</head>
<body>

<?php include 'navbar.php';?>

<div class="container addsectionform">
<h1 class="sectionheading">Add Website Section</h1>
<form id="addsectionform">
   
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Section Id</label>
    <input type="text" class="form-control" id="sectionid" aria-describedby="emailHelp" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Section Name</label>
    <input type="text" class="form-control" id="sectionname" >
  </div>
 
  <button type="submit" id="addsectionbtn" class="btn btn-primary addsectionbtn">Submit</button>
</form>

</div>

<?php include 'footer.php';?>
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- bootstrap Js link -->
<script src="https://kit.fontawesome.com/1508b7bacb.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    function reset(){
        let addsectionform =document.getElementById('addsectionform').reset()
    }
let addsectionbtn = document.getElementById('addsectionbtn').addEventListener('click', function(e){
    
    let websection ={}
    websection['sectionid'] = document.getElementById('sectionid').value
    websection['sectionname'] = document.getElementById('sectionname').value
    console.log(websection)


  if(websection['sectionid']==''){
    alert("Please Enter Section id")
  }
  else if(websection['sectionname'] == ''){
    alert("Please Enter Section name")
  }
  else{
    let websectionjson = JSON.stringify(websection)
    console.log(typeof websectionjson)

    fetch('php/insertsection.php',{
        method:"Post",
        body:websectionjson,
        headers:{
            'Content-type': 'application/json',
        }        
    }).then(function(response){
                response =JSON.parse(websectionjson)
                return response
    }).then(function(result){
        console.log("Data Insert : ",result['insert'])
        reset()
      
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
       
       
    }).catch(function(err){
        console.log("Couldn't sand", err)
    })
}
e.preventDefault()
})




</script>
</body>
</html>