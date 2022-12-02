<?php
   session_start();  
   
   $school = $_SESSION['school'] ;
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    
    @import url('https://fonts.googleapis.com/css2?family=Freehand&family=Quicksand:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
#fnt{
font-family:'Quicksand', sans-serif;
font-size:20px;
position:relative;
padding-left:18%;
color:#202020;
text-decoration:none;
}
#lnk{
font-family:'Quicksand', sans-serif;
font-size:20px;
position:relative;
padding:18%;
color:#202020;
text-decoration:none;

border-radius:10px;
padding:1%;
}
body{
background-color:#292f45;

}
  </style>
</head>
<body>
<?php 
  
  $con = mysqli_connect("localhost","root","","$school");
if($con)
{

}
$query = sprintf("select count(*) as total from updates");

$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);
$arr = array();
$top = 5;
for($i=1;$i<=$dataa["total"];$i++)
{
$query1 = sprintf("select * from updates where s_no = '$i'");

$connectt1 = mysqli_query($con,$query1);
$dataa1 = mysqli_fetch_assoc($connectt1);

$num = mysqli_num_rows($connectt1);

 $dt = $dataa1["date"];
 $ttl = $dataa1["title"];
 $dta = $dataa1["data"]; 

 echo "<script>
let divv$i = document.createElement('div');
divv$i.id = 'data+$i';
divv$i.class = 'col-md-6';
divv$i.style.background='#343d55';
divv$i.style.width='76rem';
divv$i.style.maxWidth='83vw';
divv$i.style.height='100px';
divv$i.style.position='absolute';
divv$i.style.left='5%';
divv$i.style.top = '$top.px';
divv$i.style.boxShadow='2px 2px 5px black';
divv$i.style.borderRadius='10px';
divv$i.style.border='1px solid #7367f0';
document.body.appendChild(divv$i);
let bt$i = document.createElement('a');
bt$i.style.border='none';
bt$i.style.padding='15px';
bt$i.style.fontSize='min(3vw,1.5rem)';
bt$i.style.background='#343d55';
bt$i.href = '$dta';
bt$i.style.textDecoration = 'none';
bt$i.style.color = 'white';
var txt$i = document.createTextNode('$ttl');
divv$i.style.fontFamily='century gothic';
divv$i.style.fontSize='min(4vw,3rem)';
divv$i.style.paddingLeft = '15px';
bt$i.style.top = '20%';
bt$i.style.position = 'absolute';
divv$i.appendChild(bt$i);
bt$i.appendChild(txt$i);


</script>";
$top+=110;

 
}


   ?>
  

  
 