<?php
   session_start();  
   $val = $_SESSION['user']; 
   $cl = $_SESSION['class'] ;
   $school = $_SESSION['school'] ;

   ?>


<!DOCTYPE html>
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
    <span class = "glyphicon glyphicon-menu-hamburger" style = "color:grey;position:fixed;top:12%;font-size:min(7vw,3rem);left:5%;visibility:hidden;z-index:4;" id = "burger"></span>
 <div style = "width:13%;height:100%;position:fixed;background:#292f45;border:none;z-index:3;" id = "navbar">
    <center><br><br>
<font style = "font-family:'Poppins', sans-serif;font-size:min(1vw,1.7rem);color:white;background:#7367f0;border:none;padding-left:20%;padding-right:20%;padding-top:10px;padding-bottom:10px;border-radius:7px;" id = "compose">Add Task</font><br><br><br><br>
<span  class = "glyphicon glyphicon-envelope" style = "font-size:min(1vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;float:left;margin-left:30px;" id = "assignbt">&nbsp&nbsp&nbsp&nbspAssigned Task</span><br><br>
<font style = "font-size:min(1vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;float:left;margin-left:30px;" id = "personalbt"><span  class="glyphicon glyphicon-user"></span>&nbsp&nbsp&nbsp&nbspPersonal</font><br><br>

<font  style = "font-size:min(1vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;float:left;margin-left:30px;" id = "imptbt"><span  class="glyphicon glyphicon-star" ></span>&nbsp&nbsp&nbsp&nbspImportant</font><br><br>



<font style = "font-size:min(1vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;float:left;margin-left:30px;" id = "deletebt"><span  class="	glyphicon glyphicon-trash"></span>&nbsp&nbsp&nbsp&nbspDeleted</font><br>

</center>
 </div>  
 <div style = "position:absolute;left:13%;width:87%;height:100%;top:5%;background:#292f45;border:none;" id="maindiv">
 <form style = "width:100%;border:1px solid lightgrey;padding:10px;position:fixed;top:0;border:none;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;z-index:2;" id = "search">
    <button type="submit" name = "search" style = "border:none;background:#343d55;color:white;"><span class = "glyphicon glyphicon-search"></span></button>
    <input type="text" placeholder = "Search task" style = "width:97%;border:none;background:#343d55;">
 </form>
</div> 



    </div>

    
</div>

<script>
    var search = document.getElementById("search");
    var navigation = document.getElementById("navbar");
    var width = window.screen.availWidth;
var maindiv = document.getElementById("maindiv");
maindiv.style.top = search.offsetHeight+"px";



</script>
    <?php 
 
 $con = mysqli_connect("localhost","root","","$school");
 if($con)
 {
 
 }
 $query = sprintf("select * from todo_{$val} where status!='d'");
 
 $connectt = mysqli_query($con,$query);
 $num = mysqli_num_rows($connectt);
 $arr = array();
 
 for($i=1;$i<=$num;$i++)
 {$dataa1 = mysqli_fetch_assoc($connectt);
 
 
 $title = $dataa1['title'];

 $date = $dataa1["date"];
 
echo " 
<script>
var ancor$i = document.createElement('a');
ancor$i.href = 'todoextended.php?user=$dataa1[sno]';
ancor$i.style.textDecoration = 'none';
var div$i = document.createElement('div');
ancor$i.appendChild(div$i);
div$i.id = 'assignedtask$i';

if($i%2==0)
{
div$i.style.background = '#343d55';
}
else{
    div$i.style.background = '#292f45';
}   
div$i.style.width = '100%';
div$i.style.height = '7%';
div$i.style.border = 'none';
div$i.style.zIndex = 1;
div$i.style.display='flex';

maindiv.appendChild(ancor$i);

var img$i = document.createElement('img');
img$i.src = 'assets/student profiles/$school/user.png';
img$i.style.borderRadius = '50%';

img$i.style.width = '30px';
img$i.style.marginRight='30px';

img$i.style.maxWidth = '15vw';
img$i.id = 'img$i';




var text1$i = document.createTextNode(`$title`);

var text2$i = document.createTextNode(`$date`);
var font1$i = document.createElement('font');
var font2$i = document.createElement('font');
var br$i = document.createElement('br');
font1$i.appendChild(text1$i);
font1$i.id = 'assigntitle$i';
font2$i.appendChild(text2$i);
font2$i.id = 'assigndate$i';
font1$i.style.padding = '40px';
var br$i = document.createElement('br');
var br2$i = document.createElement('br');
font2$i.style.paddingRight = '20px';
div$i.appendChild(br$i);

var span$i = document.createElement('div');
span$i.appendChild(br2$i);
span$i.appendChild(font1$i);
div$i.appendChild(span$i);
var newspan$i = document.createElement('div');
newspan$i.id = 'newspanid$i';

div$i.appendChild(newspan$i);
newspan$i.appendChild(br$i);
newspan$i.appendChild(img$i);

newspan$i.appendChild(font2$i);
newspan$i.style.position = 'relative';

div$i.style.fontFamily = 'century gothic';
font1$i.style.fontSize = 'min(1.3vw,1.7rem)';
font2$i.style.fontSize = 'min(1.3vw,1.7rem)';
span$i.style.width = '50%';
span$i.style.overflow = 'hidden';
span$i.style.whiteSpace='nowrap';
div$i.style.color = 'silver';

var count = $num;
var rightdata = document.getElementById('newspanid$i');
rightdata.style.left = (maindiv.offsetWidth/100)*30+'px';
</script>

 ";
}
   ?>
   

    
<script>

if(width<=1000)
{
    navigation.style.left = "-50%";
    maindiv.style.left = 0;
    maindiv.style.width = "100%";
   
    
   
}


</script>
<div style = "border-radius:7px;background:#292f45;width:20%;height:100%;position:fixed;right:-40%;transition:2s ease;background:#161d30;z-index:3;top:0%;" id = "composediv">
<br>
<div style = "background:#161d30;font-size:min(3.5vw,2rem);color:black;font-family:'Poppins', sans-serif;border:none;border-radius:7px;padding:10px;color:silver;">Assign Task 
<font style = "float:right;padding-right:15px;text-decoration:none;cursor:default;" id = "close">x</font>
</div>
<br>
<form method = "post">
    
<input type = "text" style="width:90%;margin-left:5%;border:1px solid silver;;color:silver;background:#343d55;padding:10px;border-radius:5px;"placeholder = "Title here  " name = "title">
<br><br><br>

<input type = "date" style="width:90%;margin-left:5%;border:1px solid silver;color:silver;background:#343d55;padding:10px;border-radius:5px;" name = "dt">
<br><br><br>
<textarea    name="blog" style = "width:90%;margin-left:5%;border:1px solid silver;height:80%;background:#343d55;color:silver;border-radius:5px;">
Description
  </textarea>
  <hr>
 
 <button type = "submit" name = "asstask" style = "margin-left:20px;border:none;font-size:min(3vw,1.5rem);font-family:'Poppins', sans-serif;background:#7367f0;color:white;border-radius:5px;padding-left:20px;padding-right:20px;cursor:default;">Assign</button>
 <button type = "reset" style = "margin-left:20px;border:none;font-size:min(3vw,1.5rem);font-family:'Poppins', sans-serif;border:1px solid silver;background:none;color:white;border-radius:5px;padding-left:20px;padding-right:20px;cursor:default;">Cancel</button>
</form>
</div>



<script>
    var width = window.screen.availWidth;
    
 document.getElementById("compose").addEventListener("click",()=>{
    document.getElementById("composediv").style.right = "0%";

 }) 
 
 document.getElementById("close").addEventListener("click",()=>{
    document.getElementById("composediv").style.right = "-40%";

 }) 


var c = 0;
 document.getElementById("burger").addEventListener("click",()=>{
    if(c%2==0)
    {
    document.getElementById("navbar").style.left = 0;
    document.getElementById("navbar").style.width = "50%";
    burger.style.left = navigation.offsetWidth+20+"px";
    }
    else{
        document.getElementById("navbar").style.left = "-50%";
        document.getElementById("navbar").style.width = "15%";
        burger.style.left = "5%";
    }
    c++;
 }) 
</script>



</div>



<div style = "position:absolute;left:13%;width:87%;height:100%;top:5%;background:#292f45;border:none;visibility:hidden;" id="impt">
 <form style = "width:100%;border:1px solid lightgrey;padding:10px;position:fixed;top:0;border:none;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;z-index:2;" id = "search2">
    <button type="submit" name = "search" style = "border:none;background:#343d55;color:white;"><span class = "glyphicon glyphicon-search"></span></button>
    <input type="text" placeholder = "Search task" style = "width:97%;border:none;background:#343d55;">
 </form>
</div> 
<!-------------------------------------------important------------------------------------------------------------------------------------------------------------------------>

<script>
     var search2 = document.getElementById("search2");
var impt = document.getElementById("impt");
var imptbt = document.getElementById("imptbt");
impt.style.top = search2.offsetHeight+"px";



</script>


<?php 
 
 $con = mysqli_connect("localhost","root","","$school");
 if($con)
 {
 
 }
 $query = sprintf("select count(*) as total from todo_{$val} where impt = 'y'");
 
 $connectt = mysqli_query($con,$query);
 $dataa = mysqli_fetch_assoc($connectt);
 $query2 = sprintf("select sno from todo_{$val} where impt = 'y'");
 
 $connectt2 = mysqli_query($con,$query2);

 
 for($i=1;$i<=$dataa["total"];$i++)
 {

$dataa2 = mysqli_fetch_assoc($connectt2);
 $assignee = $dataa1["assignee"];


 $query1 = sprintf("select * from todo_{$val} where impt = 'y' and sno=  $dataa2[sno]");
 
 $connectt1 = mysqli_query($con,$query1);
 $dataa1 = mysqli_fetch_assoc($connectt1);
 
 $num = mysqli_num_rows($connectt1);
 
 $title = $dataa1["title"];

 $date = $dataa1["date"];
 
echo " 
<script>

var imptancor$i = document.createElement('a');
imptancor$i.href = 'todoextended.php?user= $dataa2[sno]';
imptancor$i.style.textDecoration = 'none';
var imptdiv$i = document.createElement('div');
imptancor$i.appendChild(imptdiv$i);
imptdiv$i.id = 'impttask$i';
imptdiv$i.style.display='flex';
if($i%2==0)
{
    imptdiv$i.style.background = '#343d55';
}
else{
    imptdiv$i.style.background = '#292f45';
}   
imptdiv$i.style.width = '100%';
imptdiv$i.style.height = '7%';
imptdiv$i.style.border = 'none';
imptdiv$i.style.zIndex = 1;

impt.appendChild(imptancor$i);

var imptimg$i = document.createElement('img');
imptimg$i.src = 'assets/student profiles/$school/user.png';
imptimg$i.style.borderRadius = '50%';

imptimg$i.style.width = '3rem';
imptimg$i.style.marginRight='30px';
imptimg$i.style.maxWidth = '15vw';
imptimg$i.id = 'imptimg$i';
var imptbr$i = document.createElement('br');
var imptbr2$i = document.createElement('br');
var imptbr3$i = document.createElement('br');




var impttext1$i = document.createTextNode(`$title`);

var impttext2$i = document.createTextNode(`$date`);
var imptfont1$i = document.createElement('font');
var imptfont2$i = document.createElement('font');
var imptbr$i = document.createElement('br');
var imptbr4$i = document.createElement('br');
imptfont1$i.appendChild(impttext1$i);

imptfont2$i.appendChild(impttext2$i);
imptfont1$i.style.padding = '40px';
imptimg$i.style.right = '3%';
imptfont2$i.style.float = 'right';
imptimg$i.style.float = 'right';
imptimg$i.style.marginTop = '0px';

imptfont2$i.style.paddingRight = '20px';
imptdiv$i.appendChild(imptbr$i);
var imptspan$i = document.createElement('div');
imptspan$i.appendChild(imptbr2$i);
imptspan$i.appendChild(imptfont1$i);
imptdiv$i.appendChild(imptspan$i);
imptdiv$i.style.fontFamily = 'century gothic';
imptfont1$i.style.fontSize = 'min(1.5vw,1.7rem)';
imptfont2$i.style.fontSize = 'min(1.5vw,1.7rem)';
imptspan$i.style.width = '50%';
imptspan$i.style.overflow = 'hidden';
imptspan$i.style.whiteSpace='nowrap';
imptdiv$i.style.color = 'silver';
imptdiv$i.appendChild(imptbr4$i);
var imptnewspan$i = document.createElement('div');
imptnewspan$i.id = 'imptnewspanid$i';

imptnewspan$i.appendChild(imptbr3$i);
imptnewspan$i.appendChild(imptfont2$i);
imptnewspan$i.appendChild(imptimg$i);

imptdiv$i.appendChild(imptnewspan$i);
imptnewspan$i.style.position = 'relative';
var count = $dataa[total];
var imptrightdata = document.getElementById('imptnewspanid$i');
imptrightdata.style.left = (impt.offsetWidth/100)*30+'px';
</script>

 ";
 }
   ?>
 
<!--------------------------------------------------------------------------------important end------------------------------------------------------------------------------->
<div style = "position:absolute;left:13%;width:87%;height:100%;top:5%;background:#292f45;border:none;visibility:hidden;" id="personal">
 <form style = "width:100%;border:1px solid lightgrey;padding:10px;position:fixed;top:0;border:none;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;z-index:2;" id = "search3">
    <button type="submit" name = "search" style = "border:none;background:#343d55;color:white;"><span class = "glyphicon glyphicon-search"></span></button>
    <input type="text" placeholder = "Search task" style = "width:97%;border:none;background:#343d55;">
 </form>
</div> 



<script>
     var search3 = document.getElementById("search3");
var personal = document.getElementById("personal");
var personalbt = document.getElementById("personalbt");
personal.style.top = search3.offsetHeight+"px";



</script>


<?php 
 
 $con = mysqli_connect("localhost","root","","$school");
 if($con)
 {
 
 }
 $query = sprintf("select count(*) as total from todo_{$val}_personal ");
 
 $connectt = mysqli_query($con,$query);
 $dataa = mysqli_fetch_assoc($connectt);
echo $dataa["total"];

 $query3 = sprintf("select count(*) as total from todo_{$val}_personal where action!='d'");
 
 $connectt3 = mysqli_query($con,$query3);
 $dataa3 = mysqli_fetch_assoc($connectt3);

if(isset($_POST["asstask"]))
 {
$title = $_POST["title"];
$dt = $_POST["dt"];
$desc = $_POST["blog"];


$queryinsert = sprintf("insert into todo_{$val}_personal values($dataa[total]+1,'$title','$desc','$dt','n','')");
 
 $connecttinsert = mysqli_query($con,$queryinsert);
 
 }

 $queryper2 = sprintf("select sno from todo_{$val}_personal where action!='d'");
 
 $connecttper2 = mysqli_query($con,$queryper2);

 for($i=1;$i<=$dataa3["total"];$i++)
 {

    $dataaper2 = mysqli_fetch_assoc($connecttper2);
    
  
 $queryper = "select * from todo_{$val}_personal where sno=$dataaper2[sno]";
 
 $connecttper = mysqli_query($con,$queryper);
 $dataaper = mysqli_fetch_assoc($connecttper);
 
 $num = mysqli_num_rows($connecttper);
 
 $titleper = $dataaper["title"];

 $dateper = $dataaper["due"];
 
echo " <script>
 var perancor$i = document.createElement('a');
 perancor$i.href = 'todoextended2.php?user=$dataaper2[sno]';
 perancor$i.style.textDecoration = 'none';
 var perdiv$i = document.createElement('div');
 perancor$i.appendChild(perdiv$i);
 perdiv$i.id = 'assignedtask$i';
 
 if($i%2==0)
 {
    perdiv$i.style.background = '#343d55';
 }
 else{
    perdiv$i.style.background = '#292f45';
 }   
 perdiv$i.style.width = '100%';
 perdiv$i.style.height = '7%';
 perdiv$i.style.border = 'none';
 perdiv$i.style.zIndex = 1;
 
personal.appendChild(perancor$i);
 

 var br$i = document.createElement('br');
 var br2$i = document.createElement('br');
 var br3$i = document.createElement('br');
 
 
 
 
 var pertext1$i = document.createTextNode('$titleper');

 var pertext2$i = document.createTextNode('$dateper');
 var perfont1$i = document.createElement('font');
 var perfont2$i = document.createElement('font');
 var perbr$i = document.createElement('br');
 perfont1$i.appendChild(pertext1$i);
 
 perfont2$i.appendChild(pertext2$i);
 perfont1$i.style.padding = '40px';
 perfont1$i.style.color = 'silver';
 perfont2$i.style.color = 'silver';
 perfont2$i.style.float = 'right';
 perfont2$i.style.paddingRight = '20px';
 perdiv$i.appendChild(perbr$i);

 console.log(perfont1$i);
 perdiv$i.appendChild(perfont1$i);
 perdiv$i.appendChild(perfont2$i);
 perdiv$i.style.fontFamily = 'century gothic';
 perfont1$i.style.fontSize = 'min(1.5vw,1.7rem)';
 perfont2$i.style.fontSize = 'min(1.5vw,1.7rem)';
 
 
 
 </script>
 
  ";

 }

?>




<script>
 if(width<=756){
    document.getElementById("composediv").style.right = "-110%";
    document.getElementById("composediv").style.width = "90%";
    document.getElementById("search").style.width = width+"px";
    document.getElementById("search2").style.width = width+"px";
    document.getElementById("search3").style.width = width+"px";
    document.getElementById("search3").style.left = 0;
    document.getElementById("maindiv").style.width = "100%";
    document.getElementById("impt").style.width = "100%";
    document.getElementById("impt").style.left= "0%";
    document.getElementById("personal").style.width = "100%";
    document.getElementById("personal").style.left= "0%";
    document.getElementById("burger").style.visibility = "visible";
    document.getElementById("assignbt").style.fontSize = "min(3vw,3vw)";
    document.getElementById("imptbt").style.fontSize = "min(3vw,3vw)";
    document.getElementById("personalbt").style.fontSize = "min(3vw,3vw)";
    document.getElementById("deletebt").style.fontSize = "min(3vw,3vw)";
    document.getElementById("compose").style.fontSize = "min(3vw,3vw)";
    rightdata.style.left = (maindiv.offsetWidth/100)*20+'px';
    imptrightdata.style.left = (maindiv.offsetWidth/100)*20+'px';
for(i=1;i<=count;i++)
{
    document.getElementById("assigntitle"+i).style.fontSize = "min(3vw,3vw)";
    document.getElementById("assigndate"+i).style.fontSize = "min(3vw,3vw)";
    document.getElementById("img"+i).style.marginRight = "0px";
}
document.getElementById("compose").addEventListener("click",()=>{
    document.getElementById("composediv").style.right = "6%";

 }) 
 
 document.getElementById("close").addEventListener("click",()=>{
    document.getElementById("composediv").style.right = "-110%";

 }) 


    }
 </script>





<div style = "position:absolute;left:13%;width:87%;height:100%;top:5%;background:#292f45;border:none;visibility:hidden;" id="deletee">
 <form style = "width:100%;border:1px solid lightgrey;padding:10px;position:fixed;top:0;border:none;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;z-index:2;" id = "search4">
    <button type="submit" name = "search" style = "border:none;background:#343d55;color:white;"><span class = "glyphicon glyphicon-search"></span></button>
    <input type="text" placeholder = "Search task" style = "width:97%;border:none;background:#343d55;">
 </form>
</div> 

<?php 
  $con = mysqli_connect("localhost","root","","$school");
  if($con)
  {
  
  }
  
 
  $query3 = sprintf("select count(*) as total from todo_{$val}_personal where action ='d'");
  
  $connectt3 = mysqli_query($con,$query3);
  $dataa3 = mysqli_fetch_assoc($connectt3);
 
 
  $querydel2 = sprintf("select sno from todo_{$val}_personal where action ='d'");
  
  $connecttdel2 = mysqli_query($con,$querydel2);
 echo $dataa3["total"];
  for($i=1;$i<=$dataa3["total"];$i++)
  {
 
     $dataadel2 = mysqli_fetch_assoc($connecttdel2);
     
   
  $querydel = "select * from todo_{$val}_personal where sno=$dataadel2[sno]";
  
  $connecttdel = mysqli_query($con,$querydel);
  $dataadel= mysqli_fetch_assoc($connecttdel);
  
  $num = mysqli_num_rows($connecttdel);
  
  $titledel = $dataadel["title"];
 
  $datedel = $dataadel["due"];
 

echo " <script>
var deletee = document.getElementById('deletee');
var deletebt = document.getElementById('deletebt');
 var delancor$i = document.createElement('a');
 delancor$i.href = 'todoextended2.php?user=$i';
 delancor$i.style.textDecoration = 'none';
 var deldiv$i = document.createElement('div');
 delancor$i.appendChild(deldiv$i);
 deldiv$i.id = 'deltask$i';
 
 if($i%2==0)
 {
    deldiv$i.style.background = '#343d55';
 }
 else{
    deldiv$i.style.background = '#292f45';
 }   
 deldiv$i.style.width = '100%';
 deldiv$i.style.height = '7%';
 deldiv$i.style.border = 'none';
 deldiv$i.style.zIndex = 1;
 
deletee.appendChild(delancor$i);
 

 var br$i = document.createElement('br');
 var br2$i = document.createElement('br');
 var br3$i = document.createElement('br');
 
 
 
 
 var deltext1$i = document.createTextNode('$titledel');
 
 var deltext2$i = document.createTextNode('$datedel');
 var delfont1$i = document.createElement('font');
 var delfont2$i = document.createElement('font');
 var delbr$i = document.createElement('br');
 delfont1$i.appendChild(deltext1$i);
 
 delfont2$i.appendChild(deltext2$i);
 delfont1$i.style.padding = '40px';

 delfont2$i.style.float = 'right';
 delfont2$i.style.paddingRight = '20px';
 deldiv$i.appendChild(delbr$i);
 deldiv$i.appendChild(delfont1$i);
 deldiv$i.appendChild(delfont2$i);

 deldiv$i.style.fontFamily = 'century gothic';
 delfont1$i.style.fontSize = 'min(1.5vw,1.7rem)';
 
 deldiv$i.style.color = 'silver';
 
 
 
 var percount = $dataa[total];
 </script>
 
  ";

 }
   ?>
 <script>


imptbt.addEventListener("click",()=>{
impt.style.visibility = "visible";
maindiv.style.visibility = "hidden";
personal.style.visibility = "hidden";
deletee.style.visibility = "hidden";

 })


 personalbt.addEventListener("click",()=>{
impt.style.visibility = "hidden";
maindiv.style.visibility = "hidden";
personal.style.visibility = "visible";
deletee.style.visibility = "hidden";

 })
 var assignbt = document.getElementById("assignbt");
 assignbt.addEventListener("click",()=>{
impt.style.visibility = "hidden";
maindiv.style.visibility = "visible";
personal.style.visibility = "hidden";
deletee.style.visibility = "hidden";

 })





deletebt.addEventListener("click",()=>{
impt.style.visibility = "hidden";
maindiv.style.visibility = "hidden";
personal.style.visibility = "hidden";
deletee.style.visibility = "visible";

 })
 </script>
</body>
</html>