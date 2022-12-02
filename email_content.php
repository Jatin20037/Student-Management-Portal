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
 $var = $_GET["val"];
 $query = sprintf("select * from {$val}_email where sno = '$var'");
 
 $connectt = mysqli_query($con,$query);
 $dataa = mysqli_fetch_assoc($connectt);
  if($dataa["attachment"]!="")
  {
    $filedata=$dataa["attachment"];
  }
  else{
    $filedata="No file attached";
  }
  if($sender=="Smart Profilez")
{
    $dataa4 = "user.jpg";
}
$query3 = sprintf("select * from students where username = '$dataa[sender]'");

$connectt3 = mysqli_query($con,$query3);
$dataa3 = mysqli_fetch_assoc($connectt3);
if($dataa3!="")
{
    
    $dataa4 = $dataa3["profile"];
    
}
$query5 = sprintf("select * from teachers where username = '$dataa[sender]' ");

$connectt5 = mysqli_query($con,$query5);
$dataa5 = mysqli_fetch_assoc($connectt5);
if($dataa5!="")
{
    
    $dataa4 = "user.jpg";
    
}

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
   

        
            <div style = "width:100%;height:10rem;position:absolute;background:#292f45;box-shadow: 15px 0 10px 10px black;" id = "contentnavbar">
   <a href = "email.php"> <span class="glyphicon glyphicon-menu-left" style = "font-size:min(6vw,2rem);padding:2%;cursor:pointer;color:white;" id = "back"></span></a>
    <font style = "font-size:min(3.5vw,2rem);color:silver;font-family:'Poppins', sans-serif;border:none;border-radius:7px;" id ="title"><?php echo $dataa["title"] ?></font>
   <form method="get" style = "float:right;margin-right:5%;margin-top:60px;" id = "actions">
    <button class="glyphicon glyphicon-trash" style = "font-size:min(3.5vw,2rem);color:orangered;background:none;border:none;" id = "trash" name = "delete"></button>
</form>
    <div style = "width:90%;height:auto;margin:5%;background:#292f45;border-radius:7px;position:relative;" id = "message">
    <img src = "assets/student profiles/<?php echo $school;?>/<?php echo $dataa4;?>" style = "border-radius:50%;width:5rem;max-width:15vw;margin-left:1.5%;margin-top:1.5%;">
    <div style = "position:absolute;left:10rem;top:2.5rem;">
    <font style = "font-size:min(3.5vw,2rem);color:silver;font-family:'Poppins', sans-serif;border:none;border-radius:7px;" id = "sender"><?php echo $dataa["sender"] ?></font><br>
   
    
    </div>
    <hr>
    <span class = "row" style = "margin-left:5%;width:90%;" id = "messagecontent">
        <span class = "col-md-12">
    <font style = "font-size:min(3.5vw,1.5rem);color:silver;font-family:'Poppins', sans-serif;border:none;border-radius:7px;" id = "description">
       
    <?php echo $dataa["desciption"] ?>
        </font>
        <br><br>
   
    <hr>
   <a href = "data/EMAIL/ATTACHMENTS/<?php echo $school;?>/<?php echo $filedata; ?>" style = "text-decoration:none;cursor:pointer;"> <span class="glyphicon glyphicon-file"style = "font-size:min(3.5vw,2rem);color:silver;"  ></span><font style = "font-size:min(3.5vw,1.5rem);color:silver;font-family:'Poppins', sans-serif;border:none;border-radius:7px;"><?php echo $filedata;?></font></a>
    <br><br>
   
</span>
</span>
    </div>
    <div style = "width:90%;height:auto;margin:5%;background:#292f45;border-radius:7px;position:relative;" id = "messagefrd">
        <br>
        <font style = "font-size:min(3.5vw,1.5rem);color:silver;font-family:'Poppins', sans-serif;border:none;border-radius:7px;padding:10px;"> 
            
        Click here to <span style = "color:skyblue;cursor:pointer" id = "forward">Forward</span> <br>
       
    </font>
  <br>
   </div>
    
          
    
  <script>
    var width = window.screen.availWidth;
   
    var messagecontent = document.getElementById("messagecontent");


   
    if(width<=800)
    {
var contentnavbar = document.getElementById("contentnavbar");
var message = document.getElementById("message");

message.style.top = contentnavbar.offsetHeight+"px";

    }


  </script>  
   <div style = "border-radius:7px;background:#292f45;width:40%;height:auto;position:fixed;bottom:5%;left:55%;visibility:hidden;z-index:3;box-shadow:0 0 6px 3px black;" id = "composediv">
<div style = "background:#343d55;font-size:min(3.5vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;padding:10px;">Compose mail 
<font style = "float:right;padding-right:15px;text-decoration:none;cursor:default;" id = "close">x</font>
</div>

<form method="post" enctype="multipart/form-data">
    <font style = "font-size:min(2vw,1.5rem);font-family:'Poppins', sans-serif;color:silver;">  To:</font>
<input type = "text" name = "to_add" style="width:95%;border:none;box-shadow:inset 2px 2px 9px 2px #161d30;background:#343d55;border-radius:5px;">
<div id = "cc"></div>
<font style = "font-size:min(2vw,1.5rem);font-family:'Poppins', sans-serif;color:silver;">Subject:</font>
<input type = "text" name = "to_sub" style="width:90%;border:none;box-shadow:inset 2px 2px 9px 2px #161d30;background:#343d55;border-radius:5px;">

<textarea    name="blog" style = "width:100%;height:200px;border:none;box-shadow:inset 2px 2px 9px 2px #161d30;background:#343d55;border-radius:5px;color:silver;" >
<?php echo $dataa['desciption'] ?>
  </textarea>
  <hr>
  <label for="attachment" class="custom-file-upload" id = "choose">
    <span class = "glyphicon glyphicon-paperclip" style ="font-size:min(3vw,2.5rem);position:relative;left:20px;cursor:pointer;color:white;"></span>
 </label>
 
 <input type="file" id = "attachment" style ="visibility:hidden;" name = "choose">
 <button type = "submit" name = "btt" style = "position:absolute;left:20px;bottom:0;border:none;font-size:min(3vw,2rem);font-family:'Poppins', sans-serif;background:#7367f0;color:white;border-radius:7px;padding-left:20px;padding-right:20px;cursor:default;">Send</button>

</form>


<script>

 document.getElementById("forward").addEventListener("click",()=>{
    document.getElementById("composediv").style.visibility = "visible";

 }) 
 
 document.getElementById("close").addEventListener("click",()=>{
    document.getElementById("composediv").style.visibility = "hidden";

 }) 

</script>




</div>     
</body>
</html>
<?php
if($dataa["status"]=="trash")
{
echo "
<script>
var trash =document.getElementById('trash');
var actions =document.getElementById('actions');
trash.style.visibility='hidden';
var bt = document.createElement('button');
bt.style.background='none';
bt.style.border='none';
bt.style.fontSize='min(3.5vw,2rem)';
bt.style.color='skyblue';
bt.className = 'glyphicon glyphicon-refresh';
actions.appendChild(bt);

bt.name = 'restorecnt';
</script>
";
}
if($dataa["status"]=="sent")
{
echo "
<script>
var trash =document.getElementById('trash');
var actions =document.getElementById('actions');
trash.style.visibility='hidden';

</script>
";
}

if(isset($_GET["delete"]))
{
    $query6 = sprintf("update {$val}_email set status= 'trash' where sno = '$var'");
 
    $connectt6 = mysqli_query($con,$query6);
    echo "<script>
    window.location.href ='email.php'  ;
    </script>";

}
if(isset($_GET["restorecnt"]))
{
    $query6 = sprintf("update {$val}_email set status= 'inbox' where sno = '$var'");
 
    $connectt6 = mysqli_query($con,$query6);
    echo "<script>
    window.location.href ='email.php'  ;
    </script>";

}

?>