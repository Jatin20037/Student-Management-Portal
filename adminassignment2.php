<?php
   session_start();  
   $val = $_SESSION['user']; 
   $cl = $_SESSION['class'] ;
   $school = $_SESSION['school'] ;
   $section = $_SESSION['section'] ;

   ?>
<?php 
 
  $con = mysqli_connect("localhost","root","","$school");
if($con)
{

}

$var = $_GET["var"];

$query2 = sprintf("select * from {$cl}_assignments where s_no = $var");
$connectt2 = mysqli_query($con,$query2);
$dataa2 = mysqli_fetch_assoc($connectt2);


$query7 = sprintf("select * from students where class = '$cl' and section = '$section'");
$connectt7 = mysqli_query($con,$query7);
   ?>
 <?php

?> 

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
 
    @import url('https://fonts.googleapis.com/css2?family=Freehand&family=Quicksand:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
    body{
      background:#161d30;
    } 
    #profile{
width:10.5rem;
border-radius:50%;
padding:15px;


}

#nav1:hover{
background:orange;
}
#nav2:hover{
background:orange;
}
#nav3:hover{
background:orange;
}
#nav4:hover{
background:orange;
}

</style>
    </head>
<body>

<div style = "background:rgb(41,47,69,0.7);top:0%;width:100%;height:9.5rem;left:%;z-index:-1;position:fixed;z-index:1;">



</div>

<div style= "background:#292f45;position:absolute;width:70%;height:auto;top:20%;left:5%;box-shadow:2px 3px 3px black;border-radius:10px;color:white;">
<font style= "font-family: 'Quicksand', sans-serif;font-size:min(8vw,40px);margin:5%;"><b><?php echo $dataa2['topic'];?></font>
<br><br>
<font style= "font-family: 'Quicksand', sans-serif;font-size:min(5vw,20px);padding-left:5%;"><b>Posted on: <?php echo $dataa2['date'];?></font>
<font style= "font-family: 'Quicksand', sans-serif;font-size:min(5vw,20px);padding-left:8%;"><b>Due Date: <?php echo $dataa2['due_date'];?></font>
<font style= "font-family: 'Quicksand', sans-serif;font-size:min(5vw,20px);padding-left:5%;float:right;padding-right:5%;"><b>Posted by: <?php echo $dataa2['teacher'];?></font>
</div>

<div style= "background:#292f45;position:absolute;width:70%;height:auto;top:385px;left:5%;box-shadow:2px 3px 3px black;border-radius:10px;color:white;" id = "frame3">
<br><b>
<font style= "font-family: 'Quicksand', sans-serif;font-size:min(8vw,40px);padding-left:5%;"><b>Description</font>
<br>
<br>
<span class = "row" style = "width:90%;margin-left:5%;">
<span class = "col-md-12">
<font style= "font-family: 'Quicksand', sans-serif;font-size:min(8vw,1.5rem);"><b><?php echo $dataa2['description'];?></font>
<br><br><br></b>
</span>
</span>
<a style = "border:none;padding:15px;font-family: 'Quicksand', sans-serif;font-size:min(3vw,2rem);background:#7367f0;position:relative;left:5%;border-radius:5px;cursor:pointer;color:white;text-decoration:none;" id = "fileopen">View document</a><br><br>
<button style = "border:none;padding:15px;font-family: 'Quicksand', sans-serif;font-size:min(3vw,2rem);background:#7367f0;position:relative;left:5%;border-radius:5px;" id = "reportbt">View Report</button>
<br><br>
</div>


<div style = "overflow:auto;position:fixed;width:30%;height:100%;background:#292f45;right:-100%;font-size:min(3.5vw,3rem);color:silver;font-family:'Poppins', sans-serif;z-index:2;transition: 2s ease;" id = "reportcont">
<br>
<font style = "margin-left:5%;">Assignment Status</font>
<font style = "margin-left:5%;float:right;margin-right:5%;font-size:min(3vw,2rem);cursor:pointer;" id = "close">x</font>
<br><br>
<table style = "width:100%;color:silver;" id = "assstatus">
<tr style = "background:#38405e;">
  <th style = "padding-top:10px;padding-bottom:10px;"><center>Students</center></th>
  <th style = "padding-top:10px;padding-bottom:10px;"><center>Status</center></th>
  <th style = "padding-top:10px;padding-bottom:10px;"><center>Action</center></th>
</tr>
</table>
</div>
<script>
  var width  = window.screen.availWidth;
 var assstatus = document.getElementById("assstatus");
  console.log(width);
 var reportcont = document.getElementById("reportcont");
 var reportbt = document.getElementById("reportbt");
 var close = document.getElementById("close");
 reportbt.addEventListener("click",()=>{
  reportcont.style.right = 0;
})
close.addEventListener("click",()=>{
  reportcont.style.right = "-100%";
})
if(width<=800)
{
  reportcont.style.width = "70%";

}
  </script>
  <?php
    echo "
    <script>
    var fileopen = document.getElementById('fileopen');
     var attachfile = 'data/assignment/'+'$school'+'attachment/'+'$dataa2[data]';
     fileopen.href=attachfile;
     
    </script>
    ";


$num7 = mysqli_num_rows($connectt7);
for($i = 1;$i<=$num7;$i++)
{
$dataa7 = mysqli_fetch_assoc($connectt7);

$studentname =  $dataa7["username"];

$query8 = sprintf("select * from $studentname where sno = $var");
$connectt8 = mysqli_query($con,$query8);
$dataa8 = mysqli_fetch_assoc($connectt8);
$status = "Completed";
if($dataa8=="")
{$status = "Incomplete";
  echo "
  <script>
  var tr$i = document.createElement('tr');
  tr$i.style.borderBottom = '1px solid #38405e';
  var td1$i = document.createElement('td');
  td1$i.style.paddingTop='10px';
  td1$i.style.paddingBottom='10px';
  var td2$i = document.createElement('td');
  td2$i.style.paddingTop='10px';
  td2$i.style.paddingBottom='10px';
  var text1$i = document.createTextNode('$studentname');
  var text2$i = document.createTextNode('$status');
var center1$i = document.createElement('center');
var center2$i = document.createElement('center');
center1$i.appendChild(text1$i);
center2$i.appendChild(text2$i);
td1$i.appendChild(center1$i);
td2$i.appendChild(center2$i);
tr$i.appendChild(td1$i);
tr$i.appendChild(td2$i);
assstatus.appendChild(tr$i);
  </script>
  ";
}
else{
  echo "
  <script>
  var tr$i = document.createElement('tr');
  tr$i.style.borderBottom = '1px solid #38405e';
  var td1$i = document.createElement('td');
  td1$i.style.paddingTop='10px';
  td1$i.style.paddingBottom='10px';
  var td2$i = document.createElement('td');
  td2$i.style.paddingTop='10px';
  td2$i.style.paddingBottom='10px';
  var td3$i = document.createElement('td');
  td3$i.style.paddingTop='10px';
  td3$i.style.paddingBottom='10px';
  var text1$i = document.createTextNode('$studentname');
  var text2$i = document.createTextNode('$status');
  var text3$i = document.createElement('a');
  text3$i.style.color='silver';
  text3$i.style.textDecoration='none';
  text3$i.className = 'glyphicon glyphicon-eye-open';
  var attachfile2 = 'data/assignment/'+'$school'+'attachment/'+'$dataa8[data]';
  text3$i.href=attachfile2;

var center1$i = document.createElement('center');
var center2$i = document.createElement('center');
var center3$i = document.createElement('center');
center1$i.appendChild(text1$i);
center2$i.appendChild(text2$i);
center3$i.appendChild(text3$i)
td1$i.appendChild(center1$i);
td2$i.appendChild(center2$i);
td3$i.appendChild(center3$i);
tr$i.appendChild(td1$i);
tr$i.appendChild(td2$i);
tr$i.appendChild(td3$i);
assstatus.appendChild(tr$i);
  </script>
  ";
}
}
?>
</body>

</html>
