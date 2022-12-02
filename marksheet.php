<?php
session_start();  
$val = $_SESSION['user']; 
$cl = $_SESSION['class'] ;
$school = $_SESSION['school'] ;
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
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
    ::-webkit-scrollbar {
  width: 0px;

}
 </style>   
</head>
<body>
    <br>
<span class= "row" style = "width:97%;margin-left:1.5%;height:95%;position:absolute;">
<span class = "col-md-7">   
  <div style = "background:#292f45;width:100%;height:100%;border-radius:5px;">
  <br>
<form method = "get">
<input type = "text" name = "examname" style = "width:30%;margin-left:7%;border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;padding:10px;" placeholder="Ex. Periodic Exams">
<br><br>
<table style = "width:90%;margin-left:5%;" id = "generatetable">
<tr>
 <th><input type = "text" name = "subject0" style = "width:90%;margin-left:5%;border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;padding:10px;" placeholder="Ex. Maths"></th>
 <th><input type = "text" name = "marks0"style = "width:90%;margin-left:5%;border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;padding:10px;" placeholder="Ex. 68"></th>   
</tr>
</table>
<br><br><center>
<span style = "color:white;font-family:century gothic;font-size:min(1.5vw,1.5rem);padding:20px;background:#7367f0;border-radius:7px;border:none;" id = "addrow">Add+</span> 
<Button type = "submit" name = "totalgenerate" style = "color:white;font-family:century gothic;font-size:min(1.5vw,1.5rem);padding:20px;background:#7367f0;border-radius:7px;border:none;" id = "generatebt">Generate</Button> 

</center>
</form>
  <br>  
  
</div>
</span>
<span class = "col-md-5">  
<div style = "overflow:auto;background:#292f45;width:100%;border-radius:5px;color:silver;" id = "studentsdiv">
  <br>
  <font style = "margin:5%;font-size:min(2vw,3rem);">
Students</font>
<br>
<table style = "width:100%;background:#292f45;color:silver;font-family:'Poppins', sans-serif;" id = "studenttable">
<th style = "padding:10px;width:33%;"><center>Username</center></th>
<th style = "padding:10px;width:33%;"><center>Name</center></th>
<th style = "padding:10px;width:33%;"><center>Action</center></th>
</table>
  <br>  
  
</div>
<br>
<div style = "overflow:auto;background:#292f45;border-radius:5px;color:silver;" id = "marksheetdiv">
  <br>
  <font style = "margin:5%;font-size:min(2vw,3rem);">
Marksheet</font>

<button onclick = download() style = "margin-right:5%;color:white;font-size:min(2vw,2rem);border:none;border-radius:5px;background:#7367f0;float:right;">
Download</button>
<br><br>
    
  
</div>  
</span>
</span>
<script>
function download()
{
  var canvs = document.getElementById("canvs");
  html2pdf().from(canvs).save();

}
    var addrow = document.getElementById("addrow");
   
    var generatetable = document.getElementById("generatetable");
    var counter=1;
    addrow.addEventListener("click",()=>{
document.cookie = "mrowcounter="+counter;        
var tr = document.createElement("tr");
var td1 = document.createElement("td");
var td2 = document.createElement("td");
var inpt1 = document.createElement("input");
inpt1.name = "subject"+counter;
inpt1.style.width="90%";
inpt1.style.marginLeft="5%";
inpt1.style.border="none";
inpt1.style.borderRadius="5px";
inpt1.style.background="#343d55";
inpt1.style.boxShadow="inset 2px 2px 9px 2px #161d30";
inpt1.placeholder="Ex. Maths";
inpt1.style.padding="10px";
var inpt2 = document.createElement("input");

inpt2.style.width="90%";
inpt2.style.marginLeft="5%";
inpt2.style.border="none";
inpt2.style.borderRadius="5px";
inpt2.style.background="#343d55";
inpt2.style.boxShadow="inset 2px 2px 9px 2px #161d30";
inpt2.style.padding="10px";
inpt2.placeholder="Ex. 68";
inpt1.name = "subject"+counter;
inpt2.name = "marks"+counter;
inpt1.id = "subject"+counter;
inpt2.id = "marks"+counter;
td1.appendChild(inpt1);
td2.appendChild(inpt2);
tr.appendChild(td1);
tr.appendChild(td2);
var br = document.createElement("br");
generatetable.appendChild(br);
generatetable.appendChild(tr);
counter++;
    })
var height = window.screen.availHeight;
var marksheetdiv = document.getElementById("marksheetdiv");
var studentsdiv = document.getElementById("studentsdiv");
var studenttable = document.getElementById("studenttable"); 
marksheetdiv.style.height = (height/2)-65+"px";   
studentsdiv.style.height = (height/2)-65+"px";   
function idcaller()
{var x = this.id;
document.cookie="marksheet_client="+x;

}
</script>
</body>

</html>

<?php
$con = mysqli_connect("localhost","root","","$school");
if($con)
{

}
$dt = date('F');

$query = sprintf("select * from students");
$connectt = mysqli_query($con,$query);
$num= mysqli_num_rows($connectt);
for($i=1;$i<=$num;$i++)
{
$dataa = mysqli_fetch_assoc($connectt);
echo "
<script>
var studenttr = document.createElement('tr');
var studenttd1 = document.createElement('td');
var studenttd2 = document.createElement('td');
var studenttd3 = document.createElement('td');
var studenttext1 = document.createTextNode('$dataa[username]');
var studenttext2 = document.createTextNode('$dataa[name]');
var studenttext3 = document.createTextNode('Generate');
var studentbt = document.createElement('button');
studentbt.onclick=idcaller;
studentbt.id = '$dataa[username]';
studentbt.style.color = 'white';
studentbt.style.background='#7367f0';
studentbt.style.padding='5px';
studentbt.style.borderRadius = '5px';
var center1= document.createElement('center');
var center2= document.createElement('center');
var center3= document.createElement('center');
center1.appendChild(studenttext1);
center2.appendChild(studenttext2);
center3.appendChild(studentbt);
studentbt.appendChild(studenttext3);
studenttd1.appendChild(center1);
studenttd2.appendChild(center2);
studenttd3.appendChild(center3);
studenttr.appendChild(studenttd1);
studenttr.appendChild(studenttd2);
studenttr.appendChild(studenttd3);
studenttable.appendChild(studenttr);
</script>
";

}

if(isset($_GET["totalgenerate"]))
{$mrow=$_COOKIE["mrowcounter"];
  $client=$_COOKIE["marksheet_client"];
  $contentarray = array();
 $grade="A1";
for($z=0;$z<=$mrow;$z++)
{
    $subject = $_GET["subject".$z];
    $marks = $_GET["marks".$z];
    
    $subarray = array($subject,$marks);

for($x=0;$x<=1;$x++)
{$contentarray[$z][$x] = $subarray[$x];
 
}



}
for($z=0;$z<=$mrow;$z++ )
{
  $gotmarks = $contentarray[$z][1];
  $scoredsub = $contentarray[$z][0];
  if($gotmarks >=91 and $gotmarks <=100 )
{
  $grade = "A1";
}
else if($gotmarks >=81 and $gotmarks <=90)
{
  $grade = "A2";
}
else if($gotmarks >=71 and $gotmarks <=80)
{
  $grade = "B1";
}
else if($gotmarks >=61 and $gotmarks <=70)
{
  $grade = "B2";
}
else if($gotmarks >=51 and $gotmarks <=60)
{
  $grade = "C1";
}
else if($gotmarks >=41 and $gotmarks <=50)
{
  $grade = "C2";
}
else if($gotmarks >=31 and $gotmarks <=40)
{
  $grade = "D1";
}
else if($gotmarks >=21 and $gotmarks <=30)
{
  $grade = "D2";
}
else
{
  $grade = "E";
}

    $queryinsert1 = sprintf("insert into {$cl}_marksheet values('$client','$scoredsub','$gotmarks','$grade','$_GET[examname]')");
    $connecttinsert1 = mysqli_query($con,$queryinsert1);
 
}
$con2 = mysqli_connect("localhost","root","","schools");

$dt = date('F');

$query1 = sprintf("select * from credentials where username = '$school'");
$connectt1 = mysqli_query($con2,$query1);
$num1= mysqli_num_rows($connectt1);
$dataa1 = mysqli_fetch_assoc($connectt1);
$i=0;
echo "
<script>
var marksdiv = document.createElement('div');
marksdiv.id = 'canvs';
marksdiv.style.background='#E7F6F2';
marksdiv.style.width = '90%';
marksdiv.style.marginLeft = '5%';
var markssubdiv1 = document.createElement('div');
markssubdiv1.style.background='#2C3333';
markssubdiv1.style.width='100%';
var text1 = document.createTextNode('$dataa1[name]');
var font1 = document.createElement('font');
font1.style.fontFamily='century gothic';
font1.style.fontSize = 'min(2vw,2rem)';
markssubdiv1.style.padding = '10px';
markssubdiv1.style.display = 'flex';
var image = document.createElement('img');
image.style.width='30px';
image.src = 'assets/logo/$dataa1[logo]';
var center1 = document.createElement('center');
var center2 = document.createElement('center');
var center3 = document.createElement('center');
var center4 = document.createElement('center');
font1.appendChild(text1);
font1.style.marginLeft='25%';
markssubdiv1.appendChild(image);
markssubdiv1.appendChild(font1);
marksdiv.appendChild(markssubdiv1);
var br1 = document.createElement('br');
marksdiv.appendChild(br1);
var table = document.createElement('table');
table.style.color='white';
center1.appendChild(table);
var tr1 = document.createElement('tr');
tr1.style.background='#395B64';
table.style.width='60%';
var td1 = document.createElement('td');
var td2 = document.createElement('td');
var td3 = document.createElement('td');
td1.style.padding = '7px';
td2.style.padding = '7px';
td3.style.padding = '7px';
var text2 = document.createTextNode('Subjects');
var text3 = document.createTextNode('Marks');
var text4 = document.createTextNode('Grades');
center2.appendChild(text2);
center3.appendChild(text3);
center4.appendChild(text4);

td1.appendChild(center2);
td2.appendChild(center3);
td3.appendChild(center4);
tr1.appendChild(td1);
tr1.appendChild(td2);
tr1.appendChild(td3);
table.appendChild(tr1);
marksdiv.appendChild(center1);
marksheetdiv.appendChild(marksdiv);




</script>";
$query3 = sprintf("select * from {$cl}_marksheet where username = '$client' and exams='$_GET[examname]'");
$connectt3 = mysqli_query($con,$query3);
$num3= mysqli_num_rows($connectt3);
echo $num3;
for($z=1;$z<=$num3;$z++)
{
$dataa2 = mysqli_fetch_assoc($connectt3);

echo "<script>
var tr1 = document.createElement('tr');
var center2 = document.createElement('center');
var center3 = document.createElement('center');
var center4 = document.createElement('center');
tr1.style.background='#A5C9CA';
tr1.style.borderBottom='1px solid 2C3333';
table.style.width='60%';
var td1 = document.createElement('td');
var td2 = document.createElement('td');
var td3 = document.createElement('td');
td1.style.padding = '7px';
td2.style.padding = '7px';
td3.style.padding = '7px';
var text2 = document.createTextNode('$dataa2[subject]');
var text3 = document.createTextNode('$dataa2[marks]');
var text4 = document.createTextNode('$dataa2[grade]');
center2.appendChild(text2);
center3.appendChild(text3);
center4.appendChild(text4);

td1.appendChild(center2);
td2.appendChild(center3);
td3.appendChild(center4);
tr1.appendChild(td1);
tr1.appendChild(td2);
tr1.appendChild(td3);
table.appendChild(tr1);
var br2 = document.createElement('br');
marksdiv.appendChild(br2);

</script>";
}

}
?>
