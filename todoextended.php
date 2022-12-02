<?php
   session_start();  
   $val = $_SESSION['user']; 
   $cl = $_SESSION['class'] ;
   $school = $_SESSION['school'] ;
error_reporting(0);
   ?>

<?php 
 
 $con = mysqli_connect("localhost","root","","$school");
 if($con)
 {
 
 }
 $var = $_GET["user"];
 $query = sprintf("select * from todo_{$val} where sno = $var");
 
 $connectt = mysqli_query($con,$query);
 $dataa = mysqli_fetch_assoc($connectt);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300&display=swap');

    *{
        margin:0;
    }
    body{
        background:#161d30;
    }
</style>
</head>
<body>
   

        
            <div style = "width:100%;height:10rem;position:absolute;background:#292f45;" id = "contentnavbar">
   <a href = "todo.php"> <span class="glyphicon glyphicon-menu-left" style = "font-size:min(6vw,2rem);padding:2%;cursor:pointer;" id = "back"></span></a>
   <font style = "font-size:min(2vw,2rem);color:black;font-family:'Poppins', sans-serif;border:none;border-radius:7px;color:silver" id = "title"><?php echo $dataa["title"]; ?></font>
   <form method = "post" style = "float:right;margin-right:3%;margin-top:2%;">
   <button class="glyphicon glyphicon-star"style = "font-size:min(3.5vw,2rem);color:black;color:silver;background:none;border:none;" id="envelope" name = "impt"></button>
   </form>
  
    <div style = "width:90%;height:auto;margin:5%;background:#292f45;border-radius:7px;position:relative;" id = "message">
   
    <img src = "assets/student profiles/dis/user.jpg" style = "border-radius:50%;width:5rem;max-width:15vw;margin-left:1.5%;margin-top:1.5%;">
    
    <font style = "font-size:min(3.5vw,2rem);color:black;font-family:'Poppins', sans-serif;border:none;border-radius:7px;color:silver;margin:30px;" id = "status"><?php echo $dataa["assignee"]; ?></font>

    <font style = "font-size:min(3.5vw,1.5rem);color:lightgrey;font-family:'Poppins', sans-serif;border:none;border-radius:7px;float:right;margin:30px;" id = "due"><?php echo $dataa["date"]; ?></font>

    
    
    <hr>
    <span class = "row" style = "margin-left:5%;width:90%;" id = "messagecontent">
        <span class = "col-md-12">
    <font style = "font-size:min(3.5vw,1.5rem);color:silver;font-family:'Poppins', sans-serif;border:none;border-radius:7px;" id = "description">
       
    <?php echo $dataa["description"]; ?>
        </font>
        <br><br>
   
</span>
</span>
    </div>
   
    
          
    
  <script>
    var width = window.screen.availWidth;
  var envelope = document.getElementById("envelope") ;
    var messagecontent = document.getElementById("messagecontent");
 

    if(width<=800)
    {
var contentnavbar = document.getElementById("contentnavbar");
var message = document.getElementById("message");

message.style.top = contentnavbar.offsetHeight+"px";

    }


  </script>  
  <?php
   
   $a = 0;
   if(isset($_POST["impt"]))
   {
    if(a%2==0)
    {
    $queryinsert = sprintf("update todo_{$val} set impt = 'y' where sno = $var");
     
     $connecttinsert = mysqli_query($con,$queryinsert);

echo "<script>
envelope.style.color = 'yellow';</script>";
    }
    else{
        $queryinsert = sprintf("update todo_{$val} set impt = 'n' where sno = $var");
     
        $connecttinsert = mysqli_query($con,$queryinsert);
   
   echo "<script>
   envelope.style.color = 'silver';</script>"; 
    }
$a++;
   }



   ?>      
</body>
</html>