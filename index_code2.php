   
<?php 
   
   if ($_SERVER["REQUEST_METHOD"]=="POST") 
   { $ussr= $_POST["usr"];
    $pass= $_POST["pass"];
    $school= $_POST["schid"];
   }
   $con2 = mysqli_connect("localhost","root","","schools");
   if($con2)
   {
   
   }
   $query3 = sprintf("select * from credentials where username= '$school'");
   $connectt3 = mysqli_query($con2,$query3);
   
  $dataa3 = mysqli_fetch_assoc($connectt3);
  
  $con = mysqli_connect("localhost","root","","$school");

if($con)
{

}


$query = sprintf("select * from admin_credentials where username= '%s'",$_POST["usr"]);
$query1 = sprintf("select * from teachers where username= '%s'",$_POST["usr"]);
$connectt = mysqli_query($con,$query);
$connectt1 = mysqli_query($con,$query1);
$dataa = mysqli_fetch_assoc($connectt);
$dataa1 = mysqli_fetch_assoc($connectt1);
$num = mysqli_num_rows($connectt);
$num1 = mysqli_num_rows($connectt1);
$cls = $dataa['class'];
$section = $dataa['section'];
if($ussr == $dataa['username'] and $pass == $dataa['password'] and $dataa['class']!="non" and $dataa3["status"]=="Active")
{
header("location:admindashboard.php");
}
if($ussr == $dataa['username'] and $pass == $dataa['password'] and $dataa['class']=="non" and $dataa3["status"]=="Active")
{
header("location:principaldashboard.php");
}
else
echo "<script>alert('Invalid username or password or account is not valid!')</script>"; 



   ?>
<?php
session_start();  
$_SESSION['school'] = $school;
$_SESSION['class'] = $cls;
$_SESSION['user'] = $_POST["usr"]; 
$_SESSION['section'] = $section;
?>


   


