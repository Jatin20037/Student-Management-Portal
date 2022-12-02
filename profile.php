<?php
 session_start();  
 $val = $_SESSION['user']; 
 $cl = $_SESSION['class'] ;
 $school = $_SESSION['school'] ;
 $section = $_SESSION['section'] ;
 ?>
<?php
$con = mysqli_connect("localhost","root","","$school");
if($con)
{

}
$dt = date('F');
$pass = $_GET["pass"];
$query = sprintf("select * from students where adm_no= '$pass'");
$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);
$name = $dataa["username"];

$query1 = sprintf("select * from marks where username = '$dataa[username]'");
$connectt1 = mysqli_query($con,$query1);
$dataa1 = mysqli_fetch_assoc($connectt1);


?>

<html>
<head>
<title>
    Portfolio    EduRecruit
</title>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300&display=swap');
*{
    margin:0;
}


.home:hover{
color:skyblue;

}
.about:hover{
    color:skyblue;
    
    }
    .resume:hover{
        color:skyblue;
        
        }
        .services:hover{
            color:skyblue;
            
            }
            .contact:hover{
                color:skyblue;
                
                }

                ::-webkit-scrollbar {
                    width: 0px;
                  
                  }           
</style>

</head>
<body>
  
    <div style = "position:fixed;width:100%;height:7.8rem;background:#101523;z-index:2;box-shadow:0 0 20px 1px black;">

    </div>
    <div style  = "background:rgb( 0,0,0,0.5);position:fixed;width:100%;height:100%;">
<div style = "background:#101523;height:92%;position:fixed;top:8%;transition:2s ease;" id = "navigation">
<img src = "assets/profile-img.jpg" style = "border-radius:50%; border:10px solid #202020;width:12rem;position:relative;left:27%;top:3%;"><br>
<span style = "font-family:'Poppins', sans-serif; color:white;position:relative;top:5%;font-size:min(5vw,3rem);padding-left:30px;">
<?php echo $dataa["name"]; ?>
</span>
<section style = "font-family:'Poppins', sans-serif; color:white;position:relative;top:5%;font-size:min(3vw,1.7rem);padding-left:30px;padding-top:30px;">
    <br><br>
<a href = "#" style = "text-decoration:none;color:white"><span class = "glyphicon glyphicon-home" class = "home"></span> <span style = "font-family:'Poppins', sans-serif;"class = "home">&nbsp&nbsp&nbspHome</span></a><br><br><br>

<span class = "glyphicon glyphicon-tasks"></span> <span style = "font-family:'Poppins', sans-serif; cursor:pointer;" class = "services" id = "updateskillsbt">&nbsp&nbsp&nbspUpdate skills</span><br><br><br>
<form method="post">
<button type = "submit" name = "removebt" style = "border:none;background:none;"><span class = "glyphicon glyphicon-minus-sign" ></span> <span style = "font-family:'Poppins', sans-serif; "class = "resume">&nbsp&nbsp&nbspRemove</span></button><br><br><br>
                </form>
</section>


</div>
<span class = "glyphicon glyphicon-menu-hamburger" style = "color:white;position:fixed;top:12%;font-size:min(5vw,3rem);transition:2s ease;left:5%;visibility:hidden;" id = "burger"></span>
</div>
<div id = "content">
    <br><br><br><br><br>
    <span class = "row" style = "width:80%;left:10%;position:relative;">
  <span class = "col-md-12">      
<font style = "color:white;font-family:'Poppins', sans-serif;font-size:min(8vw,5rem);position:relative;">About</font>
<hr style = "position:relative;width:3%;height:0.9%;color:#173b6c;">


</span></span>
<br><br>
<!-------------------------->
<span class = "row" style = "width:80%;left:10%;position:relative;">
  <span class = "col-md-4">      
  <img src = "assets/profile-img.jpg" style = "width:100%;">
  </span>
  <span class = "col-md-8"> 
  <span style = "color:white;font-family:'Poppins', sans-serif;font-size:min(3vw,4rem);">Student Class <?php echo $dataa["class"]; ?> <?php echo $dataa["section"]; ?></span><br>   

  <br><br><span class = "row">
<span class = "col-md-6">
    <font style = "color:white;font-family:'Poppins', sans-serif;font-size:min(3vw,1.7rem);">
        <b>>  DOB :  &nbsp&nbsp&nbsp</b><?php echo $dataa["dob"]; ?><br><br>
        <b>>  Admission No :  &nbsp&nbsp&nbsp</b><?php echo $dataa["adm_no"]; ?><br><br>
        <b>>  Phone :  &nbsp&nbsp&nbsp</b><?php echo $dataa["f_contact"]; ?><br><br>
        <b>>  Email Id :  &nbsp&nbsp&nbsp</b><?php echo $dataa["std_mailid"]; ?>
</font>

</span>
<span class = "col-md-6">
    <font style = "color:white;font-family:'Poppins', sans-serif;font-size:min(3vw,1.7rem);">
        <b>>  Father's Name :  &nbsp&nbsp&nbsp</b><?php echo $dataa["father_name"]; ?><br><br>
        <b>>  Mother's Name :  &nbsp&nbsp&nbsp</b><?php echo $dataa["mother_name"]; ?><br><br>
        <b>>  Class Teacher :  &nbsp&nbsp&nbsp</b><?php echo $dataa["class_teacher"]; ?><br><br>
        <b>>  Address :  &nbsp&nbsp&nbsp</b><?php echo $dataa["address"]; ?>
</font>
</span>

<font style = "color:white;font-family:'Poppins', sans-serif;font-size:min(3vw,1.5rem);"><br>Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.</font>
  </span>
</span></span></span>
<br><br><br>
<!---------------------------------new row-------->
<div style = "background:#292f45;color:white;" id = "skillcontent">
    <br><br>
    <span class = "row" style = "width:80%;left:10%;position:relative;">   
    <span class = "col-md-12">      
        <font style = "color:white;font-family:'Poppins', sans-serif;font-size:min(8vw,5rem);position:relative;">Skills</font>
        <hr style = "position:relative;width:3%;height:0.9%;color:#173b6c;">
        <br><br>
        <span style = "color:white;font-family:'Poppins', sans-serif;font-size:min(3vw,2rem);">
        <?php echo $dataa["name"]; ?> has gained skills in different segments which includes Music/Dance, Sports, Communication, Discipline, Art&Craft and Tidiness.
    </span>
      <br><br></span>
        <span class = "row">   
    <span class = "col-md-6">
<!---------1st progress bar-->
Music/Dance<p style = "float:right" id = "p1"></p>
        <div style = "width:100%;background:lightgrey;height:2rem;position:relative;border-radius:30px;">
    <div id = "progress1" style = "position:relative;height:2rem;border-radius:30px;"><font style = "float:right;margin-right:20px;"><?php echo $dataa1["music_dance"]; ?>%</font></div>
</div><br><br>
<!---------------2nd progress bar-->
Sports<p style = "float:right" id = "p2"></p>
<div style = "width:100%;background:lightgrey;height:2rem;position:relative;border-radius:30px;">
    <div id = "progress2" style = "position:relative;height:2rem;border-radius:30px;"><font style = "float:right;margin-right:20px;"><?php echo $dataa1["sports"]; ?>%</font></div>
</div><br><br>
<!------------3rd progress bar-->
Communication<p style = "float:right" id = "p3"></p>
<div style = "width:100%;background:lightgrey;height:2rem;position:relative;border-radius:30px;">
    <div id = "progress3" style = "position:relative;height:2rem;border-radius:30px;"><font style = "float:right;margin-right:20px;"><?php echo $dataa1["communication"]; ?>%</font></div>
</div><br><br>  
    </span>
<span class = "col-md-6">
<!---------4th progress bar-->
Discipline<p style = "float:right" id = "p4"></p>
        <div style = "width:100%;background:lightgrey;height:2rem;position:relative;border-radius:30px;">
    <div id = "progress4" style = "position:relative;height:2rem;border-radius:30px;"><font style = "float:right;margin-right:20px;"><?php echo $dataa1["discipline"]; ?>%</font></div>
</div><br><br>
<!---------------5th progress bar-->
Art&Craft<p style = "float:right" id = "p5"></p>
<div style = "width:100%;background:lightgrey;height:2rem;position:relative;border-radius:30px;">
    <div id = "progress5" style = "position:relative;height:2rem;border-radius:30px;"><font style = "float:right;margin-right:20px;"><?php echo $dataa1["Art_craft"]; ?>%</font></div>
</div><br><br>
<!------------6th progress bar-->
Tidiness<p style = "float:right" id = "p6"></p>
<div style = "width:100%;background:lightgrey;height:2rem;position:relative;border-radius:30px;">
    <div id = "progress6" style = "position:relative;height:2rem;border-radius:30px;"><font style = "float:right;margin-right:20px;"><?php echo $dataa1["tidiness"]; ?>%</font></div>
</div><br><br>  

</span>
</span>
   </span></span>
    </div>
<!------------------------->

</div>
<script>
    
    var width  = window.screen.availWidth;
    var nav = document.getElementById("navigation");
    var burger = document.getElementById("burger");
    var content_main_div = document.getElementById("content");
    var nav_width_percent = (((width/100)*15)/width)*100;
    content_main_div.style.width = (100-nav_width_percent)+"%";
    content_main_div.style.left = nav_width_percent+"%";
    content_main_div.style.position="absolute";
    content_main_div.style.background = "#161d30";
    content_main_div.style.height="auto";
   
    content_main_div.style.scroll = "smooth";
nav.style.width = nav_width_percent+"%";
burger.style.visibility = "hidden";
if(width<=1000)
{
 nav.style.left = "-50%";   
 content_main_div.style.left = 0;
 content_main_div.style.width = "100%";
 nav.style.width = "50%";
 burger.style.visibility = "visible";
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
//-----------------progressbar----------------------------
var prog1 = document.getElementById("progress1");
var prog2 = document.getElementById("progress2");
var prog3 = document.getElementById("progress3");
var prog4 = document.getElementById("progress4");
var prog5 = document.getElementById("progress5");
var prog6 = document.getElementById("progress6");
var p1 = document.getElementById("p1");
var p2 = document.getElementById("p2");
var p3 = document.getElementById("p3");
var p4 = document.getElementById("p4");
var p5 = document.getElementById("p5");
var p6 = document.getElementById("p6");
prog1.style.width = "<?php echo $dataa1["music_dance"]; ?>%";
prog2.style.width = "<?php echo $dataa1["sports"]; ?>%";
prog3.style.width = "<?php echo $dataa1["communication"]; ?>%";
prog4.style.width = "<?php echo $dataa1["discipline"]; ?>%";
prog5.style.width = "<?php echo $dataa1["Art_craft"]; ?>%";
prog6.style.width = "<?php echo $dataa1["tidiness"]; ?>%";
//color
prog1.style.background = "skyblue";
prog2.style.background= "skyblue";
prog3.style.background= "skyblue";
prog4.style.background = "skyblue";
prog5.style.background = "skyblue";
prog6.style.background = "skyblue";
let progress_div_width1 = prog1.offsetWidth;
let progress_div_width2 = prog1.offsetWidth;
let progress_div_width3 = prog1.offsetWidth;
let progress_div_width4 = prog1.offsetWidth;
let progress_div_width5 = prog1.offsetWidth;
let progress_div_width6 = prog1.offsetWidth;
p5.writeIn  = progress_div_width5;
</script>

<div style = "overflow:auto;transition:2s ease;background:rgb(41,47,69);transition:2s ease;width:60%;position:fixed;color:silver;font-family: 'Quicksand', sans-serif;height:100%;z-index:2;right:-100%;box-shadow:0 0 6px 5px black;" id = "skillcont">
<br>
<font style = "margin:5%;font-size:min(2vw,4rem);">
Update Skills</font>
<font style = "float:right;padding-right:5%;text-decoration:none;cursor:default;font-size:min(3vw,2rem);" id = "close">x</font>
<br>
<br>
<form method = "post">
<span class = "row" style = "margin-left:5%;">
    <span class = "col-md-6">
<input type = "text" name = "music_dance" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = " Music/Dance (%)"><br><br>
<input type = "text" name = "sports" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "Sports (%)"><br><br>
<input type = "text" name = "comm" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "Communication (%)"><br><br>
</span>
<span class = "col-md-6">
<input type = "text" name = "discipline" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "Discipline (%)"><br><br>
<input type = "text" name = "artcraft" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "Art&Craft (%)"><br><br>
<input type = "text" name = "tidiness" style = "border:none;border-radius:5px;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;width:90%;color:silver;font-size:min(2vw,1.5rem);padding:10px;" placeholder = "Tidiness (%)"><br><br>
<button type= "submit" name = "marksupdatebt" style = "font-size:min(1vw,2rem);padding-left:20px;padding-right:20px;background:#7367f0;color:white;border-radius:5px;border:none;">Update</button>
<span>
</span>
</form>
<br><br><br><br><br><br>
</div>




<script>
   
   
   var options = {
          series: [{
          name: 'Extra Activities',
          data: [<?php echo $dataa1["music_dance"]; ?>,<?php echo $dataa1["sports"]; ?>,<?php echo $dataa1["communication"]; ?>,<?php echo $dataa1["discipline"]; ?>,<?php echo $dataa1["Art_craft"]; ?>,<?php echo $dataa1["tidiness"]; ?>]
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

        var chart = new ApexCharts(document.querySelector("#skillcont"), options);
        chart.render();
  
  
var updateskillsbt =document.getElementById("updateskillsbt");
var skillcont =document.getElementById("skillcont");
var close =document.getElementById("close");
updateskillsbt.addEventListener("click",()=>{
skillcont.style.right=0; 
})
close.addEventListener("click",()=>{
skillcont.style.right="-100%"; 
})
</script>


<?php

if(isset($_POST["marksupdatebt"]))
{
$music_dance = $_POST["music_dance"];
$sports = $_POST["sports"];
$comm = $_POST["comm"];
$discipline = $_POST["discipline"];
$artcraft = $_POST["artcraft"];
$tidiness = $_POST["tidiness"];
$queryupdate1 = sprintf("update marks set Art_craft = '$artcraft',music_dance = '$music_dance',sports = '$sports',tidiness = '$tidiness',discipline = '$discipline',communication = '$comm' where username = '$name'");
$connecttupdate1 = mysqli_query($con,$queryupdate1);
}
if(isset($_POST["removebt"]))
{
  echo "
  <script>
  
 
  if (confirm('Are you sure?') == true) {
    document.cookie='removevalue='+1; 
  } else {
    document.cookie='removevalue='+0; 
  }
  </script>
  ";
  $removevalue = $_COOKIE["removevalue"];
if($removevalue==1)
{
$queryremove1 = sprintf("delete from {$cl}_january where name = '$name'");
$connecttremove1 = mysqli_query($con, $queryremove1);
$queryremove2 = sprintf("delete from {$cl}_february where name = '$name'");
$connecttremove2 = mysqli_query($con, $queryremove2);
$queryremove3 = sprintf("delete from {$cl}_march where name = '$name'");
$connecttremove3 = mysqli_query($con, $queryremove3);
$queryremove4 = sprintf("delete from {$cl}_april where name = '$name'");
$connecttremove4 = mysqli_query($con, $queryremove4);
$queryremove5 = sprintf("delete from {$cl}_may where name = '$name'");
$connecttremove5 = mysqli_query($con, $queryremove5);
$queryremove6 = sprintf("delete from {$cl}_june where name = '$name'");
$connecttremove6 = mysqli_query($con, $queryremove6);
$queryremove7 = sprintf("delete from {$cl}_july where name = '$name'");
$connecttremove7 = mysqli_query($con, $queryremove7);
$queryremove8 = sprintf("delete from {$cl}_august where name = '$name'");
$connecttremove8 = mysqli_query($con, $queryremove8);
$queryremove9 = sprintf("delete from {$cl}_september where name = '$name'");
$connecttremove9 = mysqli_query($con, $queryremove9);
$queryremove10 = sprintf("delete from {$cl}_october where name = '$name'");
$connecttremove10 = mysqli_query($con, $queryremove10);
$queryremove11 = sprintf("delete from {$cl}_november where name = '$name'");
$connecttremove11 = mysqli_query($con, $queryremove11);
$queryremove12 = sprintf("delete from {$cl}_december where name = '$name'");
$connecttremove12 = mysqli_query($con, $queryremove12);
$queryremove13 = sprintf("delete from marks where username = '$name'");
$connecttremove13 = mysqli_query($con, $queryremove13);
$queryremove14 = sprintf("delete from students where username = '$name'");
$connecttremove14 = mysqli_query($con, $queryremove14);
$queryremove15 = sprintf("delete from {$cl}_leave_application where username = '$name'");
$connecttremove15 = mysqli_query($con, $queryremove15);
$queryremove16 = sprintf("delete from {$cl}_fee where user = '$name'");
$connecttremove16 = mysqli_query($con, $queryremove16);
$queryremove17 = sprintf("delete from credentials where username = '$name'");
$connecttremove17 = mysqli_query($con, $queryremove17);
$queryremove18 = sprintf("drop table $name");
$connecttremove18 = mysqli_query($con, $queryremove18);
$queryremove19 = sprintf("drop table {$name}_email");
$connecttremove19 = mysqli_query($con, $queryremove19);
$queryremove20 = sprintf("drop table todo_{$name}_personal");
$connecttremove20 = mysqli_query($con, $queryremove20);
$queryremove21 = sprintf("drop table todo_{$name}");
$connecttremove21 = mysqli_query($con, $queryremove21);
$queryremove22 = sprintf("drop table xi_{$name}_fee");
$connecttremove22 = mysqli_query($con, $queryremove22);
echo "<script>

if($val!='principal')
{
window.location.href ='admindashboard.php'  
}
else{
  window.location.href ='principaldashboard.php'  
}
</script>";


}


}

?>














</body>
</html>


























