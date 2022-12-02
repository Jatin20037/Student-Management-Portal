<?php
   session_start();  
   $val = $_SESSION['user']; 
   $cl = $_SESSION['class'] ;
   $school = $_SESSION['school'] ;
   $section = $_SESSION['section'] ;
   error_reporting(0);
   ?>
<?php
$con = mysqli_connect("localhost","root","","$school");
if($con)
{

}
$dt = date('F');

$query = sprintf("select * from teachers where username= '$val'");
$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);



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
  <title>Document</title>
  <style>
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
  <!-----------------------------------------------sidebar start--------------------------------------->
  <span class = "glyphicon glyphicon-menu-hamburger" style = "color:white;position:fixed;top:12%;font-size:min(5vw,3rem);transition:2s ease;left:5%;visibility:hidden;z-index:5;" id = "burger"></span>
  <div style = "width:13%;height:100%;position:fixed;background:#292f45;z-index:2;transition:2s ease;" id = "sidebar">
  
<span>
<span style = "font-size:min(1.2vw,1.5rem);color:white;font-family:'Poppins', sans-serif;background:#161d31;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-right:30%;padding-top:5%;padding-bottom:5%;top:5%;">Dashboard</span>
<span  style = "font-size:min(1.2vw,1.5rem);color:lightgrey;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:15%;">Apps & Pages</span>
<span  style = "font-size:min(1.2vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:20%;">&nbsp&nbsp&nbsp&nbsp<a href = "email.php" style = "color:white;text-decoration:none;">Email</a></span>


<span  style = "font-size:min(1.2vw,1.5rem);font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:25%;">&nbsp&nbsp&nbsp&nbsp<a href = "library.php" style = "color:white;text-decoration:none;">Library</a></span>
<span  style = "font-size:min(1.2vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:30%;">&nbsp&nbsp&nbsp&nbsp<a href = "planner.php" style = "color:white;text-decoration:none;">Planner</a></span>
<form method = "get">
<button type="submit" name = "attendence"   style = "background:none;font-size:min(1.2vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;position:absolute;border-radius:7px;margin:7%;padding-left:10%;padding-top:5%;padding-bottom:5%;top:35%;cursor:pointer" id = "attendencebt">&nbsp&nbsp&nbsp&nbspAttendence</span>
</form>
  </span>
  </div>

    <!-----------------------------------------------sidebar end--------------------------------------->
<div style = "width:86%;position:absolute;left:13%;" id = "maincontainerdiv">
<br>
<div style = "width:98%;position:relative;left:1%;top:2%;background:#292f45;border-radius:5px;height:6.3%;font-family:'Poppins', sans-serif;padding:20px;" id = "container1">

<?php
echo "<font style = 'padding-top:1%;font-size:min(3vw,1.5rem);color:white;'>$dataa[name]</font>";?>
<img class="img-responsive" id = "profile"></div>

<span class = "row" style = "width:98%;margin-left:1%;" >  
<span class = "col-md-4" id = "row1col1">
<br>
<div style = "background:#292f45;border-radius:7px;font-size:min(6vw,4rem);color:silver;font-family:'Poppins', sans-serif;border:1px solid #7367f0;height:100%;" id = "container2"><?php 
date_default_timezone_set("Asia/Kolkata");

if(date("H:i:sa")<12)
{
echo "<font style = 'margin:20px;'> Good Morning!</font>";
echo"<img src='assets/icons/morning.png' class='img-fluid' alt='' style = 'width:100px;float:right;margin-top:5%;margin-right:5%;'>";
echo"<br>";
echo "<font style = 'font-size:min(3vw,2rem);margin:20px;'>$dataa[name]</font>";


}
if(date("H:i:sa")>=12 and date("H:i:sa")<16)
{
echo "<font style = 'font-size:min(6vw,3rem);margin:20px;'>Good Afternoon!</font>";
echo"<img src='assets/icons/noon.png' class='img-fluid' alt='' style = 'width:100px;float:right;margin-top:5%;margin-right:5%;'>";
echo"<br>";
echo "<font style = 'font-size:min(3vw,2rem);margin:20px;'>$dataa[name]</font>";



}
elseif(date("H:i:sa")>=16 )
{

echo "<font style = 'margin:20px;'>Good Evening!</font>"; 
echo"<img src='assets/icons/evening.png' class='img-fluid' alt='' style = 'width:100px;float:right;margin-top:5%;margin-right:5%;'>";
echo"<br>";
echo "<font style = 'margin:20px;font-size:min(3vw,2rem);'>$dataa[name]</font>";

 
}
?>

<div style = "margin:20px;">
<?php 
$tcount=date("d");
if(date("H:i:sa")>="00:00:00")
{$conew = mysqli_connect("localhost","root","","library");
  $query1 = sprintf("select * from thoughts where s_no = $tcount");
  $connectt1 = mysqli_query($conew,$query1);
  $dataa1 = mysqli_fetch_assoc($connectt1);

echo "<font style = 'font-size:min(2vw,1.5rem);color:white;'> $dataa1[thought] </font>";

 

}
?>
</div>

</div>

 
  </span>
  <span class = "col-md-8" id = "row1col2">
    <br>
<div style = "background:#292f45;border-radius:7px;font-size:min(2vw,1.5rem);color:silver;font-family:'Poppins', sans-serif;height:100%;" id = "container3">
<br>
<span class = "row" style = "padding:20px;background:#343d55;width:98%;margin-left:1%;">
  <span class = "col-md-6">

Name: 
<?php echo $dataa["name"];?>

</span>
<span class = "col-md-6">

Contact:  
<?php echo $dataa["contact"];?>
    
</span>
</span>
<span class = "row" style = "padding:20px;width:98%;margin-left:1%;">
  <span class = "col-md-6">
    
DOB: 
<?php echo $dataa["dob"];?>
</span>
<span class = "col-md-6">
Mail id:
<?php echo $dataa["mail"];?>
    
</span>    
</span>
 
<span class = "row" style = "padding:20px;background:#343d55;width:98%;margin-left:1%;">
  <span class = "col-md-6">
         
   Address:
<?php echo $dataa["address"];?>
</span>
<span class = "col-md-6">
Designation:
<?php echo $dataa["designation"];?>
      

</span>    
</span>  


</div>
</span>
<p></p>
<p></p>
</span>
<!-----------------------------------------row2 start------------------------------------------>
<span class = "row" style = "width:98%;margin-left:1%;">
<span class="col-md-6" style = "">
  <br>
<div style = "overflow:auto;background:#292f45;border-radius:7px;font-size:min(2vw,3rem);color:silver;font-family:'Poppins', sans-serif;height:300px;" id = "container4">
<br>
<form method = "get">
<font style = "margin:5%;">
Leave Applications</font>
<select style = "width:10%;border-radius:30px;background:none;font-size:min(1.5vw,2rem);float:right;margin-right:5%;" name = "leaveselector">
<option> Class</option>
<option> I</option>
<option> II </option>
<option> III </option>
<option> IV </option>
<option> V</option>
<option> VI </option>
<option> VII </option>
<option> VIII </option>
<option> IX </option>
<option> X </option>
<option> XI </option>
<option> XII </option>

</select>
<button style = "background:none;border:none;font-size:min(1.5vw,2rem);float:right;" name = "leaveclassbt"><span class = "glyphicon glyphicon-search"></span> </button>
</form>
<br>
</div>
</span>
<span class="col-md-6">
  <br>
<div style = "overflow:auto;background:#292f45;border-radius:7px;font-size:min(2vw,3rem);color:silver;font-family:'Poppins', sans-serif;" id = "container5">
<br>

<form method = "get">
<font style = "margin:5%;">
Fee Status</font>
<select style = "width:10%;border-radius:30px;background:none;font-size:min(1.5vw,2rem);float:right;margin-right:5%;" name = "feeselector">
<option> Class</option>
<option> I</option>
<option> II </option>
<option> III </option>
<option> IV </option>
<option> V</option>
<option> VI </option>
<option> VII </option>
<option> VIII </option>
<option> IX </option>
<option> X </option>
<option> XI </option>
<option> XII </option>

</select>
<button style = "background:none;border:none;font-size:min(1.5vw,2rem);float:right;" name = "feeclassbt"><span class = "glyphicon glyphicon-search"></span> </button>
</form>
<br>
<table style = "width:100%;" id = "feetable">
<tr style = "background:#343d55;">
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>User</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Jan-Mar</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Apr-Jun</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Jul-Sept</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Oct-Dec</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Action</center></th>

</tr>

</table>
</div>
</span>
</span>
<!-----------------------------------------row2 end------------------------------------------>
<!-----------------------------------------row3 start------------------------------------------>


<span class = "row" style = "width:98%;margin-left:1%;">
<span class="col-md-4" id = "row3col1">
  <br>
<div style = "background:#292f45;border-radius:7px;font-size:min(2vw,3rem);color:silver;font-family:'Poppins', sans-serif;height:100%;" id = "container6">
<br>
<font style = "margin:5%;">
Push Updates</font>
<br>
<br>
<form style = "margin-left:5%;" enctype="multipart/form-data" method = "post">
<input type = "text" name = "title" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:50%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Enter Title in 50 words"><br><br>
<input type = "file" name = "choose"style = "font-size:min(1vw,2rem);color:white;border-radius:5px;border:none;"><br>
<button type = "submit" name = "push" style = "font-size:min(1vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;border:none;">Push Now</button>

</form>
</div>
</span>
<span class="col-md-8" id = "row3col2">
  <br>
<div style = "background:#292f45;border-radius:7px;font-size:min(2vw,3rem);color:silver;font-family:'Poppins', sans-serif;height:100%;" id = "container7">
<br>
<form method = "get">
<font style = "margin:5%;">
Students</font>
<select style = "width:10%;border-radius:30px;background:none;font-size:min(1.5vw,2rem);float:right;margin-right:5%;" name = "classselector">
<option> Class</option>
<option> I</option>
<option> II </option>
<option> III </option>
<option> IV </option>
<option> V</option>
<option> VI </option>
<option> VII </option>
<option> VIII </option>
<option> IX </option>
<option> X </option>
<option> XI </option>
<option> XII </option>

</select>
<button style = "background:none;border:none;font-size:min(1.5vw,2rem);float:right;" name = "classbt"><span class = "glyphicon glyphicon-search"></span> </button>
</form>
<br>
<table style = "width:100%;" id = "tablestudents">
<tr style = "background:#343d55;">
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Name</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>DOB</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Contact</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Mail Id</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Address</center></th>
<th style = "font-size:min(2vw,1.5rem);padding-top:10px;padding-bottom:10px;"><center>Action</center></th>

</tr>

</table>
</div>
</span>
</span>
<!-----------------------------------------row3 end------------------------------------------>

  </div>


  <div style = "overflow:auto;transition:2s ease;background:rgb(41,47,69);transition:2s ease;width:60%;position:fixed;color:silver;font-family: 'Quicksand', sans-serif;height:100%;z-index:2;right:-100%;box-shadow:0 0 6px 5px black;" id = "admitcont">
<br>

<font style = "float:right;padding-right:5%;text-decoration:none;cursor:default;font-size:min(3vw,2rem);" id = "close">x</font><br><br><br><br>
<form style = "margin-left:5%;width:90%;" method ="post" enctype="multipart/form-data">
  <span class = "row">
    <span class = "col-md-6">
<input type = "text" name = "username" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "Create Username"><br><br>
<input type = "text" name = "normalname" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Enter Name"><br><br>
<select style = "width:20%;background:none;border:1px solid silver;border-radius:30px;color:silver;font-size:min(2vw,2rem);margin-left:5%;" name = "choiceclass">
<option>I</option>
<option>II</option>
<option>III</option>
<option>IV</option>
<option>V</option>
<option>VI</option>
<option>VII</option>
<option>VIII</option>
<option>IX</option>
<option>X</option>
<option>XI</option>
<option>XII</option>
 
</select>
<select style = "width:20%;background:none;border:1px solid silver;border-radius:30px;color:silver;font-size:min(2vw,2rem);margin-left:5%;" name = "choicesection">
<option>A</option>
<option>B</option>
<option>C</option>
<option>D</option>
<option>E</option>
<option>F</option>
<option>G</option>
<option>H</option>

</select>


<br><br>
<input type = "file" name = "choose" style = "border:none;border-radius:5px;color:silver;font-size:min(2vw,1.5rem);padding:10px;"><br><br>
<input type = "date" name = "dob" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " DOB"><br><br>
<input type = "text" name = "admnno" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Admission no"><br><br>
<input type = "text" name = "house" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "House"><br><br>
<input type = "text" name = "gender" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Gender"><br><br>
<input type = "email" name = "stdmail" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Student Mail id"><br><br>
<input type = "text" name = "teacher" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Class Teacher"><br><br>
</span>
<span class = "col-md-6">

<input type = "text" name = "bloodgrp" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Blood Group"><br><br>
<input type = "text" name = "fname" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Father's Name"><br><br>
<input type = "text" name = "mname" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Mother's Name"><br><br>
<input type = "contact" name = "fcontact" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "Father's Contact"><br><br><p></p>
<input type = "contact" name = "mcontact" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Mother's Contact"><br><br>
<input type = "email" name = "pmail" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Parent Mail id"><br><br>
<input type = "text" name = "address" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Address"><br><br>
<input type = "text" name = "height" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Height"><br><br>
<input type = "text" name = "weight" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "Weight"><br><br>
<button type = "submit" name = "admit" style = "font-size:min(2.5vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;border:none;">Admit Now</button>
</span>
</span>
</form>
</div>
<div style = "overflow:auto;transition:2s ease;background:rgb(41,47,69);transition:2s ease;width:30%;position:fixed;color:silver;font-family: 'Quicksand', sans-serif;height:100%;z-index:2;right:-100%;box-shadow:0 0 6px 5px black;" id = "attendencecont">
<br>
<font style = "margin:5%;font-size:min(2vw,3rem);">
Attendence</font>
<font style = "float:right;padding-right:5%;text-decoration:none;cursor:default;font-size:min(3vw,2rem);" id = "close2">x</font>
<br><br>
<table style = "width:90%;margin-left:5%;" id = "attendencetable">
<tr style = "background:#343d55;">
<th style = "width:15%;padding-top:10px;padding-bottom:10px;"><center>#</center></th>
<th style = "padding-top:10px;padding-bottom:10px;"><center>Name</center></th>
<th style = "width:15%;padding-top:10px;padding-bottom:10px;"><center>Present</center></th>
<th style = "width:15%;padding-top:10px;padding-bottom:10px;"><center>Absent</center></th>
</tr>
</table>
</div>  


<div style = "overflow:auto;transition:2s ease;background:rgb(41,47,69);transition:2s ease;width:30%;position:fixed;color:silver;font-family: 'Quicksand', sans-serif;height:100%;z-index:2;right:-100%;box-shadow:0 0 6px 5px black;" id = "applicationcont">
<br>
<font style = "margin:5%;font-size:min(2vw,3rem);">
Applications</font>
<font style = "float:right;padding-right:5%;text-decoration:none;cursor:default;font-size:min(3vw,2rem);" id = "close3">x</font>
<br><br><br>
</div>
<script>
var appcont = document.getElementById("applicationcont");
function applicationcaller()
{var appbtid = this.id;
  appbtid_trim = appbtid .replace("leavebtn", "");

   
document.cookie="application="+appbtid_trim;
}
</script>
<?php
if(isset($_GET["bttn"]))
{
$appnumber=$_COOKIE["application"];
$leaveselectorval=$_COOKIE["leaveclass"];
echo $appnumber;
echo "<script>appcont.style.right=0;
console.log('clicked'); 
var close3 = document.getElementById('close3');
  close3.addEventListener('click',()=>{
    
   applicationcont.style.right = '-100%';
  
    })</script>";
    
    $query9 = sprintf("select * from {$leaveselectorval}_leave_application where sno=$appnumber");
    $connectt9 = mysqli_query($con,$query9);
    $dataa9 = mysqli_fetch_assoc($connectt9);  
    echo "<script>
    var text1 = document.createTextNode('$dataa9[user]');
    var font1 = document.createElement('font');
    font1.style.fontSize='min(2vw,2.5rem)';
    font1.style.marginLeft='5%';
    font1.appendChild(text1);
    appcont.appendChild(font1);
    var br1 = document.createElement('br');
    var br2 = document.createElement('br');
    appcont.appendChild(br1);
    appcont.appendChild(br2);

    var text2 = document.createTextNode('From-');
    var font2 = document.createElement('font');
    font2.style.fontSize='min(2vw,1.5rem)';
    font2.style.marginLeft='5%';
    font2.appendChild(text2);
    appcont.appendChild(font2);

    var text3 = document.createTextNode('$dataa9[from_dt]');
    var font3 = document.createElement('font');
    font3.style.fontSize='min(2vw,1.5rem)';
    font3.style.marginLeft='2%';
    font3.appendChild(text3);
    appcont.appendChild(font3);

    var br3 = document.createElement('br');
    var br4 = document.createElement('br');
    appcont.appendChild(br3);
    appcont.appendChild(br4);

    var text4 = document.createTextNode('To-');
    var font4 = document.createElement('font');
    font4.style.fontSize='min(2vw,1.5rem)';
    font4.style.marginLeft='5%';
    font4.appendChild(text4);
    appcont.appendChild(font4);

    var text5 = document.createTextNode('$dataa9[to_dt]');
    var font5 = document.createElement('font');
    font5.style.fontSize='min(2vw,1.5rem)';
    font5.style.marginLeft='2%';
    font5.appendChild(text5);
    appcont.appendChild(font5);

    var br5= document.createElement('br');
    var br6 = document.createElement('br');
    appcont.appendChild(br5);
    appcont.appendChild(br6);

    var subdiv1 = document.createElement('div');
    subdiv1.style.width = '90%';
    subdiv1.style.marginLeft='5%';
    var text6 = document.createTextNode('$dataa9[subject]');
    var font6 = document.createElement('font');
    font6.style.fontSize='min(2vw,1.5rem)';
    font6.appendChild(text6);
    subdiv1.appendChild(font6);
    appcont.appendChild(subdiv1);

    var br7= document.createElement('br');
    var br8 = document.createElement('br');
    appcont.appendChild(br7);
    appcont.appendChild(br8);
    
    var subdiv2 = document.createElement('div');
    subdiv2.style.width = '90%';
    subdiv2.style.marginLeft='5%';
    var text7 = document.createTextNode('$dataa9[desciption]');
    var font7 = document.createElement('font');
    font7.style.fontSize='min(2vw,1.5rem)';
    font7.appendChild(text7);
    subdiv2.appendChild(font7);
    appcont.appendChild(subdiv2);
    </script>"; 

}
?>
<?php
if(isset($_GET["attendence"]))
{
$dt = strtolower($dt);
$cl = strtolower($cl);
$year = date("Y");
$count = date("t");

 $day = date('d');
 $attendencearray = array();
 for($i=1;$i<$count+1;$i++)
{$attendencearray[0][0] = "Name";
  $attendencearray[0][1] = "Admission No";
$attendencearray[0][$i+1] = "$i-$dt-$year";
}

$query7 = sprintf("select * from {$cl}_{$dt}");
$connectt7 = mysqli_query($con,$query7);
$num7 = mysqli_num_rows($connectt7);
for($i = 1;$i<=$num7;$i++)
{$dataa7 = mysqli_fetch_assoc($connectt7);
  $subarray = array();
  for($z=1;$z<$count+1;$z++)
{$subarray[0] = $dataa7["name"];
  $subarray[1] = $dataa7["admno"];
  $subarray[$z+1]=$dataa7["$dt$z"];
  
}
for($q=0;$q<$count+1;$q++)
{
$attendencearray[$i][$q] = $subarray[$q] ;
}
}

$fp = fopen('data/attendence/'.$school.'/persons.csv', 'w');
foreach ($attendencearray as $fields) {
  fputcsv($fp, $fields);
}

fclose($fp);
echo "<script>
window.location.href.download  = 'data/attendence/'+'$school'+'/persons.csv';

</script>";
 }
?>
<script>
  var cont4 = document.getElementById('container4');
  </script>


 <?php
 
 if(isset($_GET["leaveclassbt"]))
 {$leaveselector = $_GET["leaveselector"];
 $query2 = sprintf("select * from {$leaveselector}_leave_application");
 $connectt2 = mysqli_query($con,$query2);
$num = mysqli_num_rows($connectt2);

 for($i = 1;$i<=$num;$i++)
{
  $dataa2 = mysqli_fetch_assoc($connectt2);
  echo "<script>
  document.cookie='leaveclass='+'$leaveselector';
  var form$i = document.createElement('form');
  form$i.method = 'get';
  var button$i = document.createElement('button');
  button$i.id = 'leavebtn'+$i;
  button$i.name='bttn';
  button$i.onclick=applicationcaller;
  
  button$i.style.width = '100%';
  button$i.style.background='none';
  button$i.style.border='none';
  var div$i = document.createElement('div');
  if($i%2!=0)
  {div$i.style.background = '#343d55';
  }
  div$i.style.padding = '20px';
  var text1$i = document.createTextNode('$dataa2[user]');
  var font1$i =  document.createElement('font');
  font1$i.style.float='left';
  var text2$i = document.createTextNode('$dataa2[subject]');
  var font2$i =  document.createElement('font');
  font2$i.style.float='left';
  font2$i.style.left='0%';
  font1$i.style.fontSize = 'min(2vw,2rem)';
  font2$i.style.fontSize = 'min(2vw,2rem)';
  
  font1$i.appendChild(text1$i)
  button$i.appendChild(font1$i);
  font2$i.appendChild(text2$i)
  var br$i = document.createElement('br');
  button$i.appendChild(br$i);
  button$i.appendChild(font2$i);
  cont4.appendChild(div$i);
  form$i.appendChild(button$i);
  div$i.appendChild(form$i);
  </script>
  ";


}}
if(isset($_GET["feeclassbt"]))
 {$feeselector = $_GET["feeselector"];
$query3 = sprintf("select * from {$feeselector}_fee");
 $connectt3 = mysqli_query($con,$query3);
$num3= mysqli_num_rows($connectt3);

for($i = 1;$i<=$num3;$i++)
{
  $dataa3 = mysqli_fetch_assoc($connectt3);
  
  echo "<script>
  var fee = document.getElementById('feetable');
  console.log(fee);
  var tr$i = document.createElement('tr');
  tr$i.style.width = '100%';
  tr$i.style.borderBottom = '1px solid #343d55';
  var div$i = document.createElement('div');
  div$i.style.padding = '20px';
  var center1$i = document.createElement('center');
  var center2$i = document.createElement('center');
  var center3$i = document.createElement('center');
  var center4$i = document.createElement('center');
  var center5$i = document.createElement('center');
  var center6$i = document.createElement('center');
  var text1$i = document.createTextNode('$dataa3[user]');
  var text2$i = document.createTextNode('$dataa3[janmar]');
  var text3$i = document.createTextNode('$dataa3[aprjun]');
  var text4$i = document.createTextNode('$dataa3[julsept]');
  var text5$i = document.createTextNode('$dataa3[octdec]');
  var text6$i = document.createTextNode('Alert');
  var btn$i = document.createElement('button');
  btn$i.style.borderRadius='7px';
  btn$i.style.border='none';
  btn$i.style.background='#7367f0';
  btn$i.style.color='white';
  btn$i.appendChild(text6$i);
  center1$i.appendChild(text1$i);
  center2$i.appendChild(text2$i);
  center3$i.appendChild(text3$i);
  center4$i.appendChild(text4$i);
  center5$i.appendChild(text5$i);
  center6$i.appendChild(btn$i);
  var td1$i =  document.createElement('td');
  var td2$i =  document.createElement('td');
  var td3$i =  document.createElement('td');
  var td4$i =  document.createElement('td');
  var td5$i =  document.createElement('td');
  var td6$i =  document.createElement('td');
  td1$i.style.fontSize = 'min(2vw,1.5rem)';
  td2$i.style.fontSize = 'min(2vw,1.5rem)';
  td3$i.style.fontSize = 'min(2vw,1.5rem)';
  td4$i.style.fontSize = 'min(2vw,1.5rem)';
  td5$i.style.fontSize = 'min(2vw,1.5rem)';
  td6$i.style.fontSize = 'min(2vw,1.5rem)';
  td1$i.style.paddingBottom = '10px';
  td2$i.style.paddingBottom = '10px';
  td3$i.style.paddingBottom = '10px';
  td4$i.style.paddingBottom = '10px';
  td5$i.style.paddingBottom = '10px';
  td6$i.style.paddingBottom = '10px';
  td1$i.style.paddingTop = '10px';
  td2$i.style.paddingTop = '10px';
  td3$i.style.paddingTop = '10px';
  td4$i.style.paddingTop = '10px';
  td5$i.style.paddingTop = '10px';
  td6$i.style.paddingTop = '10px';
  td1$i.appendChild(center1$i)
  td2$i.appendChild(center2$i)
  td3$i.appendChild(center3$i)
  td4$i.appendChild(center4$i)
  td5$i.appendChild(center5$i)
  td6$i.appendChild(center6$i)
  tr$i.appendChild(td1$i);
  tr$i.appendChild(td2$i);
  tr$i.appendChild(td3$i);
  tr$i.appendChild(td4$i);
  tr$i.appendChild(td5$i);
  tr$i.appendChild(td6$i);
  fee.appendChild(tr$i);
  </script>
  ";


}
 }

$cl = strtoupper($cl);
if(isset($_GET["classbt"]))
{$classselector = $_GET["classselector"];
  
$query4 = sprintf("select * from students where class = '$classselector'");
 $connectt4 = mysqli_query($con,$query4);
$num4 = mysqli_num_rows($connectt4);

for($i = 1;$i<=$num4;$i++)
{
  $dataa4 = mysqli_fetch_assoc($connectt4);
  echo $dataa4["name"];
  echo "<script>
  var stdtbl = document.getElementById('tablestudents');
  console.log(stdtbl)
  var ancor$i = document.createElement('a'); 
  ancor$i.href = 'profile.php?pass=$dataa4[adm_no]';
  var stdtr$i = document.createElement('tr');
  stdtr$i.style.width = '100%';
  stdtr$i.style.borderBottom = '1px solid #343d55';
 
  var stdcenter1$i = document.createElement('center');
  var stdcenter2$i = document.createElement('center');
  var stdcenter3$i = document.createElement('center');
  var stdcenter4$i = document.createElement('center');
  var stdcenter5$i = document.createElement('center');
  var stdcenter6$i = document.createElement('center');
 
  var stdtext1$i = document.createTextNode('$dataa4[name]');
  var stdtext2$i = document.createTextNode('$dataa4[dob]');
  var stdtext3$i = document.createTextNode('$dataa4[f_contact]');
  var stdtext4$i = document.createTextNode('$dataa4[std_mailid]');
  var stdtext5$i = document.createTextNode('$dataa4[address]');
  var stdtext6$i = document.createElement('span');
  stdtext6$i.className = 'glyphicon glyphicon-eye-open';
  stdcenter1$i.appendChild(stdtext1$i);
  stdcenter2$i.appendChild(stdtext2$i);
  stdcenter3$i.appendChild(stdtext3$i);
  stdcenter4$i.appendChild(stdtext4$i);
  stdcenter5$i.appendChild(stdtext5$i);
  stdcenter6$i.appendChild(stdtext6$i);
 
  var stdtd1$i =  document.createElement('td');
  var stdtd2$i =  document.createElement('td');
  var stdtd3$i =  document.createElement('td');
  var stdtd4$i =  document.createElement('td');
  var stdtd5$i =  document.createElement('td');
  var stdtd6$i =  document.createElement('td');
 
  stdtd1$i.style.fontSize = 'min(2vw,1.5rem)';
  stdtd2$i.style.fontSize = 'min(2vw,1.5rem)';
  stdtd3$i.style.fontSize = 'min(2vw,1.5rem)';
  stdtd4$i.style.fontSize = 'min(2vw,1.5rem)';
  stdtd5$i.style.fontSize = 'min(2vw,1.5rem)';
  ancor$i.style.fontSize = 'min(2vw,1.5rem)';
  ancor$i.style.color = 'silver';
  stdtd5$i.style.width = '35%';
  stdtd1$i.style.paddingBottom = '10px';
  stdtd2$i.style.paddingBottom = '10px';
  stdtd3$i.style.paddingBottom = '10px';
  stdtd4$i.style.paddingBottom = '10px';
  stdtd5$i.style.paddingBottom = '10px';
  ancor$i.style.paddingBottom = '10px';
 
  stdtd1$i.style.paddingTop = '10px';
  stdtd2$i.style.paddingTop = '10px';
  stdtd3$i.style.paddingTop = '10px';
  stdtd4$i.style.paddingTop = '10px';
  stdtd5$i.style.paddingTop = '10px';
  ancor$i.style.paddingTop = '10px';
 
  stdtd1$i.appendChild(stdcenter1$i)
  stdtd2$i.appendChild(stdcenter2$i)
  stdtd3$i.appendChild(stdcenter3$i)
  stdtd4$i.appendChild(stdcenter4$i)
  stdtd5$i.appendChild(stdcenter5$i)
  ancor$i.appendChild(stdcenter6$i)
 
  stdtr$i.appendChild(stdtd1$i);
  stdtr$i.appendChild(stdtd2$i);
  stdtr$i.appendChild(stdtd3$i);
  stdtr$i.appendChild(stdtd4$i);
  stdtr$i.appendChild(stdtd5$i);
  stdtr$i.appendChild(ancor$i);
  stdtbl.appendChild(stdtr$i);
  
  </script>
  ";


}}
 ?>
 <script>
var cont5 = document.getElementById('container5');
cont5.style.height = cont4.offsetHeight+"px";


  </script>
<?php
$query5 = sprintf("select * from updates");
$connectt5 = mysqli_query($con,$query5);
$num5 = mysqli_num_rows($connectt5);


if(isset($_POST["push"]))
{
$updatetitle = $_POST["title"];
$content = $_FILES['choose']['name'];
$contentype = $_FILES['choose']['type'];
$contentsize = $_FILES['choose']['size'];
$contentmp = $_FILES['choose']['tmp_name'];
$store = 'data/update/'.$school.'attachment/'.$content;
move_uploaded_file($contentmp,$store);

$updatedate = date("d-m-Y");
$queryinsert = sprintf("insert into updates values($num5+1,'$updatedate','$updatetitle','$content')");
 
 $connecttinsert = mysqli_query($con,$queryinsert);
}


?>
<script>
var maincontainerdiv = document.getElementById("maincontainerdiv");
var sidebar = document.getElementById("sidebar");
var burger = document.getElementById("burger");
var row1col1 = document.getElementById("row1col1");
var row3col1 = document.getElementById("row1col1");

width=window.screen.availWidth;
if(width<=800)
{sidebar.style.left='-100%';
maincontainerdiv.style.left=0;
maincontainerdiv.style.width="100%";
burger.style.visibility="visible";
sidebar.style.width="50%";
container2.style.height=row1col1.offsetHeight-20+"px";
row1col1.style.height = row1col1.offsetHeight+"px"

container6.style.height=row3col1.offsetHeight-80+"px";
row3col1.style.height = row3col1.offsetHeight+"px"
}
var a = 0;
burger.addEventListener("click",()=>{
  if(a%2==0)
  {
  sidebar.style.left=0;
  burger.style.left=sidebar.offsetWidth+40+"px";
  }
else{
  sidebar.style.left="-100%";
  burger.style.left="5%";
}
a++;
})


</script>
</body>
</html>