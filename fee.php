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

$connectt = mysqli_query($con,$query);
$connectt1 = mysqli_query($con,$query1);

$dataa = mysqli_fetch_assoc($connectt);
$dataa1 = mysqli_fetch_assoc($connectt1);

$num = mysqli_num_rows($connectt);


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
  <title>Document</title>
 
<style>
 
    @import url('https://fonts.googleapis.com/css2?family=Freehand&family=Quicksand:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap');
    body{
      background-image:url(assets/bg/feebg.jpg);
      background-size:100% 100%;
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
table,td,th{
  border-bottom:1px solid black;
 font-family: 'Quicksand', sans-serif;
 
padding:2%;
}
th{
 font-size:min(2vw,2.7rem);
 width:45%;
}
</style>
    </head>
<body>
<div  style = "position:fixed;background:rgb(0,0,0,0.7);width:100%;height:6vh;">
  
      <a  href="#" style = "color:white;left:1%;position:absolute;font-size:2rem;padding-top:0.5%;text-decoration:none;font-weight:normal;font-family: 'Quicksand', sans-serif;"><img src="assets/logo/<?php echo $logo ?>" alt="" style = "background:none;max-width:20rem;width:4rem;"></a>
 
</div>

<div style = "background:rgb(56,142,142,0.7);top:6%;width:100%;height:9.5rem;left:%;z-index:-1;position:fixed;z-index:1;">

<img src=  "assets/student profiles/dis/<?php echo $profile ?>" class="img-responsive" id = "profile"></img>

<span style = "font-family: 'Quicksand', sans-serif;font-size:min(3vw,35px);color:black;position:absolute;top:0;left:68%;padding-left:5%;padding-right:3%;padding-top:1%;padding-bottom:1.2%;"><?php echo $dataa['name'];?></span>


<span  style = "font-family: 'Quicksand', sans-serif;font-size:min(3vw,40px);color:black;position:absolute;top:0;left:85%;padding-left:5%;padding-right:3.2%;padding-top:0.9%;padding-bottom:0.9%;"><?php echo $dataa['class'];?></span>

</div>



<font style = "font-family:'Quicksand', sans-serif;font-size:5rem;padding:3.5%;position:relative;top:15rem;color:white;">&nbsp Fee Structure</font>
<br><br><br><br><br><br><br><br><br>
<div style= "background:rgb(255, 245, 238,0.3);width:90%;height:70vh;border-radius:10px;box-shadow: 1px 1px  5px lightgrey;position:absolute;left:5%;">
<br>

<br><br>



<div style = "width:60vw;height:auto;background:rgb(255,255,255,0.5);border-radius:20px;left:15%;position:absolute;top:20%;box-shadow: 1px 1px  5px black;">
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font style = "font-family:'Quicksand', sans-serif;font-size:min(4vw,3rem);padding:3.%;float:left:"> <b>Fee Period: April May June</font>
<center>

<table>
  <tr>
    <th>
    <b>  Fee Head
    </th>
    <th>
    <b>  Amount
    </th>
    
    <th>
    <b> Status
    </th>

  </tr>
  <tr>
    <td>
    <b>  Tuition Fee
    </td>
    <td>
    <b> 12,294.00
    </td>
    <td>

    </td>
  </tr>

  <tr>
    <td>
    <b>  Other Charges
    </td>
    <td>
    <b> 4,845.00
    </td>
    <td></td>
  </tr>
  <tr>
    <td>
    <b> Grand total
    </td>
    <td>
    <b> 17,139.00
    </td>
    <td>
    <b>Paid
    </td>
  </tr>
</table>
<br><br>
</div>
</center>
<section style = "display:flex;position:absolute;top:90%;left:37vw;color:white;">
<span style = "font-size:2rem;padding:15px; border-radius:10px;transition:2s ease; " id = "nav1">1</span> 
<span style = "font-size:2rem;padding:15px; border-radius:10px;transition:2s ease;" id = "nav2">2</span>
<span style = "font-size:2rem;padding:15px;border-radius:10px;transition:2s ease;" id = "nav3">3</span>
<span style = "font-size:2rem;padding:15px;border-radius:10px;transition:2s ease;" id = "nav4">4</span>
</section>
</div>














</div>

<div style = "background:rgb(0,0,0,0.8);width:100%;height:3.4rem;top:96.5%;position:fixed;">
<span class="row justify-content-end" style="right:0%;position:absolute;padding:0.5%;" >
<img src="assets/navigation/logoinsta.png" class="col-md-2 img-responsive" style="width:5rem;">
<img src="assets/navigation/logoface.png" class="col-md-2 img-responsive" style="width:5rem;">
<img src="assets/navigation/gmail.png" class="col-md-2 img-responsive" style="width:5rem;">
</span>
</div>
</body>
</html>

