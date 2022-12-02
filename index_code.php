  
<?php 
   
   if ($_SERVER["REQUEST_METHOD"]=="POST") 
   { $ussr= $_POST["usr"];
    $pass= $_POST["pass"];
    $school= $_POST["schid"];
   }
  $con = mysqli_connect("localhost","root","","$school");
if($con)
{
echo "connected";
}


$query = sprintf("select * from credentials where username= '%s' and password  = '%s'",$_POST["usr"],$_POST["pass"]);
$query1 = sprintf("select * from students where username= '%s'",$_POST["usr"]);
$connectt = mysqli_query($con,$query);
$connectt1 = mysqli_query($con,$query1);
$dataa = mysqli_fetch_assoc($connectt);
$dataa1 = mysqli_fetch_assoc($connectt1);
$num = mysqli_num_rows($connectt);
$num1 = mysqli_num_rows($connectt1);
$cls = $dataa1['class'];
if($ussr = $dataa['username'] and $pass = $dataa['password'])

header("location:dashboard.php");
else

echo "<script>alert('Invalid username or password!')</script>"; 



   ?>
<?php
session_start();  
$_SESSION['school'] = $school;
$_SESSION['class'] = $cls;
$_SESSION['user'] = $_POST["usr"]; 
?>


   