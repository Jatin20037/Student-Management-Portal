<?php
   session_start();  
   $val = $_SESSION['user']; 
   $cl = $_SESSION['class'] ;
   $school = $_SESSION['school'] ;

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
    <title></title>
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
<div style = "width:100%;height:10rem;position:absolute;background:#292f45;" id = "contentnavbar">
<br><br>
 <font style = "color:silver;font-family:'Poppins', sans-serif;font-size:min(2vw,3rem);font-weight:bold;padding:10%;">
 
<?php

 
$con = mysqli_connect("localhost","root","","$school");
if($con)
{

}

$query = sprintf("select count(*) as total from monthlyplanner");

$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);





date_default_timezone_set("Asia/Kolkata");

if(date("m")=="01")
{
    $month = "January";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="02")
{
    $month = "February";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="03")
{
    $month = "March";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="04")
{
    $month = "April";
    echo date("d").$month."\x20".date("Y");
}
if(date("m")=="05")
{
    $month = "May";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="06")
{
    $month = "June";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="07")
{
    $month = "July";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="08")
{
    $month = "August";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="09")
{
    $month = "September";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="10")
{
    $month = "October";
    echo date("d").$month."\x20".date("Y");
}
if(date("m")=="11")
{
    $month = "November";
    echo date("d")."\x20".$month."\x20".date("Y");
}
if(date("m")=="12")
{
    $month = "December";
    echo date("d")."\x20".$month."\x20".date("Y");
}

$dt = date('F');






?>

</font>
<font style = "color:grey;font-family:'Poppins', sans-serif;font-size:min(2vw,2rem);font-weight:bold;padding:10px;background:#161d30;border-radius:5px;border:1px solid 7367f0;box-shadow: 0 0 15px 3px #7367f0;float:right;margin-right:10%;cursor:pointer;" id = "examcumplanner">Examination</font>
</div>
<form>
<table id = "planner" style = "position:absolute;top:15%;width:80%;height:80%;left:10%;border:1px solid lightgreen;">
<tr>
<td id = "dt1"></td>
<td id = "dt2"></td>
<td id = "dt3"></td>
<td id = "dt4"></td>
<td id = "dt5"></td>
<td id = "dt6"></td>
<td id = "dt7"></td>
</tr>
<tr>
<td id = "dt8"></td>
<td id = "dt9"></td>
<td id = "dt10"></td>
<td id = "dt11"></td>
<td id = "dt12"></td>
<td id = "dt13"></td>
<td id = "dt14"></td>
</tr>
<tr>
<td id = "dt15"></td>
<td id = "dt16"></td>
<td id = "dt17"></td>
<td id = "dt18"></td>
<td id = "dt19"></td>
<td id = "dt20"></td>
<td id = "dt21"></td>
</tr>
<tr>
<td id = "dt22"></td>
<td id = "dt23"></td>
<td id = "dt24"></td>
<td id = "dt25"></td>
<td id = "dt26"></td>
<td id = "dt27"></td>
<td id = "dt28"></td>
</tr>
<tr>
<td id = "dt29"></td>
<td id = "dt30"></td>
<td id = "dt31"></td>
<td id = "dt32"></td>
<td id = "dt33"></td>
<td id = "dt34"></td>
<td id = "dt35"></td>
</tr>


</table>
</form>
<table style = "position:absolute;top:15%;width:80%;height:auto;left:10%;border:1px solid #292f45;visibility:hidden;" id = "syllabus">
<tr style = "background:#292f45;color:silver;font-size:min(2vw,2rem);border-bottom:1px solid #292f45">
<th style = "padding:20px;"><center>Date</center></th>
<th style = "padding:20px;"><center>Day</center></th>
<th style = "padding:20px;"><center>Subject</center></th>
<th style = "padding:20px;"><center>Syllabus</center></th>
</tr>
</table>
<div style = "border-radius:7px;background:#292f45;width:20%;height:100%;position:fixed;right:-40%;transition:2s ease;background:#161d30;z-index:3;top:0%;" id = "plannerdiv">
<br>
<div style = "background:#161d30;font-size:min(3.5vw,2rem);cfont-family:'Poppins', sans-serif;border:none;border-radius:7px;padding:10px;color:silver;">Planner for <?php echo $dt?>
<font style = "float:right;padding-right:15px;text-decoration:none;cursor:default;" id = "close">x</font>
</div>
<br>

    
<font style="margin-left:5%;color:silver;"  id = "title"></font>
<br><br><br>

<font style="width:90%;margin-left:5%;border:1px solid silver;color:silver;background:#343d55;padding:10px;border-radius:5px;" id = "dte"></font>
<br><br><br>
<div style = "margin-left:5%;color:silver;width:85%;">
<font  id = "dsc"></font>
</div>

  <hr>
 


</div>



<script>
    var count = 0;
    if("<?php echo $dt?>"=="January")
{
  count = 31;
}
if("<?php echo $dt?>"=="February")
{
  count = 28;
}

if("<?php echo $dt?>"=="March")
{
  count = 31;
}

if("<?php echo $dt?>"=="April")
{
  count = 30;
}

if("<?php echo $dt?>"=="May")
{
  count = 31;
}

if("<?php echo $dt?>"=="June")
{
  count = 30;
}

if("<?php echo $dt?>"=="July")
{
  count = 31;
}

if("<?php echo $dt?>"=="August")
{
  count = 31;
}

if("<?php echo $dt?>"=="September")
{
  count = 30;
}

if("<?php echo $dt?>"=="October")
{
  count = 31;
}

if("<?php echo $dt?>"=="November")
{
  count = 30;
}

if("<?php echo $dt?>"=="December")
{
  count = 31;
}

i=1;

while(i<=count)
{
    var txt = document.createTextNode(i);
    var font = document.createElement("font");
    var bt = document.createElement("button");
    bt.id = "bt"+i;
    bt.onmouseover = fun;
    bt.style.width = "100%";
    bt.style.height = "16vh";
    bt.style.background = "none";
    bt.style.border = "none";
    bt.name = "caller";
    var centre = document.createElement("center");
    bt.appendChild(font);
    font.appendChild(txt);
    font.style.color = "silver";
    font.style.fontSize = "min(2vw,3rem)";
   
    if(i%2!=0)
    {
        document.getElementById("dt"+i).style.background = "none";  
        document.getElementById("dt"+i).style.border="1px solid #7367f0";
    }
    else{
        document.getElementById("dt"+i).style.background ="#292f45";
        document.getElementById("dt"+i).style.border="1px solid rgba(255, 159, 67)";

    }
   centre.appendChild(bt);
    document.getElementById("dt"+i).appendChild(centre);
   


if(i==count)
{
  i=count;
  break;
}
else{
  i++;
}

}
let x = 0;
let e = 0;
function fun()
{var z = this.id;
  x = z.replace("bt", "");


document.getElementById("dt"+x).addEventListener("click",()=>{
  var d = this.id;
  e = d.replace("bt", "");

})
  if(width<=800)
{
plannerdiv.style.width = "70%";
plannerdiv.style.right = "-100%";

document.getElementById("dt"+x).addEventListener("click",()=>{

 
 document.cookie="value="+e; 

 

 
//


}) 



}

else{
 document.getElementById("dt"+x).addEventListener("click",()=>{
  document.cookie="value="+e; 
// document.getElementById("plannerdiv").style.right = "0%";



}) 

document.getElementById("close").addEventListener("click",()=>{
document.getElementById("plannerdiv").style.right = "-40%";



})





}


document.getElementById("dt"+x).addEventListener("mouseover",()=>{
 
 //document.getElementById("dt"+x).style.background = "rgba(255, 159, 67,0.2)";


 if(x%2!=0)
    {
        document.getElementById("dt"+x).style.background = "rgba(115,103,240,0.2)";  
        
    }
    else{
        document.getElementById("dt"+x).style.background ="rgba(255, 159, 67,0.2)";
       

    }


}) 

document.getElementById("dt"+x).addEventListener("mouseout",()=>{
  if(x%2!=0)
    {
        document.getElementById("dt"+x).style.background = "none";  
        document.getElementById("dt"+x).style.border="1px solid #7367f0";
    }
    else{
        document.getElementById("dt"+x).style.background ="#292f45";
        document.getElementById("dt"+x).style.border="1px solid rgba(255, 159, 67)";

    }


})

 
//fun2();

}


var examcumplanner = document.getElementById("examcumplanner");
var syllabus = document.getElementById("syllabus");
 var syllabuscount = 0;
examcumplanner.addEventListener("click",()=>{
  if(syllabuscount%2==0)
  {
syllabus.style.visibility = "visible";
planner.style.visibility = "hidden";
let text = document.getElementById("examcumplanner").innerHTML; 
document.getElementById("examcumplanner").innerHTML = text.replace("Examination", "Monthly Planner");

  }
else
{
syllabus.style.visibility = "hidden";
planner.style.visibility = "visible";
let text = document.getElementById("examcumplanner").innerHTML; 
document.getElementById("examcumplanner").innerHTML = text.replace( "Monthly Planner","Examination");

}
syllabuscount++;
})

var width = window.screen.availWidth;





    </script>
    <?php



?>

 
<?php

 if(isset($_GET["caller"]))
 {
  $query3 = sprintf("select * from monthlyplanner");

$connectt3 = mysqli_query($con,$query3);

  $data = array();
$number = $_COOKIE["value"];
echo $number;

for($i = 1;$i<= $dataa["total"] ;$i++)
{  $dataa3 = mysqli_fetch_assoc($connectt3);
 
  $data[]=$dataa3["sno"];
  echo $data[$i-1];
  echo "<script>
var btvalue =   $dataa3[sno];
//document.getElementById('dt'+btvalue).style.setProperty('background-color', 'rgba(144,238,144,0.3)', 'important');


</script>";

  
  
  
if($data[$i-1]==$number)
{
  $query2 = sprintf("select * from monthlyplanner where sno = $number",);

  $connectt2 = mysqli_query($con,$query2);
  $dataa2 = mysqli_fetch_assoc($connectt2);
  
  echo "<script>
  
  document.getElementById('plannerdiv').style.right = '0%';
   
  var title = document.getElementById('title');
  var dte = document.getElementById('dte');
  var dsc = document.getElementById('dsc');
  var ttl = document.createTextNode('$dataa2[title]');
  var datee= document.createTextNode('$dataa2[date]');
  var descc = document.createTextNode(`$dataa2[description]` );
  title.appendChild(ttl);
  dte.appendChild(datee);
  dsc.appendChild(descc);
   
   
  if(width<=800)
  {
  plannerdiv.style.width = '70%';
  document.getElementById('close').addEventListener('click',()=>{
    document.getElementById('plannerdiv').style.right = '-100%';
   
    
    })
    
  }
  
  
  
  
  </script>";

break;


}


else{
  continue;
 }
}
}
?>

<?php
$query5 = sprintf("select * from {$cl}_syllabus");

$connectt5 = mysqli_query($con,$query5);

$num5 = mysqli_num_rows($connectt5);
for($x = 1;$x<=$num5;$x++)
{$dataa5 = mysqli_fetch_assoc($connectt5);

echo "<script>
var text1 = document.createTextNode('$dataa5[date]');
var text2 = document.createTextNode('$dataa5[day]');
var text3 = document.createTextNode('$dataa5[subject]');
var text4 = document.createTextNode('$dataa5[syllabus]');
var td1=document.createElement('td');
var td2=document.createElement('td');
var td3=document.createElement('td');
var td4=document.createElement('td');
var center1 = document.createElement('center');
var center2 = document.createElement('center');
var center3 = document.createElement('center');
var center4 = document.createElement('center');
td4.style.width = '60%';
td3.style.width = '20%';
td4.style.padding = '30px';
td1.appendChild(center1);
td2.appendChild(center2);
td3.appendChild(center3);
td4.appendChild(center4);



center1.appendChild(text1);
center2.appendChild(text2);
center3.appendChild(text3);
center4.appendChild(text4);
var tr=document.createElement('tr');
tr.appendChild(td1);
tr.appendChild(td2);
tr.appendChild(td3);
tr.appendChild(td4);
//tr.style.background='#292f45';
tr.style.color='silver';
tr.style.fontSize='min(2vw,1.5rem)';
tr.style.borderBottom='1px solid #292f45';
syllabus.appendChild(tr);
</script>";

}




?>
</body>
</html>

