<?php
   session_start();  
   $val = $_SESSION['user']; 
   $cl = $_SESSION['class'] ;
   $school = $_SESSION['school'] ;

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

$query = sprintf("select * from students where username= '$val'");
$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);
$profile = $dataa["profile"];
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
<a style = "border:none;padding:15px;font-family: 'Quicksand', sans-serif;font-size:min(3vw,2rem);background:#7367f0;position:relative;left:5%;border-radius:5px;cursor:pointer;color:white;text-decoration:none;" id = "fileopen">View document</a>
<br><br>
</div>
<div style = "background:#222831;height:41.5rem;width:30rem;border-radius:10px;box-shadow:2px 3px 3px black;left:80%;top:40%;position:absolute;" id = "frame">
<font style= "font-family: 'Quicksand', sans-serif;font-size:min(10vw,30px);padding-left:5%;padding-right:5%;color:white;" id = "syw"><center>Submit your work</font>
<div style = "background:#393E46;height:21.5rem;width:25rem;border-radius:10px;left:2.5rem;top:40%;position:absolute;color:white;" id = "frame2">
<form method="post" enctype="multipart/form-data">
<input type = "file" name = 'choose' id = "fchoose" style = "text-decoration:none;border:none;background:none;width:100%;top:20%;position:absolute;left:15%;font-size:min(3vw,14px);">
<button  type = "submit" name = "btt" id = "subbt" style = "text-decoration:none;border:none;font-family:'Quicksand', sans-serif;font-size:min(8vw,30px);border-radius:10px;position:absolute;bottom:5%;left:25%;background:#FFD369;color:white;">Hand in</button>
</form>
</div>

</div>

<script>
  var width  = window.screen.availWidth;
 
  console.log(width);
  var frame = document.getElementById("frame");
  var frame2 = document.getElementById("frame2");
  var frame3 = document.getElementById("frame3");
  let height = frame3.offsetHeight;
  height = height+385;
  if(width <= 600)
  {console.log(width);
    console.log(frame.top);
frame.style.top=height+"px";
frame.style.width="100%";
frame.style.left = "0%";
frame2.style.width="80%";
frame2.style.left = "10%";

  }
  </script>
</body>
</html>
<?php
echo "
<script>
var fileopen = document.getElementById('fileopen');
 var attachfile = 'data/assignment/'+'$school'+'attachment/'+'$dataa2[data]';
 fileopen.href=attachfile;
 
</script>
";
$query6 = sprintf("select * from $val where sno= $var");
$connectt6 = mysqli_query($con,$query6);
$dataa6 = mysqli_fetch_assoc($connectt6);



if($dataa6!="")
{
  echo "<script>
  
  var fchoose=document.getElementById('fchoose');
  var subbt=document.getElementById('subbt');
  var text=document.getElementById('syw').innerHTML;
  subbt.style.visibility = 'hidden';
  fchoose.style.visibility = 'hidden';
  let newbt = document.createElement('a');
  newbt.id = 'nbt';
  newbt.name = 'newbtn';
  newbt.href='data/assignment/'+'$school'+'attachment/'+'$dataa6[data]';
  newbt.style.border = 'none';
  newbt.style.background = '#FFD369';
 newbt.style.position = 'absolute';
 newbt.style.left = '8%';
 newbt.style.top = '40%';
  newbt.style.borderRadius='10px';
  newbt.style.fontSize='min(8vw,25px)';
  newbt.style.color = '#202020';
  newbt.style.fontFamily='century gothic';
  let txt = document.createTextNode('Your Assignment');
  newbt.style.textDecoration = 'none';
  newbt.style.cursor=  'pointer';
  frame2.appendChild(newbt);
  newbt.appendChild(txt);
  newbt.href='data/'+cont;
  </script>";
 
}

if(isset($_POST["btt"]))
{ $con2 = mysqli_connect("localhost","root","","$school");
  $var2 = $var;
$content = $_FILES['choose']['name'];
$contentype = $_FILES['choose']['type'];
$contentsize = $_FILES['choose']['size'];
$contentmp = $_FILES['choose']['tmp_name'];
$store = 'data/assignment/'.$school.'attachment/'.$content;
move_uploaded_file($contentmp,$store);

$query5 = sprintf("insert into $val values($var2,'$content')");
$connectt5 = mysqli_query($con2,$query5);

$query6 = sprintf("select * from $val where sno= $var");
$connectt6 = mysqli_query($con2,$query6);
$dataa6 = mysqli_fetch_assoc($connectt6);
$newcontent = $dataa6["data"];
echo "<script>var cont = '$dataa6[data]';
console.log(cont);</script>";
if($dataa6!="")
{
  echo "<script>
  console.log($var2);
  var fchoose=document.getElementById('fchoose');
  var subbt=document.getElementById('subbt');
  subbt.style.visibility = 'hidden';
  fchoose.style.visibility = 'hidden';
  let newbt3 = document.createElement('a');
  newbt3.textDecoration = 'none';
  newbt3.id = 'nbt';
  newbt3.style.border = 'none';
  newbt3.style.color = '#202020';
  newbt3.style.background = '#FFD369';
  newbt3.style.position = 'absolute';
  newbt3.style.left = '8%';
  newbt3.style.top = '40%';
  newbt3.style.borderRadius='10px';
  newbt3.style.fontSize='min(8vw,25px)';
  newbt3.style.fontFamily='century gothic';
  newbt3.href='data/assignment/'+'$school'+'attachment/'+'$dataa6[data]';
  frame2.appendChild(newbt3);
  newbt3.style.cursor=  'pointer';
  let txt = document.createTextNode('Your Assignment');
  frame2.appendChild(newbt3);
  newbt3.appendChild(txt);
  newbt3.href='data/'+cont;;
  
 
  </script>";
}



}

?>