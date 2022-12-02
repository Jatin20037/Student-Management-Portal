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
$dt = date('F');

$query = sprintf("select * from students where username= '$val'");

$query2 = sprintf("select * from {$cl}_assignments");
$query5 = sprintf("select * from $val");
$query3 = sprintf("select * from marks where username = '$val'");
$query4 = sprintf("select * from marks where username = '$val'");

$connectt = mysqli_query($con,$query);

$connectt2 = mysqli_query($con,$query2);
$connectt3 = mysqli_query($con,$query3);
$connectt4 = mysqli_query($con,$query4);
$connectt5 = mysqli_query($con,$query5);

$dataa = mysqli_fetch_assoc($connectt);

$dataa2 = mysqli_fetch_assoc($connectt2);
$dataa3 = mysqli_fetch_assoc($connectt3);
$dataa4 = mysqli_fetch_assoc($connectt4);
$dataa5 = mysqli_fetch_assoc($connectt5);

$num = mysqli_num_rows($connectt);

$num2= mysqli_num_rows($connectt2);
$num3= mysqli_num_rows($connectt3);
$num4= mysqli_num_rows($connectt4);
$num5= mysqli_num_rows($connectt5);

$arr = array(18,19,20,21,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40);
$profile = $dataa["profile"];
$section = $dataa["section"];
$bmi1 = round($dataa["weight"]/(($dataa["height"]/100)*($dataa["height"]/100)),0); 
$bmi2 = round($dataa["weight"]/(($dataa["height"]/100)*($dataa["height"]/100)),1); 

$one  = 100/23;
$start = 0;
$end = 22;
$mid = ($start+$end)/2;
$bar = 0;
while($arr[$mid]!=$bmi1)
{
if($arr[0] == $bmi1)
{
$bar = 1*$one;
break;
}
if($arr['20'] == $bmi1)
{
$bar = 23*$one;
break;
}
if($arr[$mid]>$bmi1)
{
  $end = $mid;
  $mid = ($start+$end)/2;
}
else{
  $start = $mid;
  $mid = ($start+$end)/2;
}

}
$bar = round($mid,0)*$one;





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
<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
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
body{
    background:#161d30;
    
}
#maindiv{
    
    
}
::-webkit-scrollbar {
  width: 0px;

}
#profile{
width:5vh;
border-radius:50%;
top:12%;
left:95%;
position:relative;
}
        </style>
    </head>
    <body>
        <span class = "glyphicon glyphicon-menu-hamburger" style = "color:white;position:fixed;top:12%;font-size:min(5vw,3rem);transition:2s ease;left:5%;visibility:hidden;z-index:5;" id = "burger"></span>
        <div style = "width:13.5%;height:100%;background:#292f45;position:fixed;transition:2s ease;top:0;z-index:2;" id = "navigation">
<span style = "font-size:min(1.2vw,1.5rem);color:white;font-family:'Poppins', sans-serif;background:#161d31;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-right:30%;padding-top:5%;padding-bottom:5%;top:5%;">Dashboard</span>
<span  style = "font-size:min(1.2vw,1.5rem);color:lightgrey;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:15%;">Apps & Pages</span>
<span  style = "font-size:min(1.2vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:20%;">&nbsp&nbsp&nbsp&nbsp<a href = "email.php" style = "color:white;text-decoration:none;">Email</a></span>
<span  style = "font-size:min(1.2vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:25%;">&nbsp&nbsp&nbsp&nbsp<a href = "todo.php" style = "color:white;text-decoration:none;">Todo</a></span>

<span  style = "font-size:min(1.2vw,1.5rem);font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:30%;">&nbsp&nbsp&nbsp&nbsp<a href = "library.php" style = "color:white;text-decoration:none;">Library</a></span>
<span  style = "font-size:min(1.2vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:35%;">&nbsp&nbsp&nbsp&nbsp<a href = "planner.php" style = "color:white;text-decoration:none;">Planner</a></span>
<span  style = "font-size:min(1.2vw,1.5 rem);color:white;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:40%;">&nbsp&nbsp&nbsp&nbsp<a href = "assignment.php" style = "color:white;text-decoration:none;">Assignments</a></span>
</div>

       
<div style = "width:86.5%;position:relative;left:13.5%;background:#161d30;z_index:2;" id = "maindiv">
<br>

<div style = "width:98%;position:relative;left:1%;top:2%;background:#292f45;border-radius:5px;height:6.3%;font-family:'Poppins', sans-serif;" id = "container1">

<?php
echo "<font style = 'padding-top:1%;left:87%;position:absolute;font-size:min(3vw,1.5rem);color:white;'>$dataa[name]</font>";?>
<img class="img-responsive" id = "profile"></div>
<br>
<span class = "row " style = "width:100%;position:absolute;left: 0.8%;height:auto;" id = "row1">
   <span class = "col-md-4" id = "row1_cont1">
<br>
    <div style = "background:#292f45;border-radius:7px;height:100%;font-size:min(6vw,4rem);color:silver;font-family:'Poppins', sans-serif;border:1px solid #7367f0;" id = "container2"><?php 
date_default_timezone_set("Asia/Kolkata");

if(date("H:i:sa")<12)
{
echo "<font style = 'padding:8%;position:absolute;'> Good Morning!</font>";
echo "<font style = 'padding-top:18%;padding-left:8%;position:absolute;font-size:min(3vw,2rem);'>$dataa[name]</font>";
echo"<img src='assets/icons/morning.png' class='img-fluid' alt='' style = 'width:30%;padding-top:8%;float:right;padding-right:15%;'>";

}
if(date("H:i:sa")>=12 and date("H:i:sa")<16)
{
echo "<font style = 'padding:8%;position:absolute;font-size:min(6vw,3rem);'>Good Afternoon!</font>";
echo "<font style = 'padding-top:18%;padding-left:8%;position:absolute;font-size:min(3vw,2rem);'>$dataa[name]</font>";
echo"<img src='assets/icons/noon.png' class='img-fluid' alt='' style = 'width:30%;padding-top:8%;float:right;padding-right:15%;'>";

}
elseif(date("H:i:sa")>=16 )
{

echo "<font style = 'padding:8%;position:absolute;'>Good Evening!</font>"; 
 echo "<font style = 'padding-top:18%;padding-left:8%;position:absolute;font-size:min(3vw,2rem);'>$dataa[name]</font>";
 echo"<img src='assets/icons/evening.png' class='img-fluid' alt='' style = 'width:30%;padding-top:8%;float:right;padding-right:15%;'>";
 
}
?>

<div style = "background:none;border-radius:5px;width:80%;margin-left:7%;top:50%;position:absolute;">
<?php 
$tcount=date("d");
if(date("H:i:sa")>="00:00:00")
{$conew = mysqli_connect("localhost","root","","library");
  $query6 = sprintf("select * from thoughts where s_no = $tcount");
  $connectt6 = mysqli_query($conew,$query6);
  $dataa6 = mysqli_fetch_assoc($connectt6);

echo "<font style = 'font-size:min(2vw,1.5rem);color:white;'> $dataa6[thought] </font>";

 

}
?>
</div>
</div>
</span>  
   
   <span class = "col-md-8 " id = "row1_cont2">
<br>
<div style = "background:#292f45;border-radius:5px;COLOR:silver;font-size:min(6vw,2rem);font-family:'Poppins', sans-serif;" id = "container3">
<span style = "padding:40px;">Assignment report</span><br><br>



<span class = "row">
<span class = "col-md-4">
<center><div style = "padding:15px;" id = "chartassignment">
<script>

    var options = {
       

        series: [<?php echo $num5; ?>,<?php echo $num2-$num5; ?>],
        
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
      colors:[ 'rgba(40, 199, 111,0.8)','rgba(40, 199, 111, 0.2)'],
      responsive: [{
        breakpoint: "100%",
        options: {
          chart: {
            width: "50%"
          },
          
        }
      }]
      };

      var chart = new ApexCharts(document.querySelector("#chartassignment"), options);
      chart.render();
    </script>

</div></center>


</span>
<span class = "col-md-4" style = "font-size:min(1.5vw,3rem);" >
  <br>
  <center> You've completed <?php echo $num5?> assignments,<br> out of <?php echo $num2?> .</center> <br>
  
</span>

<span class = "col-md-4" style= "font-size:min(3vw,2rem);">
  <br>
 <br>
  <button type="button" class="btn btn-default" style = "font-size:min(1vw,2rem);color:white;font-family:'Poppins', sans-serif;background:#7367f0;border:none;padding-left:20px;padding-right:20px;"><a href = "assignment.php" style = "color:white;text-decoration:none;">View All</a></button>
  
  
</span>

</span>

</div>
</span>

<p></p>
<p></p>
<span  class = "row" id = "row2" style = "width:100%;position:absolute;left:0.6%;">
   <span class = "col-md-4 ">
    <br>
<div style ="display:flex;position:relative;" id = "row2col">
    <div style = "background:#292f45;border-radius:7px;font-size:min(6vw,4rem);color:silver;font-family:'Poppins', sans-serif;width:48.5%;" id = "container4">
    <center>
    <font style = 'font-size:min(4vh,50px);'>BMI</font></center>
 <div style = "background-color:lightgrey; width:90%;height:2vh;border-radius:50px;position:relative;left:5%;">
 <div style = "background-color:rgba(255, 159, 67, 0.85); width:<?php echo $bar; ?>%;height:2vh;border-radius:50px;position:relative;left:0%;"></div>
 
 <br><br>
</div>
<center>
<?php 
if($bmi2<=18.5)
{
echo "<font style = 'font-size:min(2.5vh,2rem);'>You are underweight<br> Your BMI is $bmi2</font>";
}
if($bmi2>18.5 and $bmi2<=25)
{
echo "<font style = 'font-size:min(2.5vh,2rem);'>You are normal <br>Your BMI is $bmi2</font>";
}
if($bmi2>25 and $bmi2<=30)
{
echo "<font style = 'font-size:min(2.5vh,2rem);'>You are overweight <br>Your BMI is $bmi2</font>";
}if($bmi2>30)
{
echo "<font style = 'font-size:min(2.5vh,2rem);'>You are Obese<br>Your BMI is $bmi2</font>";
}
?>
</center>
<br>
</div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div style = "background:#292f45;border-radius:7px;font-size:min(2vw,1.5rem);color:silver;font-family:'Poppins', sans-serif;width:50.5%;" id = "container7">
<center><font style = "font-size:min(3vh,50px);padding-top:0%;">Marksheets</font>
<br><br>
<form method = "get">
<select name = "selector" style = "width:90%;border-radius:50px;height:2.5vh;" id = "selector">

</select>
<br><br>
<button onclick = download() style = "font-size:min(1vw,2rem);color:white;font-family:'Poppins', sans-serif;background:#7367f0;border:none;padding-left:20px;padding-right:20px;border-radius:5px;" name="download">download</button>
</form>
</center>

</div><br>
</div><br>

<div style = "background:#292f45;border-radius:7px;font-size:min(6vw,4rem);color:silver;font-family:'Poppins', sans-serif;width:100%;height:auto;" id = "container5">


<span class="row" style = "position:relative;left:5%;width:97%;">


  
<span class="col-sm-4" >
 
<br>
 <font style = "font-size:min(5vw,2rem);"> Attendence Track <br>
  </font>


  <br>  

</span>
<span class = "col-sm-8"style = "overflow:auto;" id = "attendencecont">
<a href= "attendence_new.php">
 <div id = "attendence" style = "display:flex;height:auto;overflow:hidden;padding:20px;">
 
 
</div>
</a>
</span>


   </span>
   </div>
</span>

<script>
  var maindiv= document.getElementById("maindiv"); 
  var attendence = document.getElementById("attendence");

var gap = 15;

for(i = 1;i<=1;i++)
{
var newdiv = document.createElement("div");
newdiv.id = "attendence"+i;
newdiv.style.height="80%";
newdiv.style.top = "10%";
newdiv.style.left = gap+"%";
newdiv.style.width = "60%";
newdiv.style.borderRadius = "7px";
newdiv.style.background = "white";
newdiv.style.position = "absolute";
newdiv.style.boxShadow= "0 0 6px 6px #161d30";

var text = document.createTextNode("View Now");
font = document.createElement("font");
font.style.fontSize = "min(2vw,3rem)";

font.appendChild(text);
font.style.color ="#202020";
var centre = document.createElement("center");
centre.appendChild(font);

newdiv.appendChild(centre);
var sub = document.createElement("div");
sub.id = "attendence_sub"+i;
sub.style.height="50%";
sub.style.top = "50%";

sub.style.width = "100%";
sub.style.borderRadius = "3px";
sub.style.background = "#202020";
sub.style.position = "absolute";
newdiv.appendChild(sub);
attendence.appendChild(newdiv);

gap = gap+25;
}

var attendencecont = document.getElementById("attendencecont");



</script><br>
  
  

   
   <span class = "col-md-8" id = "cont6main">
   <br>
<div style = "background:#292f45;border-radius:5px;height:100%;width:101%;COLOR:silver;font-size:min(6vw,2rem);font-family:'Poppins', sans-serif;" id = "container6"><span style = "padding:40px;">



<script>
   
   
   var options = {
          series: [{
          name: 'Extra Activities',
          data: [<?php echo $dataa3["music_dance"]; ?>,<?php echo $dataa3["sports"]; ?>,<?php echo $dataa3["communication"]; ?>,<?php echo $dataa3["discipline"]; ?>,<?php echo $dataa3["Art_craft"]; ?>,<?php echo $dataa3["tidiness"]; ?>]
        }],
          chart: {
          height: 350,
          type: 'bar',
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["white"]
          }
        },
        
        xaxis: {
          categories: ["Music/Dance", "Sports", "Communication", "Discipline", "Art&Craft","Tidiness"],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }
        
        },
        title: {
          text: 'Extra Co-curricular activities',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#container6"), options);
        chart.render();
      
</script>


</div>
</span>
</span>
<p></p><p></p>
<span  class = "row" id = "row3"  style = "width:100%;position:absolute;left:0.6%;height:20%;">
  <span class="col-md-8" id = "row3_cont1">
  <br>
  <div style = "background:#292f45;border-radius:5px;COLOR:silver;font-size:min(6vw,2rem);font-family:'Poppins', sans-serif;" id = "container8">

 
  <span class = "row" style = "padding:20px;border-bottom: 1px solid #343d55;width:100%;margin-left:0%;background:#343d55;">
  <span class = "col-md-3">
    
<b> <center> Quarter</center></b>
      </span>
      <span class = "col-md-3">
    <b> <center> Amount</center> </b>
    </span>
    <span class = "col-md-3">
   
    <b><center> Status</center> </b>
    </span>
    <span class = "col-md-3">
    <b> <center>Action </center></b>
    </span>
      </span>
 
    <span class = "row" style = "padding:20px;border-bottom: 1px solid #343d55;width:98%;margin-left:1%;">
  <span class = "col-md-3">
    <center id = "period1"></center>
      </span>

     <span class = "col-md-3">
    <center id = "amt1"></center>
    </span>
    <span class = "col-md-3">
    <center id = "status1"></center>
    </span>
    <span class = "col-md-3">
     
    <center><a href = "paydirect.php?sno=1" style = "font-size:min(1vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;"> Pay now </a></center>
     
  </span>
      </span>

    <span class = "row" style = "padding:20px;border-bottom: 1px solid #343d55;width:98%;margin-left:1%;">
  <span class = "col-md-3">
    <center id = "period2"></center>
      </span>
      <span class = "col-md-3">
    <center id = "amt2"></center>
      </span> 
    <span class = "col-md-3">
    <center id = "status2"></center>
      </span>
    <span class = "col-md-3">

    <center><a href = "paydirect.php?sno=2" style = "font-size:min(1vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;"> Pay now </a></center>
      
      </span>
      </span>


      <span class = "row" style = "padding:20px;border-bottom: 1px solid #343d55;width:98%;margin-left:1%;">
  <span class = "col-md-3">
    <center id = "period3"></center>
      </span>
      <span class = "col-md-3">
    <center id = "amt3"></center>
      </span>
      <span class = "col-md-3">
    <center id = "status3"></center>
      </span>
      <span class = "col-md-3">
  
    <center><a href = "paydirect.php?sno=3" style = "font-size:min(1vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;"> Pay now </a></center>
      
      </span>
      </span>

  
  <span class = "row" style = "padding:20px;border-bottom: 1px solid #343d55;width:98%;margin-left:1%;">
  <span class = "col-md-3">

    <center id = "period4"></center>
      </span>
      <span class = "col-md-3">
    <center id = "amt4"></center>
      </span>
    <span class = "col-md-3">
    <center id = "status4"></center>
      </span>
    <span class = "col-md-3">
    

    <center><a href = "paydirect.php?sno=4" style = "font-size:min(1vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;"> Pay now </a></center>
      </form>  
      </span>
      </span>

     
</div>
  </span>
  <span class="col-md-4" >
  <br>
  <div style = "background:#292f45;border-radius:5px;;COLOR:silver;font-size:min(6vw,2rem);font-family:'Poppins', sans-serif;width:101%;" id = "container9">

  <iframe src="updates.php" title="updates" height="94%" width="100%" style = "border-radius:5px;"></iframe>

</div>
</span>
<br><br>
</span>

<span class = "row  " id = "row4" style = "position:absolute;left:0.6%;">
  <span class = "col-md-6">
  <br>
  <div style = "background:#292f45;border-radius:5px;;COLOR:silver;font-size:min(6vw,2rem);font-family:'Poppins', sans-serif;width:101%;" id = "container10">
  
  <div style = "background:#343d55;width:100%;padding:20px;font-size:min(2vw,3rem);border-top-left-radius:5px;border-top-right-radius:5px;">
Apply for Leave
      </div>  
<br>
<form method = "post" style = "width:90%;margin-left:5%;">

<input type = "text" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:50%;" placeholder = " Enter Subject" name = "subject">
<br><br>
<label>From</label> <label style = "float:right;margin-right:22%;">To</label><br>
<input type = "date" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;" name = "fromdt">
<input type = "date" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;float:right" name = "todt">
<br><br>
<textarea style = "width:100%;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;border:none;border-radius:5px;" name = "blog">
   Description
      </textarea>
      <br><br>
      <button type = "submit" style = "font-size:min(1vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;box-shadow: 2px 2px 9px 2px #161d30;border:none;" name = "apply"> Apply </button>
<br><br>
      </form>
</div>
      </span>
     
<span class = "col-md-6">
  <br>
<div style = "background:#292f45;border-radius:5px;;COLOR:silver;font-family:'Poppins', sans-serif;width:101%;" id = "container11">

<span class = "row" style = "padding:20px;background:#343d55;width:98%;margin-left:1%;">
  <span class = "col-md-6">

Admission no: 
<?php echo $dataa["adm_no"];?>

</span>
<span class = "col-md-6">

Father's name:  
<?php echo $dataa["father_name"];?>
    
</span>
</span>
<span class = "row" style = "padding:20px;width:98%;margin-left:1%;">
  <span class = "col-md-6">
    
DOB: 
<?php echo $dataa["dob"];?>
</span>
<span class = "col-md-6">
Mother's name: 
<?php echo $dataa["mother_name"];?>
    
</span>    
</span>
 
<span class = "row" style = "padding:20px;background:#343d55;width:98%;margin-left:1%;">
  <span class = "col-md-6">
         
    House: 
<?php echo $dataa["house"];?>
</span>
<span class = "col-md-6">
Father's contact no: 
<?php echo $dataa["f_contact"];?>
      

</span>    
</span>  
<span class = "row" style = "padding:20px;width:98%;margin-left:1%;">
  <span class = "col-md-6">
 
Student mail-id:  
<?php echo $dataa["std_mailid"];?>
</span>
<span class = "col-md-6">
Mother's contact no: 
<?php echo $dataa["m_contact"];?>
</span>   
</span>
          
<span class = "row" style = "padding:20px;background:#343d55;width:98%;margin-left:1%;">
  <span class = "col-md-6">
      
     Gender: 
<?php echo $dataa["gender"];?>
</span>
<span class = "col-md-6">
   
Address: 
<?php echo $dataa["address"];?>
     
</span></span>  

     
<span class = "row" style = "padding:20px;width:98%;margin-left:1%;">
  <span class = "col-md-6">
   
Class teacher:  
<?php echo $dataa["class_teacher"];?>
</span>
<span class = "col-md-6">
Parent mail-id:
<?php echo $dataa["p_mailid"];?>
</span>
</span> 
      
<span class = "row" style = "padding:20px;background:#343d55; width:98%;margin-left:1%;">
  <span class = "col-md-6">
      
      Blood group: 
<?php echo $dataa["blood_group"];?> 
</span>
<span class = "col-md-6">

</span>
</span>
           




     
      </div>

</span>
<p></p><p></p>
<div style = "transition:2s ease;overflow:auto;background:#292f45;border-radius:5px;color:silver;position:fixed;height:100%;top:0;width:30%;right:-50%;" id = "marksheetdiv">
  <br>
  <font style = "margin:5%;font-size:min(2vw,3rem);">
Marksheet</font>
<font style = "float:right;padding-right:5%;text-decoration:none;cursor:default;font-size:min(3vw,2rem);" id = "close3">x</font>
<br><br>
      </div>
</div>
</body>
<script>

  var cont11 = document.getElementById('container11');
  var profile = document.getElementById("profile");
profile.src = "assets/student profiles/<?php echo $school ?>/<?php echo $profile ?>";
var row3 = document.getElementById("row3");

var nav = document.getElementById("navigation");
var container1 = document.getElementById("container1");
var width = window.screen.availWidth;
container1width = container1.offsetWidth;
profile.style.left = (container1width/100)*95;
var nav_width_percent = (((width/100)*13.5)/width)*100;
nav.style.width = nav_width_percent+"%";
var row2 = document.getElementById("row2");
var row1 = document.getElementById("row1");

var cont6main = document.getElementById("cont6main");
var cont6 = document.getElementById("container6");
var cont9 = document.getElementById("container9");
var cont10 = document.getElementById("container10");
var cont2 = document.getElementById("container2");
var cont3 = document.getElementById("container3");
cont10.style.height = cont11.offsetHeight+"px";
cont2.style.height = cont3.offsetHeight+"px";

cont6.style.height = attendence.offsetTop+attendence.offsetHeight+340+"px";
//row3.style.top = row2.offsetHeight+30+"px";
var row1 = document.getElementById("row1");
var row1_cont2 = document.getElementById("row1_cont2");
var row3_cont1 = document.getElementById("row3_cont1");
var row1_cont1 = document.getElementById("row1_cont1");
var row2 = document.getElementById("row2");
var row3 = document.getElementById("row3");
row3.style.height = row3_cont1.offsetHeight+"px";
var row4 = document.getElementById("row4");
row1.style.height = row1_cont2.offsetHeight+"px";
row2.style.top = row1.offsetHeight+20+"px";
row3.style.top = row2.offsetHeight+row2.offsetTop+20+"px";
row4.style.top = row3.offsetTop+row3.offsetHeight+20+"px";
if(width<=756)
{ container1.style.left = 0;
  container1.style.width = "100%";
  var row2col = document.getElementById("row2col");
  var row1col = document.getElementById("row1col");
  var cont5 = document.getElementById("container5");
  var cont4 = document.getElementById("container4");
  var cont2 = document.getElementById("container2");
 nav.style.left = "-50%";   
 container1.style.width="95%";
 container1.style.left = "2.5%";
 nav.style.width = "50%";
 burger.style.visibility = "visible";
 cont6.style.width = cont2.offsetWidth+"px";
 cont5.style.width = cont2.offsetWidth+"px";
 cont5.style.height = cont4.offsetHeight+20+"px";
 row2col.style.left = "10px";
 var attendence = document.getElementById("attendence");
 attendence.style.height = "100px";
 cont2.offsetHeight = "50%";
row1.style.height = 'auto';

 row2.style.top = row1.offsetHeight+0+"px";
 row3.style.height = row3_cont1.offsetHeight*1.8+"px";
 row3.style.top = row2.offsetHeight+row2.offsetTop+20+"px";
 row4.style.top = row3.offsetHeight+row3.offsetTop+20+"px";
 row1_cont1.style.height = row1_cont2.offsetHeight+"px";
 cont9.style.height = "50rem";
 //row3.style.top = cont6main.offsetTop+"px";
// document.getElementById("container9").style.height = document.getElementById("container8").offsetHeight;
 burger.addEventListener("click",()=>{
if(nav.style.left == "-50%")
{
    nav.style.left = "0%";
    burger.style.position = "relative";
    burger.style.left = ((nav.offsetWidth/width)*100)+5+"%";
}
else{
    nav.style.left = "-50%";
    burger.style.left = "5%";
}
 })







}

</script>
</html>


<?php

if(isset($_POST["apply"]))
 {
$title = $_POST["subject"];
$fromdt = $_POST["fromdt"];
$todt = $_POST["todt"];
$desc = $_POST["blog"];


$queryinsert = sprintf("insert into {$cl}_leave_application values('$val','$title','$fromdt','$todt','$desc')");
 
 $connecttinsert = mysqli_query($con,$queryinsert);
 }
 $query6 = sprintf("select * from {$cl}_{$val}_fee ");
 $connectt6 = mysqli_query($con,$query6);
 $num6= mysqli_num_rows($connectt6);
 for($z=1;$z<=$num6;$z++)
 {
 
 $dataa6 = mysqli_fetch_assoc($connectt6);
 echo "<script>
 txt1 = document.createTextNode('$dataa6[period]');
 txt2  = document.createTextNode('$dataa6[amount]');
 txt3  = document.createTextNode('$dataa6[status]');
 document.getElementById('period'+$z).appendChild(txt1);
 document.getElementById('amt'+$z).appendChild(txt2);
 document.getElementById('status'+$z).appendChild(txt3);
 </script>";
 }
 ?>
<?php
$query7 = sprintf("select distinct exams from {$cl}_marksheet where username = '$val'");
$connectt7 = mysqli_query($con,$query7);
$num7 = mysqli_num_rows($connectt7);
for($i = 0;$i<$num7;$i++)
{$dataa7 = mysqli_fetch_assoc($connectt7);
echo"<script>
var selector = document.getElementById('selector');

var option = document.createElement('option');
option.value = '$dataa7[exams]';
var optiontext = document.createTextNode('$dataa7[exams]');
option.appendChild(optiontext);
selector.appendChild(option);

</script>";
}


if(isset($_GET["download"]))
{
$selector = $_GET["selector"];

$con2 = mysqli_connect("localhost","root","","schools");

$dt = date('F');

$query8 = sprintf("select * from credentials where username = '$school'");
$connectt8 = mysqli_query($con2,$query8);
$num8= mysqli_num_rows($connectt8);
$dataa8 = mysqli_fetch_assoc($connectt8);
$i=0;
echo "
<script>
var marksheetdiv = document.getElementById('marksheetdiv');
var marksdiv = document.createElement('div');
marksheetdiv.style.right=0;
marksdiv.id = 'canvs';
marksdiv.style.background='#E7F6F2';
marksdiv.style.width = '90%';
marksdiv.style.marginLeft = '5%';
var markssubdiv1 = document.createElement('div');
markssubdiv1.style.background='#2C3333';
markssubdiv1.style.width='100%';
var text1 = document.createTextNode('$dataa8[name]');
var font1 = document.createElement('font');
font1.style.fontFamily='century gothic';
font1.style.fontSize = 'min(2vw,2rem)';
markssubdiv1.style.padding = '10px';
markssubdiv1.style.display = 'flex';
var image = document.createElement('img');
image.style.width='30px';
image.src = 'assets/logo/$dataa8[logo]';
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
marksheetdiv.appendChild(marksdiv);
td1.appendChild(center2);
td2.appendChild(center3);
td3.appendChild(center4);
tr1.appendChild(td1);
tr1.appendChild(td2);
tr1.appendChild(td3);
table.appendChild(tr1);
marksdiv.appendChild(center1);





</script>";
$query9 = sprintf("select * from {$cl}_marksheet where username = '$val' and exams='$selector'");
$connectt9 = mysqli_query($con,$query9);
$num9= mysqli_num_rows($connectt9);

for($z=1;$z<=$num9;$z++)
{
$dataa9 = mysqli_fetch_assoc($connectt9);

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
var text2 = document.createTextNode('$dataa9[subject]');
var text3 = document.createTextNode('$dataa9[marks]');
var text4 = document.createTextNode('$dataa9[grade]');
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
echo"<script>var canvs = document.getElementById('canvs');
html2pdf().from(canvs).save();

var close3 = document.getElementById('close3');
  close3.addEventListener('click',()=>{
    
   marksheetdiv.style.right = '-100%';
  
    })
    </script>";
}
?>























        

    