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
$query8= sprintf("select * from {$val}_chat");
$connectt8 = mysqli_query($con,$query8);

$i = 1;
while($dataa8 = mysqli_fetch_array($connectt8))
{
  echo "<script>
  let divv$i = document.createElement('div');
  divv$i.id = 'data+$i';
  divv$i.class = 'col-md-6';
  divv$i.style.background='white';
  divv$i.style.width='76rem';
  divv$i.style.maxWidth='83vw';
  divv$i.style.height='100px';
  divv$i.style.position='absolute';
  divv$i.style.left='5%';
  divv$i.style.top = '20px';
  divv$i.style.boxShadow='2px 2px 5px black';
  divv$i.style.borderRadius='10px';
  document.body.appendChild(divv$i);
  
  var txt$i = document.createTextNode('$dataa8[description]');
  divv$i.style.fontFamily='century gothic';
  divv$i.style.fontSize='min(4vw,3rem)';
  divv$i.style.paddingLeft = '15px';
  
 divv$i.appendChild(txt$i);
  
  
  </script>";
  $i++;
 
}
?>