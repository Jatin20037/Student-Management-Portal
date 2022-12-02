

<?php 
 
 $con = mysqli_connect("localhost","root","","library");
if($con)
{

}

$query2 = sprintf("select count(*) as total from books");



$connectt2 = mysqli_query($con,$query2);
$dataa2 = mysqli_fetch_assoc($connectt2);
$total = $dataa2["total"];
$new = $total-16;



for($x = $new+1 ;$x<=$total;$x++ )
{$query3 = sprintf("select * from books where s_no = $x");
  $connectt3 = mysqli_query($con,$query3);
  $dataa3 = mysqli_fetch_assoc($connectt3);
  $content = $dataa3["title"];
  $profilecontent = $dataa3["profile"];
  $pdfcontent = $dataa3["pdf"];
echo "<script>
const vari$x = '$content' ;
const profilevari$x = '$profilecontent' ;
const pdfvari$x = '$pdfcontent' ;
</script>";

}
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
      background-Image:url(uploads/6.jpg);
      background-repeat:no-repeat;
      background-size:100% 100%;
      background-attachment:fixed;
      transition:3s ease;
      
    } 
    #profile{
width:10.5rem;
border-radius:50%;
padding:15px;


}

</style>
    </head>
<body>
<div  style = "position:fixed;background:rgb(0,0,0,1);width:100%;height:6vh;z-index:1;top:0;">
  <span style = "position:absolute;left:1%;font-size:2rem;padding-top:0.5%;">
     <a  href="#" style = "color:white;left:1%;font-size:2rem;padding-top:0.5%;text-decoration:none;font-weight:normal;font-family: 'Quicksand', sans-serif;"><img src="assets/logo/portallogo2.png" alt="" style = "background:none;max-width:20rem;width:8rem;"></a>
    &nbsp&nbsp  <font style= "font-family: 'Quicksand', sans-serif;font-size:min(3vw,30px);color:white;" id = "syw">Smart Profilez</font>
</span>
    </div>


</div>
<div style = "background:rgb(0,0,0 ,0.5);width:100%;height:100%;position:fixed;">

</div>
<div style = "background-image:url('assets/bg/librarybg2.jpg');width:100%;height:auto;position:absolute;top:100%;" id = "contain">

<br><br><br><br>
<form action = "library.php" method = "get" style = "z-index:10;position:absolute;width:100%;height:5%;">
    <button class = "glyphicon glyphicon-search" type = "submit" name = "subt" style = "background:none;border:none;float:right;font-size:2rem;padding-right:30px;padding-top:2px;padding-left:20px;"></button>
<input type = "text" placeholder = "Search books" style = "border-radius:20px;height:15%;float:right;width:30%;background:none;" name = "inp"></input>
</form>
<br><br><br><br><br><br>
<center><font style= "font-family: 'Quicksand', sans-serif;font-size:min(10vw,100px);color:lightgrey;z-index:0;position:absolute;left:30%;" id = "syw">Latest Collections</font></center>
<br><br><br><br><br><br><br><br><br><br>
<span class="row justify-content-between " style = "width:100.5%;">
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an1"><div  style="background-color:white;margin:1%;height:auto;border-radius:30px;box-shadow:0 0 10px black;" ><img src="" id = "img1" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat1"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an2"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img2" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat2"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an3"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img3" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat3"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an4"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img4" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat4"></span></center></div></a>


</span>
<span class="row justify-content-center" style = "width:100.5%;">
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an5"><div  style="background-color:white;margin:1%;height:auto;border-radius:30px;box-shadow:0 0 10px black;" ><img src="" id = "img5" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat5"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an6"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img6" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat6"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an7"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img7" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat7"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an8"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img8" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat8"></span></center></div></a>


</span>
<span class="row justify-content-center" style = "width:100.5%;">
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an9"><div  style="background-color:white;margin:1%;height:auto;border-radius:30px;box-shadow:0 0 10px black;" ><img src="" id = "img9" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat9"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an10"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img10" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat10"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an11"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img11" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat11"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an12"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img12" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat12"></span></center></div></a>


</span>
<span class="row justify-content-center" style = "width:100.5%;">
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an13"><div  style="background-color:white;margin:1%;height:auto;border-radius:30px;box-shadow:0 0 10px black;" ><img src="" id = "img13" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat13"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an14"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img14" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat14"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an15"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img15" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat15"></span></center></div></a>
<a href = "" class="col-md-3" style="text-decoration:none;" id = "an16"><div  style="background-color:white;margin:1%;height:auto;box-shadow:0 0 10px black;border-radius:30px;"><img src="" id = "img16" class="img-responsive"style="border-top-right-radius:30px;border-top-left-radius:30px;"><center><span style="font-family: 'Quicksand', sans-serif;font-size:2rem;color:black;text-decoration:none;"id = "cat16"></span></center></div></a>


</span>
<br><br><br>

</div>


<script>
  let contain= document.getElementById('contain');
    function bg(){
document.body.style.backgroundImage="url('uploads/5.jpg')";

function bg1(){
document.body.style.backgroundImage="url('uploads/7.jpg')";
function bg2(){
document.body.style.backgroundImage="url('uploads/9.jpg')";
function bg3(){
document.body.style.backgroundImage="url('uploads/1.jpg')";
function bg4(){
document.body.style.backgroundImage="url('uploads/4.jpg')";
function bg5(){
document.body.style.backgroundImage="url('uploads/3.jpg')";
function bg6(){
document.body.style.backgroundImage="url('uploads/2.jpg')";
function bg7(){
document.body.style.backgroundImage="url('uploads/6.jpg')";

const tm = setTimeout(bg,3000);
}const tm7 = setTimeout(bg7,5000);
}const tm7 = setTimeout(bg6,5000);
}const tm6 = setTimeout(bg5,5000);
}const tm5 = setTimeout(bg4,5000);
}const tm4 = setTimeout(bg3,5000);

}const tm3 = setTimeout(bg2,5000);

}const tm2 = setTimeout(bg1,5000);
}
const tm1 = setTimeout(bg,5000);
    </script>
</body>
</html>
<?php
$count = $new+1;
for($z = 1;$z<=16;$z++)
{
echo "<script>let var$z = document.getElementById('cat$z');
let img$z = document.getElementById('img$z');
let an$z = document.getElementById('an$z');

var$z.innerHTML = vari$count;
img$z.src = 'uploads/Books/'+profilevari$count;
an$z.href = 'uploads/Books/'+pdfvari$count;
</script>";
$count++;
}

if(isset($_GET["subt"]))
{
$value = $_GET["inp"];
$query4 = "select * from books where title like '%$value%'";

  $connectt4 = mysqli_query($con,$query4);
  $num4 = mysqli_num_rows($connectt4);
  
echo"<script>
var span = document.createElement('span');
span.style.position='absolute';
span.style.top = '10%';
span.style.width='100%';
span.className = 'row ';
</script>"; 
 
  for($z = 1;$z<=16;$z++)
{
echo "<script>
var$z.style.visibility ='hidden';
img$z.style.visibility ='hidden';
an$z.style.visibility ='hidden';

</script>";
}
for($i=1;$i<=$num4;$i++)
{
$dataa4 = mysqli_fetch_assoc($connectt4);
$newcontent = $dataa4["title"];
$newprofilecontent = $dataa4["profile"];
$newpdfcontent = $dataa4["pdf"];
echo "<script>

let a$i = document.createElement('a');
a$i.href = 'uploads/Books/$newpdfcontent';
let divv$i = document.createElement('div');
divv$i.id = 'data';
divv$i.style.backgroundColor='white';
divv$i.style.margin='1%';
divv$i.style.height='auto';
divv$i.style.width='100%';
a$i.className = 'col-md-3';
divv$i.style.borderRadius='30px';
divv$i.style.boxShadow ='0 0 10px black';
let image$i = document.createElement('img');
image$i.className = 'img-responsive';
image$i.style.borderTopRightRadius='30px';
image$i.style.width='100%';
image$i.style.borderTopLeftRadius='30px';
image$i.src = 'uploads/Books/$newprofilecontent';
let txt$i = document.createTextNode('$newcontent');
divv$i.style.fontFamily = 'century gothic';
divv$i.style.fontSize='2rem';
divv$i.style.color='black';
divv$i.style.textDecoration='none';
contain.appendChild(span);
span.appendChild(a$i);
a$i.appendChild(divv$i);
divv$i.style.zIndex = '0';
divv$i.appendChild(image$i);
let tg4$i = document.createElement('br');
divv$i.appendChild(tg4$i);
let center$i = document.createElement('center');
divv$i.appendChild(center$i);
center$i.appendChild(txt$i);
</script>";
}
}
//background-color:white;margin:1%;height:auto;border-radius:30px;box-shadow:0 0 10px black;
?>
