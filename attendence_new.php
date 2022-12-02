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
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
</style>
</head>
<body>
<div style = "width:100%;height:10rem;position:absolute;background:#292f45;" id = "contentnavbar">
<br><br>
 <font style = "color:silver;font-family:'Poppins', sans-serif;font-size:min(2vw,3rem);font-weight:bold;padding:10%;">
 
<?php

 




date_default_timezone_set("Asia/Kolkata");
$dt = date('F');
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
<font style = "color:grey;font-family:'Poppins', sans-serif;font-size:min(2vw,2rem);font-weight:bold;padding:10px;background:#161d30;border-radius:5px;border:1px solid 7367f0;box-shadow: 0 0 15px 3px #7367f0;float:right;margin-right:10%;cursor:pointer;" id = "view">View summary</font>
<form style = "float:right;margin-right:5%;width:20%;" method = "post">
<select style = "width:90%;background:none;border:1px solid silver;border-radius:30px;color:silver;font-size:min(2vw,2rem);" name = "months">
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option>
</select>
<button style = "color:silver;border:none;background:none;" name = "selectmonth"><span class = "glyphicon glyphicon-search"></span></button>
</form>
</div>

<table id = "planner" style = "position:absolute;top:15%;width:80%;height:80%;left:10%;border:1px solid #292f45;">
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

<div style = "background:#161d30;font-size:min(3.5vw,2rem);color:black;font-family:'Poppins', sans-serif;border:none;border-radius:7px;padding:10px;color:silver;width:30%;position:fixed;height:100%;left:-100%;transition:2s ease;" id = "summary">
<font style = "float:right;padding-right:15px;text-decoration:none;cursor:default;" id = "close">x</font>
<br><br>
<center>
<font style="color:silver;font-size:min(1.5vw,4rem);" >Summary for <?php echo $dt?></font>


<br>
<br><br>

<div id = "attendencesummary" style = "width:70%;">

</div>
</center>


<br>
<div style = "margin-left:5%;color:silver;width:85%;border:1px solid silver;border-radius:20px;">
<font  id = "dsc"><br>
<center>
<span id = "present"></span> attendence has been gained by you out of <span id = "absent"></span>. This gives a total percentage of <span id = "percent"></span>.<br><br>
<span id = "remarks">
<center>
</font>
<br>
</div>

 
 


</div>

<script>
    var count = 0;
var present=0;
var absent=0;
var close = document.getElementById("close");
var view = document.getElementById("view");
var summary = document.getElementById("summary");
view.addEventListener("click",()=>{

summary.style.left = 0;


})
close.addEventListener("click",()=>{

summary.style.left = "-100%";


})


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
   
   
   centre.appendChild(bt);
    document.getElementById("dt"+i).appendChild(centre);
   
    if(i%2!=0)
    {
        document.getElementById("dt"+i).style.background = "none";  
        document.getElementById("dt"+i).style.border="1px solid black";
    }
    else{
        document.getElementById("dt"+i).style.background ="#292f45";
        document.getElementById("dt"+i).style.border="1px solid black";

    }

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



}
 
</script>

<?php
if(isset($_POST["selectmonth"]))
{$month = strtolower($_POST["months"]);
$present=0;
$absent=0;
  $con = mysqli_connect("localhost","root","","$school");
if($con)
{

}

$query = sprintf("select * from {$cl}_{$month} where name = '$val'");

$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);
$x=1;

while($x<=date('t'))

{$dataaval = $dataa["$month$x"];

  if("$dataaval"=="p")
  {
echo "<script>
present++;
document.getElementById('dt$x').style.background = 'rgba(40, 199, 111,0.8)';
document.getElementById('dt$x').addEventListener('mouseover',()=>{

  document.getElementById('dt$x').style.background = 'rgba(40, 199, 111,1)';
  

})

document.getElementById('dt$x').addEventListener('mouseout',()=>{

  document.getElementById('dt$x').style.background = 'rgba(40, 199, 111,0.8)';

})
</script>";
$present++;
  }
  if("$dataaval"=="a"){
    echo "<script>
    absent++;
    document.getElementById('dt'+$x).style.background = 'rgba(255,69,0,0.6)';
   
    document.getElementById('dt$x').style.zIndex = '$i';
    document.getElementById('dt$x').addEventListener('mouseover',()=>{

      document.getElementById('dt$x').style.background = 'rgba(255,69,0,0.8)';
    
    })
    
    document.getElementById('dt$x').addEventListener('mouseout',()=>{
    
      document.getElementById('dt$x').style.background = 'rgba(255,69,0,0.6)';
    
    })
</script>";
$absent++;
}


if("$dataaval"==""){
  echo "<script>
  if(i%2!=0)
  {
      document.getElementById('dt'+i).style.background = 'none';  
      
  }
  else{
      document.getElementById('dt'+i).style.background ='#292f45';
      

  }

  </script>";
}
  if($x==date('t'))
{
  $x=date('t');
  break;
}
else{
  $x++;
}
}
echo "<script>
var percent=(present/(present+absent))*100;
percent = percent.toFixed(2);
var presentid = document.getElementById('present');
var absentid = document.getElementById('absent');
var remarks = document.getElementById('remarks');
var percentid = document.getElementById('percent');
var text1 = document.createTextNode(present);
var text2 = document.createTextNode(absent+present);
var text3 = document.createTextNode(percent);
presentid.appendChild(text1);
absentid.appendChild(text2);
percentid.appendChild(text3);
if(percent>=75)
{
  var text4 = document.createTextNode('Your attendence is perfect!');
  remarks.appendChild(text4);
}
else if(percent<75 && percent>=50)
{
  var text4 = document.createTextNode('Your attendence is average. Therefore try to attend classes.');
  remarks.appendChild(text4);
}
else 
{
  var text4 = document.createTextNode('Your attendence is poor. Therefore cont administration and attend classes regularly.');
  remarks.appendChild(text4);
}

</script>";
}
?>
<script>

var options = {
   

    series: [<?php echo $absent;?>,<?php echo $present;?>],
    
    chart: {
    type: 'donut',
    
  },
  stroke:{
    show: false,
    width:0
   },
   legend:{
show: false
   },
  colors:['rgba(40, 199, 111, 0.2)', 'rgba(40, 199, 111,0.8)'],
  responsive: [{
    breakpoint: "100%",
    options: {
      chart: {
        width: "50%"
      },
      
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#attendencesummary"), options);
  chart.render();
</script>
</body>
</html>

