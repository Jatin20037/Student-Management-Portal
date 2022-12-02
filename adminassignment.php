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


$query = sprintf("select * from students where username= '$val'");



$connectt = mysqli_query($con,$query);


$dataa = mysqli_fetch_assoc($connectt);


   ?>
 <?php
$con2 = mysqli_connect("localhost","root","","schools");
if($con)
{

}
$newquery = sprintf("select * from credentials where username= '$school'");
$newconnectt = mysqli_query($con2,$newquery);
$newdataa = mysqli_fetch_assoc($newconnectt);
$logo = $newdataa["logo"];
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


<div style = "background:rgb(41,47,69,0.7);top:0%;width:100%;height:9.5rem;left:%;z-index:-1;position:fixed;z-index:1;box-shadow:0 0 6px 5px black;">
<br>
<font style = "color:grey;font-family:'Poppins', sans-serif;font-size:min(2vw,2rem);font-weight:bold;padding:10px;background:#161d30;border-radius:5px;border:1px solid 7367f0;box-shadow: 0 0 15px 3px #7367f0;float:right;margin-right:10%;cursor:pointer;" id = "assignbt">Assign now</font>

</div>
<img src = "assets/bg/assignment2.jpg"style = "width:76rem;max-width:90vw;max-height:90vh ;position:absolute;top:200px;left:5%;border-radius:10px;box-Shadow:2px 2px 5px black;">
<span style = "font-family: 'Quicksand', sans-serif;font-size:min(7vw,80px);color:white;position:absolute;top:300px;left:6%;;padding-left:5%;padding-right:3%;padding-top:1%;padding-bottom:1.2%;"><b>Assigned <br>Assignments</span>



<!-- grid
<span class="row" id = "frame" style = "width:100%;left:0%;position:fixed;top:300px;height:68%;">
<span class = "col-md-6"></span>
<iframe src="assignment2.php" class = "col-md-6" title="updates"></iframe>
</span>--->
<div style = "background:rgb(41,47,69);transition:2s ease;width:40%;position:fixed;color:silver;font-family: 'Quicksand', sans-serif;height:100%;z-index:2;right:-100%;box-shadow:0 0 6px 5px black;" id = "assigncont">
<br>
<font style = "margin:5%;font-size:min(3vw,4rem);">
Assignment</font>
<font style = "float:right;padding-right:5%;text-decoration:none;cursor:default;font-size:min(3vw,2rem);" id = "close">x</font>

<br><br>
<form style = "margin-left:5%;width:100%;height:80%;" enctype="multipart/form-data" method = "get">
<input type = "text" name = "title" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Enter Title in 50 words"><br><br>
<input type = "date" name = "duedate" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:50%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Due date"><br><br>
<textarea style = "width:90%;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;border:none;border-radius:5px;height:60%;color:silver;" name = "blog">
   Description
      </textarea><br><br>
<input type = "file" name = "choose"style = "font-size:min(2.5vw,2rem);color:white;border-radius:5px;border:none;"><br>
<button type = "submit" name = "push" style = "font-size:min(2.5vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;border:none;">Assign Now</button>

</form>
</div>
<script>
  document.getElementById("assignbt").addEventListener("click",()=>{
document.getElementById("assigncont").style.right = "0%";

})
  document.getElementById("close").addEventListener("click",()=>{
document.getElementById("assigncont").style.right = "-100%";

})
var width = window.screen.availWidth;
if(width<=800)
{
  document.getElementById("assigncont").style.width = "70%";
}
  </script>
  <?php
 $con = mysqli_connect("localhost","root","","$school");
 if($con)
 {
 
 }
 $query1 = sprintf("select * from {$cl}_assignments where section='$section'");
 $connectt1 = mysqli_query($con,$query1);
 $top= 700;
 $num1 = mysqli_num_rows($connectt1);

for($i=1;$i<=$num1;$i++)
{

$dataa1 = mysqli_fetch_assoc($connectt1);
$teacher = $dataa1["teacher"] ;
$date = $dataa1["date"] ;
$due = $dataa1["due_date"] ;
$topic =$dataa1['topic'];
$sno = $dataa1['s_no'];
echo "<script>

let divv$i = document.createElement('div');
divv$i.id = 'data+$i';
divv$i.class = 'col-md-6';
divv$i.style.background='rgb(41,47,69)';
divv$i.style.width='76rem';
divv$i.style.maxWidth='90vw';
divv$i.style.height='auto';
divv$i.style.left='5%';
divv$i.style.top='$top.px';
divv$i.style.position='absolute';
divv$i.style.boxShadow='2px 2px 5px black';
divv$i.style.borderRadius='10px';
divv$i.style.color = 'white';
document.body.appendChild(divv$i);
let tg1$i = document.createElement('br');
var txt$i = document.createTextNode('$teacher posted an assignment on $date');
var txt2$i = document.createTextNode('Due date  $due');
txt$i.id = 'dt$i';
divv$i.style.fontFamily='century gothic';
divv$i.style.fontSize='min(4vw,2rem)';
divv$i.style.paddingLeft = '15px';

var dta$i = document.getElementById('dt$i');
divv$i.appendChild(tg1$i);
divv$i.appendChild(txt$i);

let tg$i = document.createElement('br');



divv$i.appendChild(tg$i);
divv$i.appendChild(txt2$i);
let bt$i = document.createElement('a');
bt$i.style.border='none';
bt$i.style.padding='15px';
bt$i.style.fontSize='min(3vw,2rem)';
bt$i.style.background='#7367f0';
bt$i.style.borderRadius='5px';
bt$i.style.color = 'white';
let tg2$i = document.createElement('br');
divv$i.appendChild(tg2$i);
let tg3$i = document.createElement('br');
divv$i.appendChild(tg3$i);
bt$i.style.textDecoration='none';
bt$i.href= 'adminassignment2.php?var=$sno';
bt$i.target = '_blank';
divv$i.appendChild(bt$i);
var bttxt$i = document.createTextNode('View Assignment');
bt$i.appendChild(bttxt$i);
let tg4$i = document.createElement('br');
divv$i.appendChild(tg4$i);
let tg5$i = document.createElement('br');
divv$i.appendChild(tg5$i);

</script>
" ;

 
$top+= 200;
}
//<font style = "font-family: 'Quicksand', sans-serif;font-size:min(3vw,2rem);padding-left:15px;">
//padding:15px;font-family: 'Quicksand', sans-serif;font-size:min(3vw,2rem);background:#F3F2F1;

if(isset($_GET["push"]))
{
$title = $_GET["title"];
$duedate = $_GET["duedate"];
$desc = $_GET["blog"];
$content = $_FILES['choose']['name'];
$contentype = $_FILES['choose']['type'];
$contentsize = $_FILES['choose']['size'];
$contentmp = $_FILES['choose']['tmp_name'];
$store = 'data/assignment/'.$school.'attachment/'.$content;
move_uploaded_file($contentmp,$store);
$currentdate = date("d-m-Y");

$queryinsert = sprintf("insert into {$cl}_assignments values($num1+1,'$currentdate','$title','$desc','$val','$section','$content','$duedate')");
$connecttinsert = mysqli_query($con,$queryinsert);



}
?>

</body>
</html>

