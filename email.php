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

    ::-webkit-scrollbar {
  width: 0px;

}
</style>
</head>
<body>
    <span class = "glyphicon glyphicon-menu-hamburger" style = "color:grey;position:fixed;top:12%;font-size:min(7vw,3rem);left:5%;visibility:hidden;z-index:4;cursor:pointer;" id = "burger"></span>
 <div style = "width:13%;height:100%;position:fixed;background:#292f45;border:none;z-index:3;" id = "navbar">
    <center><br><br>
<font style = "font-family:'Poppins', sans-serif;font-size:min(3vw,1.7rem);color:white;background:#7367f0;border:none;padding-left:20%;padding-right:20%;padding-top:10px;padding-bottom:10px;border-radius:7px;cursor:pointer;" id = "compose">Compose</font><br><br><br><br>
<span  class = "glyphicon glyphicon-envelope" style = "font-size:min(3.5vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;float:left;margin-left:30px;cursor:pointer;" id = "inbox">&nbsp&nbsp&nbsp&nbspInbox</span><br><br>
<font  style = "font-size:min(3.5vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;float:left;margin-left:30px;cursor:pointer;" id = "sent"><span  class="glyphicon glyphicon-send"  id = "send"></span>&nbsp&nbsp&nbsp&nbspSent</font><br><br>




<font style = "font-size:min(3.5vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;float:left;margin-left:30px;cursor:pointer;" id = "trash"><span  class="	glyphicon glyphicon-trash"></span>&nbsp&nbsp&nbsp&nbspTrash</font><br>

</center>
 </div>  
 <div style = "position:absolute;left:13%;width:87%;background:#292f45;border:none;" id="maindiv">
 <form style = "width:100%;border:1px solid lightgrey;padding:10px;position:fixed;top:0;border:none;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;z-index:2;" id = "search">
    <button type="submit" name = "search" style = "border:none;background:#343d55;color:white;"><span class = "glyphicon glyphicon-search"></span></button>
    <input type="text" placeholder = "Search mail" style = "width:97%;border:none;background:#343d55;">
 </form>
</div> 


<?php



$con = mysqli_connect("localhost","root","","$school");
if($con)
{

}
$query = sprintf("select count(*) as total from {$val}_email where status = 'inbox'");

$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);
$query2 = sprintf("select sno from {$val}_email where status = 'inbox' order by sno desc");

$connectt2 = mysqli_query($con,$query2);


for($i=1;$i<=$dataa["total"];$i++)
{

   $dataa2 = mysqli_fetch_assoc($connectt2);


$query1 = sprintf("select * from {$val}_email where status = 'inbox' and sno=  $dataa2[sno]");

$connectt1 = mysqli_query($con,$query1);
$dataa1 = mysqli_fetch_assoc($connectt1);

$num = mysqli_num_rows($connectt1);
$sender = $dataa1["sender"];
$title = $dataa1["title"];
$time = $dataa1["time"];
$date = $dataa1["date"];
$desc = $dataa1["desciption"];
if($sender=="Smart Profilez")
{
    $dataa4 = "user.jpg";
}
$query3 = sprintf("select * from students where username = '$sender'");

$connectt3 = mysqli_query($con,$query3);
$dataa3 = mysqli_fetch_assoc($connectt3);
if($dataa3!="")
{
    
    $dataa4 = $dataa3["profile"];
    
}
$query5 = sprintf("select * from teachers where username = '$sender' ");

$connectt5 = mysqli_query($con,$query5);
$dataa5 = mysqli_fetch_assoc($connectt5);
if($dataa5!="")
{
    
    $dataa4 = "user.jpg";
    
}


    
echo "<script>

    var search = document.getElementById('search');
    var navigation = document.getElementById('navbar');
    var width = window.screen.availWidth;
var maindiv = document.getElementById('maindiv');
maindiv.style.top = search.offsetHeight+'px';
maindiv.style.height = window.screen.availHeight-search.offsetHeight+'px';


var ancor = document.createElement('a');
ancor.href = 'email_content.php?val=$dataa2[sno]';
ancor.style.color = 'white';
ancor.style.textDecoration = 'none';
    var div = document.createElement('div');
    div.id = 'mail'+$i;
    if($i%2==0)
    {
    div.style.background = '#343d55';
    }
    else{
        div.style.background = '#292f45';
    }   
    div.style.width = '100%';
   div.style.height = '12%';
  div.style.border = 'none';
  div.style.zIndex = 1;
    maindiv.appendChild(ancor);
    ancor.appendChild(div);
    var img = document.createElement('img');
    img.src = 'assets/student profiles/$school/$dataa4';
    img.style.borderRadius = '50%';
    img.style.position = 'absolute';
    img.style.width = '8rem';
    img.style.padding = '1%';
    img.style.maxWidth = '15vw';
    img.id = 'img'+$i;
    var br = document.createElement('br');
    var br2 = document.createElement('br');
    var br3 = document.createElement('br');
  
   
    
    
    var text1 = document.createTextNode('$sender');
   
    var text2 = document.createTextNode('$title');
    var text3 = document.createTextNode(`$desc`);
    var text4 = document.createTextNode('$time');
    var text5 = document.createTextNode('$date');
    var font1 = document.createElement('font');
    var font2 = document.createElement('font');
    var font3 = document.createElement('font');
    var font4 = document.createElement('font')
    var font5 = document.createElement('font')
    font3.style.whiteSpace = 'nowrap';
   
    font4.style.float = 'right';
    font5.style.float = 'right';
    
    var span = document.createElement('div');
    span.style.position = 'absolute';
    span.style.left = '8rem';
    span.style.width = '75%';
    span.style.overflow = 'hidden';
    font1.appendChild(text1);
    font2.appendChild(text2);
    font3.appendChild(text3);
    font4.appendChild(text4);
    font5.appendChild(text5);
    span.appendChild(br3);
   span.appendChild(font1);
   span.appendChild(font4);
   span.appendChild(br);
   span.appendChild(font2);
   span.appendChild(font5);
   span.appendChild(br2);
   span.appendChild(font3);
    div.style.fontFamily = 'century gothic';
    div.style.fontSize = 'min(3.5vw,1.5rem)';
    div.appendChild(img);
    div.appendChild(span);
   
     

    


if(width<=1000)
{
    navigation.style.left = '-50%';
    maindiv.style.left = 0;
    maindiv.style.width = '100%';
   
    
   
}


</script>";
}

?>
<div style = "border-radius:7px;background:#292f45;width:40%;height:auto;position:fixed;bottom:5%;left:55%;visibility:hidden;z-index:3;box-shadow:0 0 6px 3px black;" id = "composediv">
<div style = "background:#343d55;font-size:min(3.5vw,1.5rem);color:white;font-family:'Poppins', sans-serif;border:none;border-radius:7px;padding:10px;">Compose mail 
<font style = "float:right;padding-right:15px;text-decoration:none;cursor:default;" id = "close">x</font>
</div>

<form method="post" enctype="multipart/form-data">
    <font style = "font-size:min(2vw,1.5rem);font-family:'Poppins', sans-serif;color:silver;">  To:</font>
<input type = "text" name = "to_add" style="width:95%;border:none;box-shadow:inset 2px 2px 9px 2px #161d30;background:#343d55;border-radius:5px;">
<div id = "cc"></div>
<font style = "font-size:min(2vw,1.5rem);font-family:'Poppins', sans-serif;color:silver;">Subject:</font>
<input type = "text" name = "to_sub" style="width:90%;border:none;box-shadow:inset 2px 2px 9px 2px #161d30;background:#343d55;border-radius:5px;">

<textarea    name="blog" style = "width:100%;height:200px;border:none;box-shadow:inset 2px 2px 9px 2px #161d30;background:#343d55;border-radius:5px;color:silver;">
Message
  </textarea>
  <hr>
  <label for="attachment" class="custom-file-upload" id = "choose">
    <span class = "glyphicon glyphicon-paperclip" style ="font-size:min(3vw,2.5rem);position:relative;left:20px;cursor:pointer;color:white;"></span>
 </label>
 
 <input type="file" id = "attachment" style ="visibility:hidden;" name = "choose">
 <button type = "submit" name = "btt" style = "position:absolute;left:20px;bottom:0;border:none;font-size:min(3vw,2rem);font-family:'Poppins', sans-serif;background:#7367f0;color:white;border-radius:7px;padding-left:20px;padding-right:20px;cursor:default;">Send</button>

</form>


<script>
     var width = window.screen.availWidth;
    if(width<=1000){
    document.getElementById("composediv").style.left = "5%";
    document.getElementById("composediv").style.width = "90%";
    document.getElementById("burger").style.visibility = "visible";
    }
 document.getElementById("compose").addEventListener("click",()=>{
    document.getElementById("composediv").style.visibility = "visible";

 }) 
 
 document.getElementById("close").addEventListener("click",()=>{
    document.getElementById("composediv").style.visibility = "hidden";

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
<?php 
if(isset($_POST["btt"]))
{
    $to = $_POST["to_add"];
$to_sub = $_POST["to_sub"];
$to_blog = $_POST["blog"];
   
    $query3 = sprintf("select count(*) as total from {$to}_email");

    $connecttnew = mysqli_query($con,$query3);
    $dataa3 = mysqli_fetch_assoc($connecttnew);
$content = $_FILES['choose']['name'];
$contentype = $_FILES['choose']['type'];
$contentsize = $_FILES['choose']['size'];
$contentmp = $_FILES['choose']['tmp_name'];
$store = 'data/EMAIL/ATTACHMENTS/'.$school.'/'.$content;
move_uploaded_file($contentmp,$store);

$attach = $content;

date_default_timezone_set("Asia/Kolkata");

$tm=date("H:i");

$dt = date("d-m-Y");

$queryinsert = sprintf("insert into {$to}_email values($dataa3[total]+1,'$val','$to_sub','$dt','$tm','$to_blog','$attach','inbox')");
$connecttinsert = mysqli_query($con,$queryinsert);
 
}


?>







</div>  
 <div style = "position:absolute;left:13%;width:87%;background:#292f45;border:none;visibility:hidden;" id="trashdiv">
 <form style = "width:100%;border:1px solid lightgrey;padding:10px;position:fixed;top:0;border:none;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;z-index:2;" id = "search2">
    <button type="submit" name = "search" style = "border:none;background:#343d55;color:white;"><span class = "glyphicon glyphicon-search"></span></button>
    <input type="text" placeholder = "Search mail" style = "width:97%;border:none;background:#343d55;">
 </form>
</div> 


<?php




if($con)
{

}
$query = sprintf("select count(*) as total from {$val}_email where status = 'trash'");

$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);
$query2 = sprintf("select sno from {$val}_email where status = 'trash' order by sno desc");

$connectt2 = mysqli_query($con,$query2);


for($i=1;$i<=$dataa["total"];$i++)
{

   $dataa2 = mysqli_fetch_assoc($connectt2);


$query1 = sprintf("select * from {$val}_email where status = 'trash' and sno=  $dataa2[sno]");

$connectt1 = mysqli_query($con,$query1);
$dataa1 = mysqli_fetch_assoc($connectt1);

$num = mysqli_num_rows($connectt1);
$sender = $dataa1["sender"];
$title = $dataa1["title"];
$time = $dataa1["time"];
$date = $dataa1["date"];
$desc = $dataa1["desciption"];

if($sender=="Smart Profilez")
{
    $dataa4 = "user.jpg";
}
$query3 = sprintf("select * from students where username = '$sender'");

$connectt3 = mysqli_query($con,$query3);
$dataa3 = mysqli_fetch_assoc($connectt3);
if($dataa3!="")
{
    
    $dataa4 = $dataa3["profile"];
    
}
$query5 = sprintf("select * from teachers where username = '$sender' ");

$connectt5 = mysqli_query($con,$query5);
$dataa5 = mysqli_fetch_assoc($connectt5);
if($dataa5!="")
{
    
    $dataa4 = "user.jpg";
    
}






    
echo "<script>

    var search2 = document.getElementById('search2');
   
    var width = window.screen.availWidth;
var trashdiv = document.getElementById('trashdiv');
trashdiv.style.top = search2.offsetHeight+'px';
trashdiv.style.height = window.screen.availHeight-search2.offsetHeight+'px';

var ancor = document.createElement('a');
ancor.href = 'email_content.php?val=$dataa2[sno]';
ancor.style.color = 'white';
ancor.style.textDecoration = 'none';
    var div = document.createElement('div');
    div.id = 'trashmail'+$i;
    if($i%2==0)
    {
    div.style.background = '#343d55';
    }
    else{
        div.style.background = '#292f45';
    }   
    div.style.width = '100%';
   div.style.height = '12%';
  div.style.border = 'none';
  div.style.zIndex = 1;
    trashdiv.appendChild(ancor);
    ancor.appendChild(div);
    var img = document.createElement('img');
    img.src = 'assets/student profiles/$school/$dataa4';
    img.style.borderRadius = '50%';
    img.style.position = 'absolute';
    img.style.width = '8rem';
    img.style.padding = '1%';
    img.style.maxWidth = '15vw';
    img.id = 'trashimg'+$i;
    var br = document.createElement('br');
    var br2 = document.createElement('br');
    var br3 = document.createElement('br');
  
   
    
    
    var text1 = document.createTextNode('$sender');
   
    var text2 = document.createTextNode('$title');
    var text3 = document.createTextNode(`$desc`);
    var text4 = document.createTextNode('$time');
    var text5 = document.createTextNode('$date');
    var font1 = document.createElement('font');
    var font2 = document.createElement('font');
    var font3 = document.createElement('font');
    var font4 = document.createElement('font')
    var font5 = document.createElement('font')
    font3.style.whiteSpace = 'nowrap';
   
    font4.style.float = 'right';
    font5.style.float = 'right';
    
    var span = document.createElement('div');
    span.style.position = 'absolute';
    span.style.left = '8rem';
    span.style.width = '75%';
    span.style.overflow = 'hidden';
    font1.appendChild(text1);
    font2.appendChild(text2);
    font3.appendChild(text3);
    font4.appendChild(text4);
    font5.appendChild(text5);
    span.appendChild(br3);
   span.appendChild(font1);
   span.appendChild(font4);
   span.appendChild(br);
   span.appendChild(font2);
   span.appendChild(font5);
   span.appendChild(br2);
   span.appendChild(font3);
    div.style.fontFamily = 'century gothic';
    div.style.fontSize = 'min(3.5vw,1.5rem)';
    div.appendChild(img);
    div.appendChild(span);
   
     

    


if(width<=756)
{
    navigation.style.left = '-50%';
    trashdiv.style.left = 0;
    trashdiv.style.width = '100%';
   
    
   
}


</script>";
}

?>










</div>  
 <div style = "position:absolute;left:13%;width:87%;background:#292f45;border:none;visibility:hidden;" id="sentdiv">
 <form style = "width:100%;border:1px solid lightgrey;padding:10px;position:fixed;top:0;border:none;background:#343d55;box-shadow:inset 2px 2px 9px 2px #161d30;z-index:2;" id = "search3">
    <button type="submit" name = "search" style = "border:none;background:#343d55;color:white;"><span class = "glyphicon glyphicon-search"></span></button>
    <input type="text" placeholder = "Search mail" style = "width:97%;border:none;background:#343d55;">
 </form>
</div> 


<?php




if($con)
{

}
$query = sprintf("select count(*) as total from {$val}_email where status = 'sent'");

$connectt = mysqli_query($con,$query);
$dataa = mysqli_fetch_assoc($connectt);
$query2 = sprintf("select sno from {$val}_email where status = 'sent' order by sno desc");

$connectt2 = mysqli_query($con,$query2);


for($i=1;$i<=$dataa["total"];$i++)
{

   $dataa2 = mysqli_fetch_assoc($connectt2);


$query1 = sprintf("select * from {$val}_email where status = 'sent' and sno=  $dataa2[sno]");

$connectt1 = mysqli_query($con,$query1);
$dataa1 = mysqli_fetch_assoc($connectt1);

$num = mysqli_num_rows($connectt1);
$sender = $dataa1["sender"];
$title = $dataa1["title"];
$time = $dataa1["time"];
$date = $dataa1["date"];
$desc = $dataa1["desciption"];

if($sender=="Smart Profilez")
{
    $dataa4 = "user.jpg";
}
$query3 = sprintf("select * from students where username = '$sender'");

$connectt3 = mysqli_query($con,$query3);
$dataa3 = mysqli_fetch_assoc($connectt3);
if($dataa3!="")
{
    
    $dataa4 = $dataa3["profile"];
    
}
$query5 = sprintf("select * from teachers where username = '$sender' ");

$connectt5 = mysqli_query($con,$query5);
$dataa5 = mysqli_fetch_assoc($connectt5);
if($dataa5!="")
{
    
    $dataa4 = "user.jpg";
    
}






    
echo "<script>

    var search3 = document.getElementById('search3');
    

var sentdiv = document.getElementById('sentdiv');
sentdiv.style.top = search3.offsetHeight+'px';
sentdiv.style.height = window.screen.availHeight-search3.offsetHeight+'px';

var ancor = document.createElement('a');
ancor.href = 'email_content.php?val=$dataa2[sno]';
ancor.style.color = 'white';
ancor.style.textDecoration = 'none';
    var divsent = document.createElement('div');
    divsent.id = 'sentmail'+$i;
    if($i%2==0)
    {
    divsent.style.background = '#343d55';
    }
    else{
        divsent.style.background = '#292f45';
    }   
    divsent.style.width = '100%';
   divsent.style.height = '12%';
  divsent.style.border = 'none';
  divsent.style.zIndex = 1;
    sentdiv.appendChild(ancor);
    ancor.appendChild(divsent);
    var imgsent = document.createElement('img');
    imgsent.src = 'assets/student profiles/$school/$dataa4';
    imgsent.style.borderRadius = '50%';
    imgsent.style.position = 'absolute';
    imgsent.style.width = '8rem';
    imgsent.style.padding = '1%';
    imgsent.style.maxWidth = '15vw';
    imgsent.id = 'imgsent'+$i;
    var sentbr = document.createElement('br');
    var sentbr2 = document.createElement('br');
    var sentbr3 = document.createElement('br');
  
   
    
    
    var senttext1 = document.createTextNode('$sender');
   
    var senttext2 = document.createTextNode('$title');
    var senttext3 = document.createTextNode('$desc');
    var senttext4 = document.createTextNode('$time');
    var senttext5 = document.createTextNode('$date');
    var sentfont1 = document.createElement('font');
    var sentfont2 = document.createElement('font');
    var sentfont3 = document.createElement('font');
    var sentfont4 = document.createElement('font')
    var sentfont5 = document.createElement('font')
    sentfont3.style.whiteSpace = 'nowrap';
   
    sentfont4.style.float = 'right';
    sentfont5.style.float = 'right';
    
    var sentspan = document.createElement('div');
    sentspan.style.position = 'absolute';
    sentspan.style.left = '8rem';
    sentspan.style.width = '75%';
    sentspan.style.overflow = 'hidden';
    sentfont1.appendChild(senttext1);
    sentfont2.appendChild(senttext2);
    sentfont3.appendChild(senttext3);
    sentfont4.appendChild(senttext4);
    sentfont5.appendChild(senttext5);
    sentspan.appendChild(sentbr3);
    sentspan.appendChild(sentfont1);
   sentspan.appendChild(sentfont4);
   sentspan.appendChild(sentbr);
   sentspan.appendChild(sentfont2);
   sentspan.appendChild(sentfont5);
   sentspan.appendChild(sentbr2);
   sentspan.appendChild(sentfont3);
    divsent.style.fontFamily = 'century gothic';
    divsent.style.fontSize = 'min(3.5vw,1.5rem)';
    divsent.appendChild(imgsent);
    divsent.appendChild(sentspan);
   
     

    


if(width<=756)
{
    navigation.style.left = '-50%';
    sentdiv.style.left = 0;
   sentdiv.style.width = '100%';
   
    
   
}


</script>";
}

?>
<script>
document.getElementById("inbox").addEventListener("click",()=>{
maindiv.style.visibility = "visible";
sentdiv.style.visibility = "hidden";
trashdiv.style.visibility = "hidden";
})

document.getElementById("sent").addEventListener("click",()=>{
sentdiv.style.visibility = "visible";
maindiv.style.visibility = "hidden";
trashdiv.style.visibility = "hidden";
})

document.getElementById("trash").addEventListener("click",()=>{
trashdiv.style.visibility = "visible";
sentdiv.style.visibility = "hidden";
maindiv.style.visibility = "hidden";
})
</script>
</body>
</html>