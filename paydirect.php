<?php
 session_start();  
 $val = $_SESSION['user']; 
 $cl = $_SESSION['class'] ;
 $school = $_SESSION['school'] ;
 $con2 = mysqli_connect("localhost","root","","schools");
if($con2)
{

}
$dt = date('F');

$query = sprintf("select * from credentials where username= '$school'");
$connectt = mysqli_query($con2,$query);
$dataa = mysqli_fetch_assoc($connectt);
$schoolname = $dataa["name"];
$value = $_GET["sno"];
$con = mysqli_connect("localhost","root","","$school");
if($con)
{

}
$dt = date('F');

$query2 = sprintf("select * from {$cl}_{$val}_fee where sno= '$value'");
$connectt2 = mysqli_query($con,$query2);
$dataa2 = mysqli_fetch_assoc($connectt2);
$amt = $dataa2["amount"];
$period = $dataa2["period"];
?>

<html>
    <head>
        <title>Payment</title>
        <style>
            *{
                margin:0;
            }
            body{

                background:#161d30;
            }
            </style>
</head>
<body>
    <div style = "background:#292f45;position:fixed;height:8%;width:100%;">

        </div>
    <center>
        <br><br><br><br><br><br><br><br><br><br><br><br>
<form action="" method="POST" style = "background:#292f45;width:20%;height:40%;border-radius:7px;box-shadow:0 0 6px 3px black;">
<div style = "background:lightgrey;height:30%;width:100%;border-radius:7px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;">
<br>
<img id = "schoollogo">
<br>    
</div>
<br><br>
<font style = "font-family:century gothic;color:silver;font-size:min(2vw,2rem);)">
        <?php echo $val;?>
        </font><br><br>
        <font style = "font-family:century gothic;color:silver;font-size:min(2vw,1.5rem);)">
        <?php echo $period;?>
        </font><br><br>
        <font style = "font-family:century gothic;color:silver;font-size:min(2vw,1.5rem);)">
        <?php echo $amt;?>/-
        </font>
        <br><br><br><br>
       
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $dataa["secretid"];?>" // Enter the Test API Key ID generated from Dashboard ??? Settings ??? API Keys
    data-amount="1000" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ???299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="<?php 'OID'.rand(10,100).'END';?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Make Payment"
    
    data-name="<?php echo $schoolname;?>"
    data-description="School fee for the period of <?php echo $period;?>"
    
    data-prefill.name="<?php echo $val;?>"
    
    data-theme.color="#F37254"
></script>
       
<input type="hidden" custom="Hidden Element" name="hidden">

</form>
        </center>
</body>
<script>
    var logo = document.getElementById("schoollogo");
    logo.src = "assets/logo/<?php echo $dataa['logo'];?>";
    </script>
</html>