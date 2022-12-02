<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduRecruit | One of the best recruitment portal |</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@300&display=swap');

        ::-webkit-scrollbar {
            width: 0px;
          
          }
    </style>
</head>
<body>
    <!----------------------------- navbar start------------------>
    <nav class="navbar navbar-expand-lg navbar-light" style = "width:100%;background:rgb(255,255,255,0.3);display:flex;position:fixed;z-index:5;left:0;height:10rem;" id = "navbarmain">
        <span class = "row" style = "width:70%;position:relative;left:15%;z-index:5;" id = "navbar" >
            <span class = "col-md-12">
        <a class="navbar-brand" href="#"><img src = "assets/logo/portallogo.png" style = "z-index:5;width:30%;"></a>
        <br>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style = "float:right;" id = "collapse">
          <span class="navbar-toggler-icon" ></span>
        </button>
        <br>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            
            <a class="nav-item nav-link" href="#"  style = "font-family:'Poppins', sans-serif; color:black;font-size:min(1.5vw,2rem);" id = "home1">Home 
            <a class="nav-item nav-link" href="#" style = "font-family:'Poppins', sans-serif; color:black;font-size:min(1.5vw,2rem);padding-left:10%;" id = "home2">Features</a>
            <a class="nav-item nav-link" href="#" style = "font-family:'Poppins', sans-serif; color:black;font-size:min(1.5vw,2rem);padding-left:10%;" id = "home3">Roadmap</a>
            <a class="nav-item nav-link " href="#" style = "font-family:'Poppins', sans-serif; color:black;font-size:min(1.5vw,2rem);padding-left:10%;" id = "home4">Pages</a>
            <a class="nav-item nav-link " href="#" style = "font-family:'Poppins', sans-serif; color:black;font-size:min(1.5vw,2rem);padding-left:10%;" id = "home5">Support</a>
            <a class="nav-item nav-link " style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,2rem);padding-left:10%;"> <span class = "	glyphicon glyphicon-adjust" style ="font-size:min(5vw,3rem);" id = "theme"></span></a>
          </div>
         <a href  ="login.php"><font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,2rem);padding-left:2%;border:1px solid black;border-radius:40px;margin-left:1%;padding-right:2%;padding-top:0.5%;padding-bottom:0.5%;float:right"  id = "home6"><center>Log-in</center></font></a> 
          <!---------switch start--------->
    
    
    
    <!---------switch end--------->
        </div>
        
</span>
</span>


      </nav>
<script>
    var width = window.screen.availWidth;
    var navbar = document.getElementById("navbar");
    var home = document.getElementById("home1");
    var signin = document.getElementById("home6");
    var navbarmain = document.getElementById("navbarmain");
    console.log(navbarmain);
    var paddingper = (navbar.offsetWidth/10)*4;
    console.log(paddingper);
    home.paddingLeft = paddingper+"px";
    if(width<=1000)
    { navbarmain.style.width = width+"px";
        navbar.style.left = 0;
        navbar.style.width = width+"px";
       home.style.paddingLeft="10%";
       signin.style.float="left";
     //  var collapse = document.getElementById("collapse");
   // collapse.addEventListener("click",()=>{
     //   if(navbar.style.background == "rgb(255,255,255,0.3)")
      //  {
      //  navbar.style.background = "rgb(255,255,255,1)";
       // }
       //else
       // {
       //     navbar.style.background="rgb(255,255,255,0.3)";
       // }

   // })
    }
</script>
<!-------------------------------navbar end----------------------->

<!-----------------------------------body top page till 100%------------------------------------->
<div style = "width:100%;height:100%;background-image:linear-gradient(180deg, rgb(62, 125, 255,0.2) 0%, rgba(62, 125, 255, 0) 100%);position:absolute;" id = "topbgdiv">
<img src = "assets/hero-shape-1.svg" id = "top-bg1">
<img src = "assets/hero-shape-2.svg" id = "top-bg2" style = "position:absolute;top:0;left:50%;width:50%;">

<span class = "row" style = "width:70%;justify-content:center;position:absolute;z-index:1;left:15%;top:20%;" id ="contentrow1">
<span class = "col-md-12">
  <center>
    <span class = "row" ïd = "contentrowsub" style = "width:45%;z-index:1;" >
    <span class = "col-md-12">
    <font id = "text0" style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,4rem);padding-left:4%;"><b> BEST AT THE MANAGEMENT  </b>  </font><br><br>
    <font  id = "text1" style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,2rem);padding-left:4%;">Proud to provide you wonderful services of student portal. Here, you’ll be able to create profiles,update data,provide assignments, track attendence and others aswell. We offer you services at very reasonable plan.Take a look around the site, and please don’t hesitate to send feedback or ask questions.</font>

<br><br><br>
    <button style = "border:none;padding:2%;border-radius:30px;padding-left:4%;padding-right:4%;background:rgb(62 125 255);color:white;font-size:min(3vw,2rem);font-family:'Poppins', sans-serif;">EXPLORE</button>
</span>

</span>
<br><br><br><br>
<!------------------------second half start-->
<hr><br>
<font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,4rem);padding-left:4%;" id = "text2" ><b> 20+ schools are using platform</b></font><br><br>
<div style = "width:100%;display:flex;">
    <span class = "row " id = "comapanyrow">
<span class = "col-md-2 "><img class = "img-responsive" src = "assets/uideck.svg" style = "width:90%;padding:1%;-webkit-filter: grayscale(100%); filter: grayscale(100%);max-width:30vw;"></span>
<span class = "col-md-2"><img class = "img-responsive" src = "assets/tailgrids.svg" style = "width:90%;padding:1%;-webkit-filter: grayscale(100%);filter: grayscale(100%);max-width:30vw;"></span>
<span class = "col-md-2"><img class = "img-responsive" src = "assets/lineicons.svg" style = "width:90%;padding-top:8%;-webkit-filter: grayscale(100%); filter: grayscale(100%);max-width:30vw;"></span>
<span class = "col-md-2"><img class = "img-responsive" src = "assets/ayroui.svg" style = "width:90%;padding:1%;-webkit-filter: grayscale(100%); filter: grayscale(100%);max-width:30vw;"></span>
<span class = "col-md-2"><img class = "img-responsive" src = "assets/plainadmin.svg" style = "width:90%;padding:8%;-webkit-filter: grayscale(100%); filter: grayscale(100%);max-width:50vw;"></span>
<span class = "col-md-2" ><img class = "img-responsive" src = "assets/plainadmin.svg" style = "width:90%;padding:8%;-webkit-filter: grayscale(100%);  filter: grayscale(100%);max-width:50vw;"></span>

</span>
</div>
<br>
<hr>
</center>  
</span>
</span>
</div>
<script>
    var topbg1 = document.getElementById("top-bg1");
    var topbg2 = document.getElementById("top-bg2");
    
    var height = window.screen.availHeight;
    var contentrow1 = document.getElementById("contentrow1");
    var contentrowsub = document.getElementById("contentrowsub");
    
   
    if(width<=800)
    {
topbg1.style.width = "100%";
topbg2.style.width = "100%";
topbg2.style.position="absolute";
topbg2.style.left = "0%";
topbg2.style.top=0;
contentrow1.style.width = "100%";

contentrow1.style.left = "0";

    }
</script>  
<!----------------------------second half end------------------------------->  
<!------------------------------------body top page till 100% end----------------------------------->
<!------------------------------------body med page from 100% till 200% start----------------------------------->
<span class = "row"style ="width:70%;position:absolute;left:15%;top:110%;" id = "mainrow2ndpage">
<span class = "row" style ="width:50%;position:relative;left:25%;"id = "mainrow2ndpage_child">
<span class = "col-md-12">
    <center>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,2rem);padding-left:4%;"id = "text3" >Our vision</font><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(7vw,4rem);padding-left:4%;"id = "text4" >Calling Attention</font><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,2rem);padding-left:4%;"id = "text5" >Making this software an outstanding solution to a significant problem in the educational system which will help improve the effectiveness and time management of the schools.</font>
    </center>
</span>

</span>
<p></p><p></p><p></p><p></p><p></p>
<span class = "row " id = "mainrow2ndpage_child2" style = "position:relative;">
    
<span class = "col-md-4">
    <center>
<div style = "width:20%;background:rgb(62 125 255);position:relative;border-radius:50%;border:20px solid rgb(62,125,255); " id = "feature1">
    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 1.66675L5 8.33341V18.3334C5 27.5834 11.4 36.2334 20 38.3334C28.6 36.2334 35 27.5834 35 18.3334V8.33341L20 1.66675ZM20 19.9834H31.6667C30.7833 26.8501 26.2 32.9667 20 34.8834V20.0001H8.33333V10.5001L20 5.31675V19.9834Z" fill="white"></path>
        </svg>

</div>
<font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,3rem);padding-left:4%;"id = "text6" >Safe & Secure</font><br>
<font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);padding-left:4%;"id = "text7" > The data stored in the system is completely secured and is

    immune to manipulation. Problem of data loss is solved.</font>
</center><br><br>

</span>
<span class = "col-md-4">
    <center>
        <div style = "width:20%;height:60%;background:rgb(62 125 255);position:relative;border-radius:50%;border:20px solid rgb(62,125,255); " id = "feature3">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.3333 9.99992H29.6999C29.8833 9.48325 29.9999 8.91658 29.9999 8.33325C29.9999 5.56659 27.7666 3.33325 24.9999 3.33325C23.2499 3.33325 21.7333 4.23325 20.8333 5.58325L19.9999 6.69992L19.1666 5.56659C18.2666 4.23325 16.7499 3.33325 14.9999 3.33325C12.2333 3.33325 9.99992 5.56659 9.99992 8.33325C9.99992 8.91658 10.1166 9.48325 10.2999 9.99992H6.66659C4.81659 9.99992 3.34992 11.4833 3.34992 13.3333L3.33325 31.6666C3.33325 33.5166 4.81659 34.9999 6.66659 34.9999H33.3333C35.1833 34.9999 36.6666 33.5166 36.6666 31.6666V13.3333C36.6666 11.4833 35.1833 9.99992 33.3333 9.99992ZM24.9999 6.66659C25.9166 6.66659 26.6666 7.41658 26.6666 8.33325C26.6666 9.24992 25.9166 9.99992 24.9999 9.99992C24.0833 9.99992 23.3333 9.24992 23.3333 8.33325C23.3333 7.41658 24.0833 6.66659 24.9999 6.66659ZM14.9999 6.66659C15.9166 6.66659 16.6666 7.41658 16.6666 8.33325C16.6666 9.24992 15.9166 9.99992 14.9999 9.99992C14.0833 9.99992 13.3333 9.24992 13.3333 8.33325C13.3333 7.41658 14.0833 6.66659 14.9999 6.66659ZM33.3333 31.6666H6.66659V28.3333H33.3333V31.6666ZM33.3333 23.3333H6.66659V13.3333H15.1333L11.6666 18.0499L14.3666 19.9999L18.3333 14.5999L19.9999 12.3333L21.6666 14.5999L25.6333 19.9999L28.3333 18.0499L24.8666 13.3333H33.3333V23.3333Z" fill="white"></path>
                </svg>
        </div>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,3rem);padding-left:4%;"id = "text10" >Practical approach</font><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);padding-left:4%;"id = "text11" >The administration can keep a track of teachers who are still in service and those who have retired.. Adding, retrieving, and maintaining  data can be done in a few clicks.</font>
        </center><br><br>
       
</span>
<span class = "col-md-4">
    <center>
        <div style = "width:20%;height:60%;background:rgb(62 125 255);position:relative;border-radius:50%;border:20px solid rgb(62,125,255); " id = "feature5">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33325L10.8334 18.3333H29.1667L20 3.33325Z" fill="white"></path>
                <path d="M29.1666 36.6667C33.3088 36.6667 36.6666 33.3089 36.6666 29.1667C36.6666 25.0246 33.3088 21.6667 29.1666 21.6667C25.0245 21.6667 21.6666 25.0246 21.6666 29.1667C21.6666 33.3089 25.0245 36.6667 29.1666 36.6667Z" fill="white"></path>
                <path d="M5 22.5H18.3333V35.8333H5V22.5Z" fill="white"></path>
                </svg>
        </div>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,3rem);padding-left:4%;"id = "text14" >Automation</font><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);padding-left:4%;"id = "text15" >Using automated emails to communicate with candidates is our idea for recruitment automation.</font>
        </center><br><br>
        
</span>
</span>


<span class = "row"  id = "mainrow2ndpage_child3" style = "position:relative;">
    
    <span class = "col-md-4">
        <center>
            <div style = "width:20%;height:60%;background:rgb(62 125 255);position:relative;border-radius:50%;border:20px solid rgb(62,125,255); " id = "feature4">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35 30V31.6667C35 33.5 33.5 35 31.6667 35H8.33333C6.48333 35 5 33.5 5 31.6667V8.33333C5 6.5 6.48333 5 8.33333 5H31.6667C33.5 5 35 6.5 35 8.33333V10H20C18.15 10 16.6667 11.5 16.6667 13.3333V26.6667C16.6667 28.5 18.15 30 20 30H35ZM20 26.6667H36.6667V13.3333H20V26.6667ZM26.6667 22.5C25.2833 22.5 24.1667 21.3833 24.1667 20C24.1667 18.6167 25.2833 17.5 26.6667 17.5C28.05 17.5 29.1667 18.6167 29.1667 20C29.1667 21.3833 28.05 22.5 26.6667 22.5Z" fill="white"></path>
                    </svg>
            </div>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,3rem);padding-left:4%;"id = "text12" >Calling Attention</font><br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);padding-left:4%;"id = "text13" >Making this software an outstanding
                solution to a significant problem in the educational system which will help improve the
                effectiveness and time management of the government.</font>
            </center>

    </span>

    <span class = "col-md-4">
        <center>
            <div style = "width:20%;height:60%;background:rgb(62 125 255);position:relative;border-radius:50%;border:20px solid rgb(62,125,255); " id = "feature2">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 24.9999H18.3333V21.6666H5V24.9999ZM5 31.6666H18.3333V28.3333H5V31.6666ZM5 18.3333H18.3333V14.9999H5V18.3333ZM5 8.33325V11.6666H18.3333V8.33325H5ZM21.6667 8.33325H35V31.6666H21.6667V8.33325Z" fill="white"></path>
                    </svg>
            </div>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,3rem);padding-left:4%;"id = "text8" >Going Completely Paperless</font><br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);padding-left:4%;"id = "text9" > Using a digital platform for management, the paper work and document piles can be significantly reduced.</font>
            </center>

    </span>
    <span class = "col-md-4">

        <center>
            <div style = "width:20%;height:60%;background:rgb(62 125 255);position:relative;border-radius:50%;border:20px solid rgb(62,125,255); " id = "feature6">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 13.3333C16.3167 13.3333 13.3333 16.3167 13.3333 20C13.3333 23.6833 16.3167 26.6667 20 26.6667C23.6833 26.6667 26.6667 23.6833 26.6667 20C26.6667 16.3167 23.6833 13.3333 20 13.3333ZM8.33333 25H5V31.6667C5 33.5 6.5 35 8.33333 35H15V31.6667H8.33333V25ZM8.33333 8.33333H15V5H8.33333C6.5 5 5 6.5 5 8.33333V15H8.33333V8.33333ZM31.6667 5H25V8.33333H31.6667V15H35V8.33333C35 6.5 33.5 5 31.6667 5ZM31.6667 31.6667H25V35H31.6667C33.5 35 35 33.5 35 31.6667V25H31.6667V31.6667Z" fill="white"></path>
                    </svg>
            </div>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,3rem);padding-left:4%;"id = "text16" >Real time tracking</font><br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);padding-left:4%;"id = "text17" >Software not only maintains the data for the teachers, but also shows their
                statistics and data graphically along with teacher’s current rank/ post and
                promotion status using an attractive flowchart design.</font>
            </center>

    </span>





</span>

</span>
<script>
    var mainrow2ndpage = document.getElementById("mainrow2ndpage");
    var mainrow2ndpage_child = document.getElementById("mainrow2ndpage_child");
    var mainrow2ndpage_child2 = document.getElementById("mainrow2ndpage_child2");
    var mainrow2ndpage_child3 = document.getElementById("mainrow2ndpage_child3");
 var comapanyrow = document.getElementById("comapanyrow");
 var comapanyrow_child = document.getElementById("comapanyrow_child");
console.log(comapanyrow.offsetHeight);
 mainrow2ndpage.style.top = comapanyrow.offsetTop*1.8+"px";
 
if(width<height)
{var feature1 = document.getElementById("feature1");
var feature2 = document.getElementById("feature2");
var feature3 = document.getElementById("feature3");
var feature4 = document.getElementById("feature4");
var feature5 = document.getElementById("feature5");
var feature6 = document.getElementById("feature6");
feature1.style.width = "25%";
feature2.style.width = "25%";
feature3.style.width = "25%";
feature4.style.width = "25%";
feature5.style.width = "25%";
feature6.style.width = "25%";
mainrow2ndpage.style.top = comapanyrow.offsetTop+comapanyrow.offsetHeight*2+"px";
//contentrowsub.style.float = "left";
//contentrowsub.style.width = "100%";
mainrow2ndpage.style.left = 15+"px";
mainrow2ndpage.style.width = width+"px";
mainrow2ndpage_child.style.left = "10px";
mainrow2ndpage_child.style.width = "100%";
mainrow2ndpage_child2.style.left = "15px";
mainrow2ndpage_child2.style.width = "100%";
mainrow2ndpage_child3.style.left = "15px";
mainrow2ndpage_child3.style.width = "100%";
    
}
</script>

<!------------------------------------body med page from 100% till 200% end----------------------------------->
<!------------------------------------body med page from 200% till 300% start----------------------------------->
<div style = "background: rgb(245 248 255);border-radius:5px;position:absolute;top:200%;left:15%;width:70%;height:auto;" id = "tokenrow">
<span class="row" >
<span class="col-md-6">
    <div id = "chart" style = "width:80%;height:100%;"></div>
    <script>
    var options = {
       

        series: [44, 55, 41, 17],
        
        chart: {
        type: 'donut',
        
      },
      stroke:{
        show: false,
        width:0
       },
       legend:{
show: false
       },
      colors:['rgb(35, 71, 185);', 'rgb(51, 99, 255)', 'rgb(139, 166, 255)','rgb(134, 150, 202)'],
      responsive: [{
        breakpoint: "100%",
        options: {
          chart: {
            width: "50%"
          },
          
        }
      }]
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    </script>
</span>
    
<span class="col-md-6">
    <br><br>
    <font style = "font-family:'Poppins', sans-serif; color:rgb(62,125,255);font-size:min(3vw,2rem);"id = "text18" ><b>Model</b></font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,4rem);"id = "text19" ><b>Our Model Interaction</b></font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text20" >It can

        take a form of one-to-many or many-to-
        many. The former is traditional value
        
        delivery, where we will directly solves
        customer problems. The latter implies
        that our company creates a platform
        where both end-providers and customers
        meet.</font>  
</span>

</span>
</div>
<img src = "assets/token-sale-shape.svg" style = "position:absolute;top:180%;right:0%;">



<!------------------------------------body med page from 200% till 300% end----------------------------------->
<!------------------------------------body med page from 300% till 400% start----------------------------------->
<span class = "row " style = "width:70%;position:absolute;left:15%;top:260%;" id = "roadmaprow">
<center>
<span class = "col-md-12 ">
<span class = "row " style = "width:50%;position:relative;" id = "roadmap_child">
<span class="col-md-12">
    <font style = "font-family:'Poppins', sans-serif; color:rgb(62,125,255);font-size:min(3vw,2rem);"id = "text21" ><b> Service</b></font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,4rem);"id = "text22" ><b>Our Services</b></font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text23" >Getting everything sorted right from recruitment to entire duration.</font>
</span>
</span>
<br><br><br><br><br><br><br><br>
<span class="row" style = "width:90%;position:relative;">
<span class="col-md-7" style = "border-right:1px solid black;" id = "timeline_child1">
    <div style = "background: rgb(245 248 255);border-radius:5px;;width:70%;height:100%;padding:30px;" id = "timeline1">
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2rem);float:right;"id = "text24" ><b>Email Automation</b></font><br><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);float:right;"id = "text25" >Using automated emails to communicate with candidates is an idea for recruitment automation</font>
    </div>
</span>
<span class="col-md-5"></span>

</span>



<br><br>
<span class="row" style = "width:90%;position:relative;">
    <span class="col-md-5">
        
    </span>
    <span class="col-md-7" style = "border-left:1px solid black;" id = "timeline_child2">
        <div style = "background: rgb(245 248 255);border-radius:5px;;width:70%;height:100%;padding:30px;" id = "timeline2" >
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2rem);float:left;"id = "text26" ><b>Promotion Status</b></font><br><br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);float:left;"id = "text27" >Promoting teachers based on their performance graph in the current recruited organization</font>
        </div>
    </span>
    
   
    </span>


    <br><br>
    <span class="row" style = "width:90%;position:relative;">
        <span class="col-md-7" style = "border-right:1px solid black;" id = "timeline_child3">
            <div style = "background: rgb(245 248 255);border-radius:5px;;width:70%;height:100%;padding:30px;" id = "timeline3" >
                <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2rem);float:right;"id = "text28" ><b>Managing Transfers</b></font><br><br>
                <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);float:right;"id = "text29" >Organizing transfers of teacher based on their tenure and available vacancy</font>
            </div>
        </span>
        <span class="col-md-5"></span>
        
        </span>
        
        
        <br><br>
        <span class="row" style = "width:90%;position:relative;">
            <span class="col-md-5">
                
            </span>
            <span class="col-md-7" style = "border-left:1px solid black;" id = "timeline_child4">
                <div style = "background: rgb(245 248 255);border-radius:5px;;width:70%;height:100%;padding:30px;" id = "timeline4" >
                    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2rem);float:left;"id = "text30" ><b>Real Time Recruitment Updates</b></font><br><br>
                    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);float:left;"id = "text31">Informing teachers the latest updates provided by head of the organization and the govt.</font>
                </div>
            </span>
            
            </span>
            
            </span>
</center>
</span>


<script>

   
    var tokenrow = document.getElementById("tokenrow");
    var roadmaprow = document.getElementById("roadmaprow");
    var roadmaprow_child = document.getElementById("roadmaprow_child");
   tokenrow.style.top = mainrow2ndpage.offsetTop+mainrow2ndpage.offsetHeight+200+"px";
   roadmaprow.style.top = tokenrow.offsetTop+tokenrow.offsetHeight+200+"px";
  

</script>
<!------------------------------------body med page from 300% till 500% end----------------------------------->
<!------------------------------------body med page from 500% till 600% end----------------------------------->
<span class = "row " style = "width:70%;position:absolute;left:15%;top:380%;" id = "teamrow">
    <center>
    <span class = "col-md-12 ">
    <span class = "row " style = "width:50%;position:relative;" id = "teamrow_child1">
    <span class="col-md-12">
        <font style = "font-family:'Poppins', sans-serif; color:rgb(62,125,255);font-size:min(3vw,2rem);"id = "text32"><b>   Our Team</b></font><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,4rem);"id = "text33"><b>Meet Our Team</b></font><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text34">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed congue arcu, In et dignissim quam condimentum vel.</font>
    </span>
    </span>
    <br><br><br><br>
    <span class="row" style = "width:100%;position:relative;" id = "teamrow_child2">
<span class="col-md-2">
    <div style = "border-radius:5px;background:rgb(245 248 255);padding:20px;" id ="profile1"><img src = "assets/profile-img.jpg" style = "width:100%;border-radius:5px;">
        <br><br> <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(2vw,1.7rem);"id = "text35">Matheus Ferrero</font><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.5rem);"id = "text36"> Marketing Expert</font>
    </div>
</span>
<span class="col-md-2"> <div style = "border-radius:5px;background:rgb(245 248 255);padding:20px;" id ="profile2"><img src = "assets/profile-img.jpg" style = "width:100%;border-radius:5px;">
    <br><br> <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text37">Matheus Ferrero</font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.5rem);"id = "text38"> Marketing Expert</font>
</div></span>
<span class="col-md-2"> <div style = "border-radius:5px;background:rgb(245 248 255);padding:20px;" id ="profile3"><img src = "assets/profile-img.jpg" style = "width:100%;border-radius:5px;">
    <br><br> <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text39">Matheus Ferrero</font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.5rem);"id = "text40"> Marketing Expert</font>
</div></span>
<span class="col-md-2"> <div style = "border-radius:5px;background:rgb(245 248 255);padding:20px;" id ="profile4"><img src = "assets/profile-img.jpg" style = "width:100%;border-radius:5px;">
    <br><br> <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text41">Matheus Ferrero</font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.5rem);" id = "text80"> Marketing Expert</font>
</div></span>
<span class="col-md-2"> <div style = "border-radius:5px;background:rgb(245 248 255);padding:20px;" id ="profile5"><img src = "assets/profile-img.jpg" style = "width:100%;border-radius:5px;">
    <br><br> <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text42">Matheus Ferrero</font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.5rem);"id = "text43"> Marketing Expert</font>
</div></span>
<span class="col-md-2"> <div style = "border-radius:5px;background:rgb(245 248 255);padding:20px;" id ="profile6"><img src = "assets/profile-img.jpg" style = "width:100%;border-radius:5px;">
    <br><br> <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text44">Matheus Ferrero</font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.5rem);"id = "text45"> Marketing Expert</font>
</div></span>
</span>
</span>
</center>
</span>

<!------------------------------------body med page from 500% till 600% end----------------------------------->

<div style = "background:rgb(245 248 255);width:100%;position:absolute;top:450%;" id = "faq">
    <span class = "row" style = "width:70%;position:relative;left:15%;"id = "faq_child">
        <center>
        <span class = "col-md-12 ">
        <span class = "row " style = "width:50%;position:relative;" >
        <span class="col-md-12">
            <br><br><br>
            <font style = "font-family:'Poppins', sans-serif; color:rgb(62,125,255);font-size:min(3vw,2rem);"id = "text46"><b>     FAQ</b></font><br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,4rem);"id = "text47"><b>Frequently Asked Questions</b></font><br><br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(3vw,1.7rem);"id = "text48">GETTING STARTED WITH OUR SERVICES?</font>
            </span></span> <br><br><br> <br><br><br></center>
            <div style = "height:50px;overflow:hidden;" id = "faq1">
        <div style = "background:white;border-radius:5px;width:100%;position:relative;" id = "faq_child1"> 
            <br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(2.5vw,1.6rem);"id = "text49"><b>How can I turn on my Email notifications?</b> </font>
            <span class="glyphicon glyphicon-menu-down" style = "float:right;padding-right:20px;" id = "arrow1"></span>
            <br><br>

            <font style = "font-family:'Poppins', sans-serif; color:black;"id = "text50">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</font>

        </div>
    </div>
        <p></p><p></p> 
        <div style = "height:50px;overflow:hidden;" id = "faq2">
        <div style = "background:white;border-radius:5px;width:100%;" id = "faq_child2"> 
            <br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(2.5vw,1.6rem);"id = "text51"><b>Facing login technicalities?</b> </font>
            <span class="glyphicon glyphicon-menu-down"  style = "float:right;padding-right:20px;"  id = "arrow2"></span>
            <br><br>

            <font style = "font-family:'Poppins', sans-serif; color:black;"id = "text52"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</font>

        </div>
    </div>
        <p></p><p></p> 
        <div style = "height:50px;overflow:hidden;" id = "faq3">
        <div style = "background:white;border-radius:5px;width:100%;" id = "faq_child3"> 
            <br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(2.5vw,1.6rem);"id = "text53"><b>How can I participate in the ICO Token sale?</b> </font>
            <span class="glyphicon glyphicon-menu-down"  style = "float:right;padding-right:20px;"  id = "arrow3"></span>
            <br><br>
           
            <font style = "font-family:'Poppins', sans-serif; color:black;"id = "text54">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</font>
        </div>
        </div>

        <p></p><p></p> 
        <div style = "height:50px;overflow:hidden;" id = "faq4">
        <div style = "background:white;border-radius:5px;width:100%;" id = "faq_child4"> 
            <br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(2.5vw,1.6rem);"id = "text55"><b>How can I participate in the ICO Token sale?</b> </font>
            <span class="glyphicon glyphicon-menu-down"  style = "float:right;padding-right:20px;"  id = "arrow4"></span>
            <br><br>

            <font style = "font-family:'Poppins', sans-serif; color:black;"id = "text56"> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</font>

        </div>

</div>
        <p></p><p></p> <p></p><p></p> <p></p><p></p> <p></p><p></p> <p></p><p></p> 

        
        </span></span>

</div>
<script>
var arrow1 = document.getElementById("arrow1");
var arrow2 = document.getElementById("arrow2");
var arrow3 = document.getElementById("arrow3");
var arrow4 = document.getElementById("arrow4");
var faq1 = document.getElementById("faq1");
var faq2 = document.getElementById("faq2");
var faq3 = document.getElementById("faq3");
var faq4 = document.getElementById("faq4");
arrow1.addEventListener("click",()=>{
  if(faq1.style.overflow == "hidden")
{faq1.style.overflow = "visible";
arrow1.style.transform = "rotate(180deg)";
arrow1.style.paddingRight = 0;
arrow1.style.paddingLeft = "20px";
faq1.style.zIndex = 4;
}
else{
    faq1.style.overflow = "hidden"
    arrow1.style.transform = "rotate(0deg)";
arrow1.style.paddingLeft = 0;
arrow1.style.paddingRight = "20px";
}
})

arrow2.addEventListener("click",()=>{
    if(faq2.style.overflow == "hidden")
  {faq2.style.overflow = "visible";
  arrow2.style.transform = "rotate(180deg)";
  arrow2.style.paddingRight = 0;
  arrow2.style.paddingLeft = "20px";
  faq2.style.zIndex = 3;  
}
  else{
      faq2.style.overflow = "hidden"
      arrow2.style.transform = "rotate(0deg)";
  arrow2.style.paddingLeft = 0;
  arrow2.style.paddingRight = "20px";
  }
  })

  arrow3.addEventListener("click",()=>{
    if(faq3.style.overflow == "hidden")
  {faq3.style.overflow = "visible";
  arrow3.style.transform = "rotate(180deg)";
  arrow3.style.paddingRight = 0;
  arrow3.style.paddingLeft = "20px";
  faq3.style.zIndex = 2;
  }
  else{
      faq3.style.overflow = "hidden"
      arrow3.style.transform = "rotate(0deg)";
  arrow3.style.paddingLeft = 0;
  arrow3.style.paddingRight = "20px";
  }
  })
  
  
  arrow4.addEventListener("click",()=>{
    if(faq4.style.overflow == "hidden")
  {faq4.style.overflow = "visible";
  arrow4.style.transform = "rotate(180deg)";
  arrow4.style.paddingRight = 0;
  arrow4.style.paddingLeft = "20px";
  faq4.style.zIndex = 1;
  }
  else{
      faq4.style.overflow = "hidden"
      arrow4.style.transform = "rotate(0deg)";
  arrow4.style.paddingLeft = 0;
  arrow4.style.paddingRight = "20px";
  }
  })  

    
</script>





<div style = "background:white;width:100%;position:absolute;top:540%;bottom:0;" id = "footer">
    <br><br><br><br><br><br><br><br><br>
    <img src = "assets/footer-shape-2.svg" style = "position:absolute;"> 
    <span class = "row " style = "width:80%;position:relative;left:10%;" id = "footer_main_row">
     <center>
        <span class = "col-md-12 ">
            <span class = "row ">
            <span class = "col-md-4 ">
                <img src = "assets/logo.png" style = "z-index:2;float:left;" id = "footerlogo"><br><br><br><br>
                <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text57">A SMART INDIA HACKATHON PROJECT </font>
</span>


<span class = "col-md-2 "><center>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2.5rem);"id = "text58"> <b>Quick Links</b></font><br><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text59">What is ico</font><br><br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text60">Roadmap</font><br><br>
                <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text61">Whitepaper</font><br><br>
                    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text62">Social Network</font><br><br>
                        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text63">Join Us Now</font><br><br>
                    </center>
</span>

<span class = "col-md-2">
    <center>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2.5rem);"id = "text64"> <b>Quick Links</b></font><br><br>
        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text65">What is ico</font><br><br>
            <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text66">Roadmap</font><br><br>
                <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text67">Whitepaper</font><br><br>
                    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text68">Social Network</font><br><br>
                        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text69">Join Us Now</font>
                    </center>
</span>
<span class = "col-md-2">
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2.5rem);"id = "text70"> <b>Our Location</b></font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text71">401 Broadway, 24th Floor, Orchard Cloud View, London</font><br><br><br><br>



    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2.5rem);"id = "text72"> <b>Phone Number</b></font><br>
<font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text73">+990 846 73644</font><br>

    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text74">+550 9475 4543</font><br>
</span>


<span class = "col-md-2 ">
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2.5rem);"id = "text75"> <b> Email Address</b></font><br>
    <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text76">info@yourdomain.com</font><br>

        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text77">contact@yourdomain.com</font><br><br><br><br>



        <font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,2.5rem);"id = "text78"> <b>How Can We Help?</b></font><br>
<font style = "font-family:'Poppins', sans-serif; color:black;font-size:min(8vw,1.6rem);"id = "text79">Tell us your problem we will get back to you ASAP.</font><br>
</span>



            </span></span></span>
        
 <img src = "assets/footer-shape-1.svg" style = "position:absolute;bottom:0;left:90%;width:10%;" id = "footershape2">       
        </div>



        <script>
           // var svg2 = document.getElementById("footershape2");
            //svg2.style.left = "100%";
            var teamrow = document.getElementById("teamrow");
            var teamrow_child1 = document.getElementById("teamrow_child1");
            var teamrow_child2 = document.getElementById("teamrow_child2");
            var footer = document.getElementById("footer");
            var footer_main_row = document.getElementById("footer_main_row"); 
            teamrow.style.top = roadmaprow.offsetTop+roadmaprow.offsetHeight+200+"px";
            var faq = document.getElementById("faq");
            var faq_child = document.getElementById("faq_child");
            faq.style.top = teamrow.offsetTop+teamrow.offsetHeight+100+"px";
        footer.style.top = faq.offsetTop+faq.offsetHeight+"px";
var theme = document.getElementById("theme");
var topbgdiv = document.getElementById("topbgdiv");
var a = 1;
theme.addEventListener("click",()=>{
if(a%2!=0)
{
navbarmain.style.background = "rgb(19,27,77,0.3)";
topbgdiv.style.backgroundImage =  "linear-gradient(180deg, rgb(8 3 33) 0%,rgba(62, 125, 255, 0) 100%)";
document.body.style.background = "rgb(8 3 33)";

for(x = 0;x<=80;x++)
{window['text' + x]= document.getElementById("text"+x).style.color = "white";

}

tokenrow.style.background = "rgb(20 16 44)";
for(x = 1;x<=4;x++)
{window['timeline' + x]= document.getElementById("timeline"+x).style.background = " rgb(19 27 77)";

}
for(x = 1;x<=4;x++)
{window['faq_child' + x]= document.getElementById("faq_child"+x).style.background = " rgb(19 27 77)";

}
for(x = 1;x<=6;x++)
{window['profile' + x]= document.getElementById("profile"+x).style.background = " rgb(19 27 77)";

}

for(x = 1;x<=6;x++)
{window['home' + x]= document.getElementById("home"+x).style.color = "white ";

}
faq.style.background = "rgb(20,16,44,0.7)";
theme.style.color = "white";
footer.style.background = "rgb(19 27 77)";
signin.style.border = "1px solid white";
document.getElementById("timeline_child1").style.borderRight = "1px solid white";
document.getElementById("timeline_child2").style.borderLeft = "1px solid white";
document.getElementById("timeline_child3").style.borderRight = "1px solid white";
document.getElementById("timeline_child4").style.borderLeft = "1px solid white";
}
else{
    navbarmain.style.background = "rgb(255,255,255,0.3)";
    topbgdiv.style.backgroundImage =  "linear-gradient(180deg, rgb(62, 125, 255,0.2) 0%, rgba(62, 125, 255, 0) 100%)";
    document.body.style.background = "white";
    
    for(x = 0;x<=80;x++)
    {window['text' + x]= document.getElementById("text"+x).style.color = "black";
    
    }
    
    tokenrow.style.background = "rgb(245 248 255)";
    for(x = 1;x<=4;x++)
    {window['timeline' + x]= document.getElementById("timeline"+x).style.background = " rgb(245 248 255)";
    
    }
    for(x = 1;x<=6;x++)
    {window['profile' + x]= document.getElementById("profile"+x).style.background = " rgb(245 248 255)";
    
    }
    for(x = 1;x<=4;x++)
{window['faq_child' + x]= document.getElementById("faq_child"+x).style.background = "white";

}
    for(x = 1;x<=6;x++)
    {window['home' + x]= document.getElementById("home"+x).style.color = "black ";
    
    }
    faq.style.background = "rgb(245 248 255)";
    theme.style.color = "black";
    footer.style.background = "white";
    signin.style.border = "1px solid black";
    document.getElementById("timeline_child1").style.borderRight = "1px solid black";
    document.getElementById("timeline_child2").style.borderLeft = "1px solid black";
    document.getElementById("timeline_child3").style.borderRight = "1px solid black";
    document.getElementById("timeline_child4").style.borderLeft = "1px solid black";
}

a++;
})

if(width<=800)
{var footershape2 = document.getElementById("footershape2");
footershape2.style.left = "58%";


teamrow.style.left = "15px";
teamrow.style.width = width+"px";
teamrow_child1.style.left = 0;
teamrow_child1.style.width = "100%";


roadmaprow.style.left = "15px";
roadmaprow.style.width = width+"px";
roadmap_child.style.left = 0;
roadmap_child.style.width = "100%";

faq.style.left = "5px";
faq.style.width = "100%";
faq_child.style.left = "15px";
faq_child.style.width = "100%";
footer_main_row.style.left = "15px";
footer_main_row.style.width = "100%";
teamrow.style.top = roadmaprow.offsetTop+roadmaprow.offsetHeight+200+"px";
}
        </script>

</body>
</html>