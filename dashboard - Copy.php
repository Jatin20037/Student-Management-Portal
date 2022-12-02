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
$query1 = sprintf("select * from {$cl}_attendence where username = '%s'", $val);
$query2 = sprintf("select count(s_no) as total from {$cl}_assignments");
$query5 = sprintf("select count(s_no) as total2 from $val");
$query3 = sprintf("select * from marks where username = '$val'");
$query4 = sprintf("select * from marks where username = '$val'");
$connectt = mysqli_query($con,$query);
$connectt1 = mysqli_query($con,$query1);
$connectt2 = mysqli_query($con,$query2);
$connectt3 = mysqli_query($con,$query3);
$connectt4 = mysqli_query($con,$query4);
$connectt5 = mysqli_query($con,$query5);
$dataa = mysqli_fetch_assoc($connectt);
$dataa1 = mysqli_fetch_assoc($connectt1);
$dataa2 = mysqli_fetch_assoc($connectt2);
$dataa3 = mysqli_fetch_assoc($connectt3);
$dataa4 = mysqli_fetch_assoc($connectt4);
$dataa5 = mysqli_fetch_assoc($connectt5);

$num = mysqli_num_rows($connectt);
$num1 = mysqli_num_rows($connectt1);
$num2= mysqli_num_rows($connectt2);
$num3= mysqli_num_rows($connectt3);
$num4= mysqli_num_rows($connectt4);
$perdata = round(($dataa1[$dt]/30)*100,1); 
$arr = array(18,19,20,21,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40);
$profile = $dataa["profile"];
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
$logo = $newdataa["logo2"];
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
  <title>SmartProfilez| <?php echo $dataa['name'];?> |</title>
 
<style>
 
    @import url('https://fonts.googleapis.com/css2?family=Freehand&family=Quicksand:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
    *{
   margin:0;
  }
    body{
      background-image:url(assets/bg/bg1.jpg);
      
      background-size:100% 100%;
    } 
  
#mark1{
  background: rgb(195,18,18);
  width:29rem;
  height:9vh;
  position:absolute;
  top:45%;
  border-radius:30px;
  left:-10%;
transition:2s ease;
}
#mark2{
  background: rgb(144, 12, 63);
  width:29rem;
  height:9vh;
  position:absolute;
  top:54%;
  border-radius:30px;
  left:-10%;
  transition:2s ease;
}
#mark3{
  background: rgb(222, 49, 99);
  width:29rem;
  height:9vh;
  position:absolute;
  top:63%;
  border-radius:30px;
  left:-10%;
  transition:2s ease;
}
#mark4{
  background: rgb(255, 195, 0);
  width:29rem;height:9vh;
  position:absolute;
  top:72.01%;
  border-radius:30px;
  left:-10%;
  transition:2s ease;
}
#mark5{
  background: rgb(0, 191, 255);
  width:29rem;height:9vh;
  position:absolute;
  top:81.01%;
  border-radius:30px;
  left:-10%;
  transition:2s ease;
}

#mark1:hover{
left:-1.5%;
}
#mark2:hover{
left:-1.5%;
}
#mark3:hover{
left:-1.5%;
}
#mark4:hover{
left:-1.5%;
}
#mark5:hover{
left:-1.5%;
}
#selector{
transition:2s ease;

}
#selector:hover{
  box-shadow: 0 0 10px #5EE6EB;

}

</style>
    </head>
<body>
<div  style = "background:rgb(0,0,0,0.7);width:100vw;height:6vh;;z-index:5;position:fixed;">
  
      <a  href="#" style = "color:white;left:1%;position:absolute;font-size:2rem;padding-top:0.5%;text-decoration:none;font-weight:normal;font-family: 'Quicksand', sans-serif;"><img src="assets/logo/<?php echo $logo ?>" alt="" style = "background:none;max-width:20rem;width:4rem;"></a>
      <font style = "color:white;font-family: 'Quicksand', sans-serif;font-size:1.5rem;float:right;padding:1%;" id = "cp" onclick = cp()>
      Change your password  </font>   
</div>

<a href = "profile.php"><div class="container" style = "z-index:1;" id = "mark1">
  <font style = "font-family: 'Quicksand', sans-serif;font-size:3rem;left:30%;position:absolute;padding-top:10%;color:white;">Profile</font>
<img src ="assets/navigation/avatar.png" class="img-responsive" style = "float:right;max-width:9rem;">
</div></a>
<a href = "library.php">
<div class="container" style = "z-index:1;" id = "mark2">
<font style = "font-family: 'Quicksand', sans-serif;font-size:3rem;left:20%;position:absolute;padding-top:10%;color:white;z-index:-1;">Library</font>
<img src ="assets/navigation/bus.png" class="img-responsive" style = "float:right;max-width:9rem;padding:5%;">
</div></a>
<a href="fee.php">
<div class="container" style = "z-index:1;" id = "mark3">
<img src ="assets/navigation/fee.png" class="img-responsive" style = "float:right;max-width:9rem;padding:5%;">
<font style = "font-family: 'Quicksand', sans-serif;font-size:3rem;left:30%;position:absolute;padding-top:10%;color:white;">Fee</font>
</div></a>
<a href = "attendence.php">
<div class="container" style = "z-index:1;" id = "mark4">
<img src ="assets/navigation/cal.png" class="img-responsive" style = "float:right;max-width:8rem;padding:5%;">
<font style = "font-family: 'Quicksand', sans-serif;font-size:3rem;left:12%;position:absolute;padding-top:10%;color:white;">Attendence</font>
</div></a>
<a href = "assignment.php">
<div class="container" style = "z-index:1;" id = "mark5">
<img src ="assets/navigation/assign.png" class="img-responsive" style = "float:right;max-width:8rem;padding:5%;">
<font style = "font-family: 'Quicksand', sans-serif;font-size:2.7rem;left:12%;position:absolute;padding-top:10%;color:white;">Assignments</font>
</div></a>



<span class="row justify-content-start " style = "width:100%;top:6vh;position:absolute;z-index:0;">
<div class="col-xs-3 col-md-3 col-lg-3 col-xl-3 col-sm-3" style = "max-width:80vw;width: 30rem;background:rgb(42,165,171,0.5);top:8%;height:93vh;left:%;z-index:-1;border-top-right-radius:30px;">
<center><br>
</img><br></center><br>

<span style = "font-family: 'Quicksand', sans-serif;font-size:35px;color:white;"><?php echo $dataa['name'];?></span><br>


<span  style = "font-family: 'Quicksand', sans-serif;font-size:40px;color:white;"><center><?php echo $dataa['class'];?></center></span>

</div>
<div class="  col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 " style="width: 600px;height:93vh;border-radius:10px;z-index:0;">
<span style = "padding:2%;position:absolute;font-family:'Quicksand', sans-serif;font-size:40px;z-index:1;">
Progress<br></span><br><br><br>
<span style = "padding-top:2%;position:absolute;font-family:'Quicksand', sans-serif;font-size:20px;padding-left:2%;">
View your cumulative academic progress.
<span>
  <span style = "position:absolute;left:60vw;font-size:min(6vw,4rem);">
<?php 
date_default_timezone_set("Asia/Kolkata");

if(date("H:i:sa")<12)
{
echo "Good Morning!";
}
if(date("H:i:sa")>=12 and date("H:i:sa")<16)
{
echo "Good Afternoon!";
}
elseif(date("H:i:sa")>=16 )
{
echo "Good Evening!";
}
?>
</span>

  <hr style = "width:50vw;">
  <div style="background-color: rgb(255,255,255,0.5);width:81vw;height:auto;top:8%;border-radius:10px;BOX-SHADOW: 0 0 10px black;max-width:100%;">
  
  
  <span style = "padding:1%;position:absolute;font-family:'Quicksand', sans-serif;font-size:25px;">
Overall student progress<br></span><br>

<span class="row">


  <span class = "col-sm-3">
  <canvas id="myChart" style="width:150%;max-width:600rem"></canvas>

<script>
  var presentdata = <?php echo $dataa1["$dt"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "yellow",
  "lightgrey",
 
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: ""
    }
  }
});
var percen = (presentdata/30)*100;

</script>
</span>
<span class="col-sm-3" >
  <br><br>

 <font style = "font-size:min(3vw,2rem);">  You've gained <?php echo $perdata?> percent of your attendence. <br>
  Check out more at calender. 
  </font>

</span>
<span class = "col-md-3">
  <canvas id="myChartt" style="width:100%;max-width:600px"></canvas>

<script>
  var donedata = <?php echo $dataa2["total"]; ?>;
  var totaldata = <?php echo $dataa5["total2"]; ?>;

var xValues = ["Completed","Not completed"];
var yValues = [donedata, totaldata];
var barColors = [
  "skyblue",
  "lightgrey",
 
];

new Chart("myChartt", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: ""
    }
  }
});
</script>
</span>
<span class="col-sm-3" >
  <br><br>
  You've completed <?php echo $dataa5["total2"]?> assignments,<br> out of <?php echo $dataa2["total"]?> . <br>
  
</span>

</div>
<!--lower box for chart --->
<span class="row justify-content-between " style= "">
<div class="container-xs col-sm-3" style="background-color:rgb(255,255,255,0.5);z-index:1;width:15dvw;height:50vh;max-width:120vw;border-radius:10px;BOX-SHADOW: 0 0 10px black;margin:1%;"><font style = "font-size:30px;padding-top:10px;position:absolute;">Updates</font>
<iframe src="updates.php" title="updates" height="80%" width="90%" style = "position:absolute;top:15%;left:5%;border-radius:10px;"></iframe>
</div>

<div class="container-xs col-sm-3" style="background-color:rgb(255,255,255,0.5);width:15dvw;z-index:1;height:50vh;max-width:92em;border-radius:10px;BOX-SHADOW: 0 0 10px black;margin:1%;"><font style = "font-size:30px;padding-top:10px;position:absolute;">Updates</font>


<br><br><br>
<
<hr>
<font style = "font-size:min(3vh,30px);padding-top:0%;">Marksheets</font>
<br>
<select name = "cars" style = "width:19vw;border-radius:50px;padding-top:0%;position:absolute;" id = "selector">
<option value="Periodic">Periodic</option>
<option value="Half Yearly">Half Yearly</option>
<option value="Finals">Finals</option>
</select>
<img src = "assets/navigation/chat.png" style = "width:6rem;position:absolute;left:80%;top:80%;" id = "chatbt">
</div>


<div class="container col-sm-5"style="z-index:10;background-color:rgb(255,255,255,0.5);height:50vh;;border-radius:10px;BOX-SHADOW: 0 0 10px black;margin:1%;"><font style = "font-size:30px;padding-top:10px;position:absolute;">Student Progress</font>


<script>
   
   
var xValues = ["Music/Dance", "Sports", "Communication", "Discipline", "Art&Craft","Tidiness"];
var yValues = [<?php echo $dataa3["music_dance"]; ?>,<?php echo $dataa3["sports"]; ?>,<?php echo $dataa3["communication"]; ?>,<?php echo $dataa3["discipline"]; ?>,<?php echo $dataa3["Art_craft"]; ?>,<?php echo $dataa3["tidiness"]; ?>];
var barColors = ["rgb(112, 210, 230)", "rgb(183, 142, 92)","rgb(242, 158, 142)","rgb(29, 159, 157)","rgb(221, 114, 100)","rgb(120, 209, 182)"];

new Chart("myChart3", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: ""
    }
  }
});
</script>

</div>
</span> 

</div>
</span>
</span>
<div style = "background:rgb(0,0,0,0.8);width:100%;height:3.4rem;top:96.5%;position:fixed;">
<span class="row justify-content-end" style="right:0%;position:absolute;padding:0.5%;" >
<img src="assets/navigation/logoinsta.png" class="col-md-2 img-responsive" style="width:5rem;">
<img src="assets/navigation/logoface.png" class="col-md-2 img-responsive" style="width:5rem;">
<img src="assets/navigation/gmail.png" class="col-md-2 img-responsive" style="width:5rem;">

</div>
<div style = "width:30rem;background:rgb(255,255,255);position:fixed;height:40rem;top:50%;border-radius:10px;box-shadow:0 0 10px black;visibility:hidden;" id = "chat">
<font style = "font-size:min(3vw,2rem);position:absolute;left:90%; text-decoation:none; ">x</font><br>
<hr>
<form  method = "post" onsubmit = "stopreload()"> 
  <input type="text" placeholder = "   Type here" name = "message" style = "width:85%;top:94.5%;position:absolute;border-radius:10px;background:lightgrey;border:none;" id = "inp">
  <button type = "submit" name = "sendbt" style = "border:none;background:none;top:94.5%;position:absolute;left:86%;"><span class = "glyphicon glyphicon-send" ></span></button>
</form>

</div>
</body>
</html>
<!--form  id = "frmm" method = "post" action = "1.php" style = "width:37rem;height:30%;display:inline -block;background:rgb(0,0,0,0.7);border-radius:10px;"><br><br>
<input type = "password" name = "password" placeholder = "Enter old password" style = "border-bottom:2px solid white;width:100%; height:5vh;border:none;background:none;"> <br> <br><br>
<input type = "password" name = "password" placeholder = "Enter new password" style = "border-bottom:2px solid white;width:100%; height:5vh;background:none;border:none;"><br><br><br>
<button type = "submit" style = "width:50%; border-bottom:1px solid grey;height:5vh;border:none;left:25%;position:absolute;border-radius:100px;background-color:rgb(40, 129, 143);color:white;font-family: 'Quicksand', sans-serif;font-size:2rem;">change password</button>
</form>
--->

<script>
var profile = document.getElementById("profile");
profile.src = "assets/student profiles/dis/<?php echo $profile ?>";
var chat = document.getElementById("chat");
var chatbt = document.getElementById("chatbt");
var inpt = document.getElementById("inp");
var width  = window.screen.availWidth;
chat.style.left = (width/100)*80;
var a = 1;
chatbt.addEventListener("click",()=>{
var b = a%2;
if(b!=0)
{
  chat.style.visibility = "visible";
}
else{
  chat.style.visibility = "hidden";
}
a=a+1;
})
if(width<=768)
{
  chat.style.bottom = "10.5%";
  chat.style.left = "50%";
}

</script>
<?php
if(isset($_POST['sendbt']))
{
$messg = $_POST["message"];



$name = $dataa["name"];
$time = date("H:i");
$date = date("Y-m-d");

$query7= sprintf("insert into {$val}_chat values('$messg','$name','$date','$time')");
$connectt7 = mysqli_query($con,$query7);


}

?>
