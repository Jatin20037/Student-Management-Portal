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
$profile = $dataa["profile"];
$num = mysqli_num_rows($connectt);





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
      background-image:url(assets/bg/ateendencebg.jpg);
      background-size:100% 100%;
    } 
    #profile{
width:5.5vw;
border-radius:50%;
padding:15px;


}


</style>
    </head>
<body>
<div  style = "background:rgb(0,0,0,0.7);width:100%;height:6vh;">
  
      <a  href="#" style = "color:white;left:1%;position:absolute;font-size:2rem;padding-top:0.5%;text-decoration:none;font-weight:normal;font-family: 'Quicksand', sans-serif;"><img src="assets/logo/<?php echo $logo ?>"  alt="" style = "background:none;max-width:20rem;width:4rem;"></a>
 
</div>



<div style = "background:rgb(56,142,142,0.7);top:6%;width:100%;height:9.5rem;left:%;z-index:-1;position:fixed;z-index:1;">

<img src=  "assets/student profiles/dis/<?php echo $profile ?>" class="img-responsive" id = "profile"></img>

<span style = "font-family: 'Quicksand', sans-serif;font-size:min(3vw,35px);color:black;position:absolute;top:0;left:68%;padding-left:5%;padding-right:3%;padding-top:1%;padding-bottom:1.2%;"><?php echo $dataa['name'];?></span>


<span  style = "font-family: 'Quicksand', sans-serif;font-size:min(3vw,40px);color:black;position:absolute;top:0;left:85%;padding-left:5%;padding-right:3.2%;padding-top:0.9%;padding-bottom:0.9%;"><?php echo $dataa['class'];?></span>

</div>

<div  style="BACKGROUND:RGB(0,0,0,0.5);width: 80%;height:auto;border-radius:10px;position:absolute;left:10%;top:17%;">


<font style = "font-family:'Quicksand', sans-serif;font-size:min(10vw,5rem);padding-left:5.5%;position:absolute;top:0%;color:white;"> Track your overall attendence</font>
<BR><BR><BR>
<span class = "row" style=  "width:82.5vw;">



<span class = "col-md-3">
  <canvas id="myChart" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["January"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#437E8A",
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">January</font>
</span>




<span class = "col-md-3">
  <canvas id="myChart1" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["February"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#E3B85E",
  "lightgrey",
 
];

new Chart("myChart1", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">February</font>
</span>


<span class = "col-md-3">
  <canvas id="myChart2" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["March"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#B1F4E7",
  "lightgrey",
 
];

new Chart("myChart2", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">March</font>
</span>


<span class = "col-md-3">
  <canvas id="myChart3" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["April"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#9D0759",
  "lightgrey",
 
];

new Chart("myChart3", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">April</font>
</span>
</span>








<BR><BR>


<span class = "row"style=  "width:82.5vw;">



<span class = "col-md-3">
  <canvas id="myChart4" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["May"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#FFDF22",
  "lightgrey",
 
];

new Chart("myChart4", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">May</font>
</span>




<span class = "col-md-3">
  <canvas id="myChart5" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["June"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#B9C46A",
  "lightgrey",
 
];

new Chart("myChart5", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">June</font>
</span>


<span class = "col-md-3">
  <canvas id="myChart6" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["July"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#FFB0AC",
  "lightgrey",
 
];

new Chart("myChart6", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">July</font>
</span>


<span class = "col-md-3">
  <canvas id="myChart7" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["August"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#003399",
  "lightgrey",
 
];

new Chart("myChart7", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">August</font>
</span>
</span>









<br><br>

<span class = "row"style=  "width:82.5vw;">



<span class = "col-md-3">
  <canvas id="myChart8" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["September"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#FFAB0F",
  "lightgrey",
 
];

new Chart("myChart8", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">September</font>
</span>




<span class = "col-md-3">
  <canvas id="myChart9" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["October"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#FFFF99",
  "lightgrey",
 
];

new Chart("myChart9", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">October</font>
</span>


<span class = "col-md-3">
  <canvas id="myChart0" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["November"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#02C3C9",
  "lightgrey",
 
];

new Chart("myChart0", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">November</font>
</span>


<span class = "col-md-3">
  <canvas id="myChart11" style="width:100%;max-width:100vw;"></canvas>

<script>
  var presentdata = <?php echo $dataa1["December"]; ?>;

var xValues = ["Present","Absent"];
var yValues = [presentdata, 30-presentdata];
var barColors = [
  "#F87096",
  "lightgrey",
 
];

new Chart("myChart11", {
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
<font style = "font-family: 'Quicksand', sans-serif;font-size:2rem;color:white;">December</font>
</span>
</span>














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

