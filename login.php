
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Freehand&family=Quicksand:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
body{
    overflow:hidden;
    background-image:url(assets/bg/background1.jpg);
    background-size:100vw 100vh;
    background-repeat:no-repeat;
    transition:2s ease;                 
}
    form{
position:absolute;
left:34%;
top:20%;
height:60vh;
width:35vw;
background:rgb(0,0,0,0.7);
border-radius:20px;
box-shadow:0 0 10px green, 0 0 20px yellow;
}
#cont{
top:0%;
position:absolute;
left:0%;
box-shadow: 0 0 5px black;
height:100%;
width:100%;

background-size:100% 100%;
background-repeat:no-repeat;
background:rgb(0,0,0,0.4);
}
#inp1{
width:100%;
height:5vh;
position:absolute;
left: 0%;
top:30%;
background:none;
border:none;
border-bottom:1px solid silver;
}
#inp2{
width:100%;
height:5vh;
position:absolute;
left: 0%;
top:50%;
background:none;
border:none;
border-bottom:1px solid silver;

}
#inp3{
width:100%;
height:5vh;
position:absolute;
left: 0%;
top:10%;
background:none;
border:none;
border-bottom:1px solid silver;

}
#btn{
width:20vw;
height:5vh;
position:absolute;
left: 20%;
top:60%;
background:none;
border-radius:50px;
color:white;
background-color:#FC6C85;
border:none;
font-family: 'Quicksand', sans-serif;
font-size:1.5vw;
}

#btn2{
width:20vw;
height:5vh;
position:absolute;
left: 20%;
top:70%;
background:none;
border-radius:50px;
color:white;
background-color:#FC6C85;
border:none;
font-family: 'Quicksand', sans-serif;
font-size:1.5vw;
}

#profile{
width:5.5vw;
border-radius:50%;
padding:15px;


}
</style>

</head>
<body scroll="no">
<nav class="navbar" style = "z-index:100; position:absolute;width:100%;height:6rem;background:rgb(0,0,0,0.5);">
  <div class="container-fluid">
    
    
    
     
    
  </div>
</nav>

    <div class="container-fluid" id = "cont">
    
    <form action="index_code.php"  method = "post" class = "row" id = "frm">
    <div class="col-md-12">
   <input type="text" id = "inp3" placeholder = "Enter your school id" class="form-control" name=  "schid">
   </div><br> <br><br><br><br>
    <div class="col-md-12">
   <input type="text" id = "inp1" placeholder = "Enter your username" class="form-control" name=  "usr">
   </div><br> <br><br><br><br>
   <div class="col-md-12">
   <input type="password" id = "inp2" placeholder = "Enter your password" class="form-control" name = "pass">
</div><br><br>
<div class="col-md-12">
   <button type =  "submit " id = "btn" class="form-control">Login</button>
   <button type =  "submit " formaction="index_code2.php" id = "btn2" class="form-control">Login as Admin</button>
</div>

   </form>
  
</div>
<script>
    function bg(){
document.body.style.backgroundImage="url(assets/bg/background2.jpg)";

function bg1(){
document.body.style.backgroundImage="url(assets/bg/background1.jpg)";
const tm1 = setTimeout(bg,3000);

}const tm2 = setTimeout(bg1,3000);
}
const tm = setTimeout(bg,3000);
</script> 
  
</body>
</html>