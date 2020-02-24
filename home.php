
<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      

      $success = 0;
      if($_POST['role'] == 'student')
      {

      $sql_s = "SELECT s_sid FROM student WHERE username = '$myusername' and password = '$mypassword' and status='active'";
      $result_s = mysql_query($sql_s);
      
      if(mysql_num_rows($result_s))
      {
      $_SESSION['role'] = 'student';
      $row = mysql_fetch_array($result_s);
      
     $count = mysql_num_rows($result_s);


     $success = 1; 
      }

   }
   else
   {


     $sql_t = "SELECT t_id FROM teacher WHERE t_name = '$myusername' and t_password = '$mypassword'";
     $result_t = mysql_query($sql_t);
     $arr = mysql_fetch_array($result_t);
     $t = $arr[0];

      if(mysql_num_rows($result_t))
      {
      $_SESSION['role'] = 'teacher';
      $row = mysql_fetch_array($result_t);
      
      $count = mysql_num_rows($result_t);
      
      $success = 1;
      }


}      


     
      
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($success == 1)
      {
         if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         $_SESSION['id'] = $row['s_sid'];
         
         

         echo $_SESSION['id'];

         if($_SESSION['role'] == 'student')
         header("location: s_home.php");


            if($_SESSION['role'] == 'teacher')
            {
           $_SESSION['id'] = $t;   
         header("location: s_home.php");
            }


      }
   }
    else
    {
  ?>
 <script>
    
 
   

   
         alert("Your Login Name or Password is invalid");

      </script> 

      <?php     
      }
   }
?>



<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>

<style>
  body {
 background-image: url("service.jpg");
 font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;

}

img.avatar {
  width: 20%;
  border-radius: 30%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}




         .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 24px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: cyan;
  -webkit-transition: .4s;
  transition: .4s;
}


.slider:after{
   background-color: yellow;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: red;
  -webkit-transition: .4s;
  transition: .4s;
}
input:checked + .slider {
  background-color: #123;
}

input:focus + .slider {
  box-shadow: 0 0 1px #cde;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

</style>
<title> CSE Department Web Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Exchange Education a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chromagallery.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<!-- /fonts -->
<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<!-- /js files -->
</head>
<body id="index.html" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Top Bar -->
<section class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="#home.php" class="logo"><h1 style="font-family: CaptainMarvel;font-size: 45px;text-align: center"><b><br><br><br><br><br><br><center>&nbsp&nbspDEPARTMENT OF COMPUTER SCIENCE<br> AND ENGINEERING</b></center></h1></a>
			</div>
			<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<ul class="social-icons1">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>-->
		</div>
	</div>
</section>
<!-- /Top Bar -->
<!-- Navigation Bar -->
<div class="navbar-wrapper">
    <div class="container">
    <nav class="navbar navbar-inverse navbar-static-top cl-effect-21">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <a style="color: white"><button  class="btn btn-primary" onclick="document.getElementById('id01').style.display='block'" style="width:auto;color: white"><span style="align-items: right" class="glyphicon glyphicon-log-in"></span> Login</a></button></a>  
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">HOME</a></li>
               <!--  <li>  <a href="#about">ABOUT US</a></li>-->
                  <li> <a href="courses/courses.html">COURSES</a></li>
                  <li> <a href="faculties.html">FACULTIES</a></li>
                   <li><a href="#gallery">GALLERY</a></li>
                   <li><a href="forum">FORUM</a></li>
                   <li><a href="#contact">CONTACT US</a></li>
 <!--LOGIN-->

          </ul>
          
        </div>
      </div>
        </nav>
    </div>
</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="login.png" alt="User" class="avatar">
    <!--</div>-->


   <!-- <div class="container">-->
      <br>
      <label for="uname"><b>Username</b></label>
      <input type="text" size="30" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>


  <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active">
  <label class="btn btn-secondary">
    <input type="radio" name="role" id="option2" autocomplete="off" checked value="student" required> Student
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="role" id="option3" autocomplete="off" value="teacher" required>Teacher
  </label>
  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>&nbsp&nbsp&nbsp&nbsp
      
</div>
    </div>

   <!-- <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
  </form>
</div>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<!-- /Navigation Bar -->
<!-- Banner Section -->
 <!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
      <img class="first-slide" src="images/mace21.jpg" alt="First slide">
      <div class="container">
        <div class="carousel-caption">

        </div>
      </div>
        </div>
        <div class="item">
      <img class="second-slide" src="images/dept1.jpg" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">

        </div>
      </div>
        </div>
        <div class="item">
      <img class="third-slide" src="images/dept_back.jpg" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">

        </div>
      </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div><!-- /.carousel -->
<!-- /Banner Section -->
<!-- About Section -->
<section class="about-us" id="about">

<div>
    <marquee direction="left" scrollamount="8"> <u><b><h1>
<?php 
include('connect.php');

$query="select * from h_notifications";
$result=mysql_query($query);

$row=mysql_fetch_array($result);

echo $row['notification'];



 ?></h1></b></u></marquee>
 </div>

	<h3 style="font-family: raleway" class="text-center slideanim"><b>ABOUT US</b><br><br></h3>
  <!--<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="about-details">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <img src="images/mace_logo.jpeg" class="img-responsive slideanim" alt="about-img">
            </div>
            <div class="col-sm-10 col-xs-12">
              <div class="about-info slideanim" align="justify">
                <h3>About MACE<br></h3>
                <p>Mar Athanasius College of Engineering, popularly known as MACE, has been pioneering engineering education in Kerala since 1961 and is one of the top engineering institutions in the State. MACE finds immense pride in its strong and well-connected alumni network, spread across the globe, presiding over top positions in almost all fields, from Engineering to Corporate to Defense Services.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="about-details">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <!--<img src="images/cse.jpg" class="img-responsive slideanim" alt="about-img">-->
            </div>
            <div class="col-sm-10 col-xs-12">
              <div class="about-info slideanim" align="justify">
                <h3>About Department<br></h3>
                <p>Established in the year 1990, this was the first Department of Computer Science and Engineering under Mahatma Gandhi University.Since its inception the department has been producing computer engineers of high-calibre, who make the workforce in numerous blue chip companies like Google, Intel, Microsoft, CISCO, Siemens, Oracle, Infosys, Wipro, TCS, CTS and others. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--
    <div class="row below">
      <div class="col-lg-6 col-md-6">
        <div class="about-details">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <img src="images/about-img3.png" class="img-responsive slideanim" alt="about-img">
            </div>
            <div class="col-sm-10 col-xs-12">
              <div class="about-info slideanim">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="about-details">
          <div class="row">
            <div class="col-sm-2 col-xs-12">
              <img src="images/about-img4.png" class="img-responsive slideanim" alt="about-img">
            </div>
            <div class="col-sm-10 col-xs-12">
              <div class="about-info slideanim">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    -->
  </div>
</section>
<!-- /About Section -->
<!-- Our Services -->
<section class="our-services" id="services">
  <h3 style="font-family: raleway;text-align: left" class="text-center slideanim">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPRINCIPAL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp HEAD OF DEPARTMENT</h3>
  <!--<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="serv-details">
          <div class="row">
            <div class="col-sm-6 col-xs-6">
              <img width="200"src="images/princi.jpeg" alt="" class="img-responsive slideanim" align="middle">
            </div>
            <div class="col-sm-6 col-xs-6">
              <div class="serv-img-details slideanim">
                <h4 style="text-align: left;font-family: montserrat">Dr Mathew K</h4>
                <p style="text-align: left;font-family: montserrat">B.Tech, M.Tech, PhD</p>
              </div>
            </div>
          </div>
        </div>
        <div class="serv-info slideanim">
          <h4 style="color:white">SPECIALISATION:<br></h4>
          <p>Electronics and Communication<br>Electronic Design<br>Power Electronics</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="serv-details">
          <div class="row">
            <div class="col-sm-6 col-xs-6">
              <img width="200" src="images/hod.jpeg" alt="" class="img-responsive slideanim">
            </div>
            <div class="col-sm-6 col-xs-6">
              <div class="serv-img-details slideanim">
                <h4 style="text-align: left;font-family: montserrat">Dr. Surekha Mariam Varghese</h4>
                <p style="text-align: left;font-family: montserrat">B.Tech, M.Tech, PhD</p>
              </div>
            </div>
          </div>
        </div>
        <div class="serv-info slideanim">
          <h4 style="color:white">SPECIALISATION:<br></h4>
          <p>Operating System Security and Integrity</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="serv-details">
          <div class="row">
            <div class="col-sm-6 col-xs-6">
            <!--  <img src="images/serv-img3.jpg" alt="" class="img-responsive slideanim">-->
            </div>
            <div class="col-sm-11 col-xs-11">
              <div class="serv-img-details slideanim">
                <h3 style="color:white;font-family: montserrat">OUR MISSION</h3>
                <!--<p>Lorem Ipsum</p>-->
              </div>
            </div>
          </div>
        </div>
        <div class="serv-info slideanim" align="justify">
          <p>Provide quality education tuned to the challenging needs of technology to mould disciplined and socially committed engineers capable of professional leadership with emphasis on theoretical and practical knowledge, critical thinking as well as logical reasoning.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="serv-details">
          <div class="row">
            <div class="col-sm-6 col-xs-6">
              <!--<img src="images/serv-img4.jpg" alt="" class="img-responsive slideanim">-->
            </div>
            <div class="col-sm-11 col-xs-11">
              <div class="serv-img-details slideanim">
                <h3 style="color:white;font-family: montserrat">OUR VISION</h3>
                <!--<p>Lorem Ipsum</p>-->
              </div>
            </div>
          </div>
        </div>
        <div class="serv-info slideanim" align="justify">
          <p>Mould competent professionals to serve as valuable resource for the society in pursuit of excellence.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Our Services -->
<!-- Our Information -->
<section class="our-info">
  <h3 style="font-family: raleway;color:black" class="text-center slideanim"><b>OUR INFORMATION</b><br><br><br></h3>
  <!--<p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
  <div class="container">
    <div class="row info-part">
      <div class="col-lg-6 col-md-6 col-sm-6 info-specs">
        <div class="info-details slideanim" align="justify">
          <h4>Takshak</h4>
          <p>Takshak is the annual techfest of Mar Athanasius College of Engineering, Kothamangalam, one among the top range tech fests in South India. This year it will be on 11th and 12th October 2019.With a footfall of more than 20,000 across the span of two days, and an outreach to more than 500 colleges across India, the fest beholds the medley of a vast number of young minds, all together under the same roof. The fest also has a roster of diverse events like workshops, competitions, talks and exhibitions.</p>
          <h4>Sanskriti</h4>
          <p>Sanskriti is the annual arts fest of Mar Athanasius College of Engineering, Kothamangalam. Famous by the tagline "The Butterfly Sting", the fest promises the colors of spring, the celebrations of the best time of the year, throwing the minds wandering in the confines of classrooms into the glory of arts and culture. Sanskriti explores the real pulse of college life, and presents the artistic side of engineer to the world.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 info-specs">
        <img src="images/takshak_dept.jpeg" alt="" class="img-responsive main-img slideanim">
      </div>
    </div>
    <div class="info-pics">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-2 info-images">
            <img src="images/ISTE logo 2.jpg" alt="" class="img-responsive slideanim">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 info-images">
            <img src="images/nss_logo.jpeg" alt="" class="img-responsive slideanim">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 info-images">
            <img src="images/T'19_logo.jpg" alt="" class="img-responsive slideanim">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 info-images">
            <img src="images/sanskriti.jpg" alt="" class="img-responsive slideanim">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 info-images">
            <img src="images/csi_logo.jpg" alt="" class="img-responsive slideanim">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 info-images">
            <img src="images/ieee_mace.jpeg" alt="" class="img-responsive slideanim">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Our Information -->
<!-- Our Gallery -->
<section class="our-gallery" id="gallery">
  <h3 style="font-family: raleway"class="text-center slideanim">PHOTO GALLERY</h3>
 <!-- <p class="text-center slideanim">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
  <div class="container">
    <div class="content slideanim">
      <div class="chroma-gallery mygallery">
        <img src="images/gallery1.jpeg" alt="Click" data-largesrc="images/gallery1.jpeg">
        <img src="images/gallery2.jpeg" alt="Click" data-largesrc="images/gallery2.jpeg">
        <img src="images/gallery3.jpeg" alt="Click" data-largesrc="images/gallery3.jpeg">
        <img src="images/gallery4.jpeg" alt="Click" data-largesrc="images/gallery4.jpeg">
        <img src="images/p1.jpeg" alt="Click" data-largesrc="images/p1.jpeg">
        <img src="images/bevora.jpg" alt="Click" data-largesrc="images/bevora.jpg">
        <img src="images/gallery6.jpeg" alt="Click" data-largesrc="images/gallery6.jpeg">
        <img src="images/escala.jpg" alt="Click" data-largesrc="images/escala.jpg">
        <!--<img src="images/gallery-img8.jpg" alt="Click" data-largesrc="images/gallery-img8-8.jpg">-->
      </div>
    </div>
  </div>
</section>
<!-- /Our Gallery -->
<!-- Our Curriculum -->
<section class="curriculum" id="curriculum"> 
  <h3 style="font-family: raleway"class="text-center slideanim"><b>CURRICULUM</h3></b><br><br>
    <div class="row info-part">
     <div class="col-lg-12 col-md-12 col-sm-12 info-specs">
        <div class="info slideanim" align="centered">
  <p><h4 style="font-family: raleway"><b>Program Educational Objectives</h4><br></b>


PEO 1: Acquire knowledge appropriate to the discipline to outperform in professional education and career<br>

PEO 2: Excel in designing, implementing and evaluating computer based systems emphasizing quality, security, etiquette and ethics<br>

PEO 3: Engage in lifelong learning, career enhancement and adapt to appropriate   techniques and social needs<br>

PEO 4: Communicate effectively as a team and manage projects in multidisciplinary environments<br>

PEO 5: Enrich the society as responsible engineers through application of environmental ethics, reuse and minimal consumption of resources for sustainable <!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->development<br><br><br></p><p><h4 style="font-family: raleway"><b>Programme Specific Outcomes</h4></b>
<br>
PSO 1: Design, develop, implement and analyze algorithms and systems  for  computational problems using engineering, scientific and mathematical<!--&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbs-->pprinciples<br>

PSO 2: Exert problem solving capabilities using logical reasoning, heuristics and  brainstorming techniques<br>

PSO 3: Develop secure, ethical  and sustainable software  systems using modern tools in  software  carpentry
<br>
PSO 4: Compile acquired knowledge to take up challenges and manage critical scenarios, for the betterment of the society<br><br>

</p></div></div></div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="cur-details slideanim">
         <br> <h4 style="font-family: raleway" ><b>OUR IMPORTANT ASPECTS</h4></b>
          <div class="curriculum-info">
            <div><br><br>
              <i class="fa fa-fort-awesome"></i><br>
              <h5>Website Stays On Track</h5>
              <p class="cur2"></p>
            </div>
            <div><br><br>
              <i class="fa fa-book"></i><br>
              <h5>Bigger, Better Education</h5>
              <p class="cur2"></p>
            </div>
            <div><br><br>
              <i class="fa fa-graduation-cap"></i><br>
              <h5>Step Into Graduation</h5><br>
              <p class="cur2"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 slideanim">
        <div class="video">
         <!-- <iframe src="videos/B.Tech. Computer Science And Engineering.mp4" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
         <video height="400" width="600"controls>
          <source src="videos/B.Tech. Computer Science And Engineering.mp4" type="video/mp4">
          <source src="videos/B.Tech. Computer Science And Engineering.mp4" type="video/ogg">
             Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Our Curriculum -->
<!-- Google Map -->
  <!--<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 slideanim">
        <iframe class="googlemaps" src="https://www.google.co.in/maps/data=!3m1!4b1!4m5!3m4!1s0x3b07e6154a2133e5:0x2c26b2d532bb30ea!8m2!3d10.0540146!4d76.6185112" frameborder="0" style="border:0" allowfullscreen
          <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
        </iframe>
      </div>
    </div>
  </div>
</section>-->
<!-- Google Map -->
<section class="newlink">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 slideanim">
      <h1 style="font-family: raleway" class="text-center slideanim"><b>EMERGING TECHNOLOGIES<b></h1><br><br>
        <ul><li><center><a href="https://searchenterpriseai.techtarget.com/definition/AI-Artificial-Intelligence">Artificial Intelligence</a></center></li> <br>
          <li><center><a href="https://www.oracle.com/big-data/guide/what-is-big-data.html">Big Data</a></center></li><br>
            <li><center><a href="https://expertsystem.com/machine-learning-definition/">Machine Learning</a></center></li><br>
              <li><center><a href="https://www.realitytechnologies.com/augmented-reality/">Augmented Reality</a></center></li><br>
                <li><center><a href="https://www.marxentlabs.com/what-is-virtual-reality/">Virtual Reality</a></center></li><br>                 
                 <li><center><a href="https://www.nasa.gov/audience/forstudents/5-8/features/nasa-knows/what_is_robotics_58.html">Robotics</a></center></li><br>
                    <li><center><a href="https://www.blockchain.com/">Blockchain</a></center></li><br><br>

        </ul>
        <br><br>
        
      </div>
    </div>
  </div>
</section>
<section class="map">
  <h1 style="font-family: raleway"class="text-center slideanim"><b>LOCATE US<b></h1><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 slideanim">
        <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.5490927558367!2d76.61699471479469!3d10.054016892814134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07e6154a2133e5%3A0x2c26b2d532bb30ea!2sMar%20Athanasius%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1571485129803!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>  
    </div>
  </div>
</section>
<!-- /Google Map -->
<!-- Contact Section -->
<section class="our-contacts" id="contact">
  <h3 style="font-family: raleway" class="text-center slideanim">CONTACT US</h3>
  <p class="text-center slideanim">There are simpler ways for us to get in touch and answer your questions.</p>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form role="form">
          <div class="row">
            <div class="form-group col-lg-4 slideanim">
              <input type="text" class="form-control user-name" placeholder="Your Name" required/>
            </div>
            <div class="form-group col-lg-4 slideanim">
              <input type="email" class="form-control mail" placeholder="Your Email" required/>
            </div>
            <div class="form-group col-lg-4 slideanim">
              <input type="tel" class="form-control pno" placeholder="Your Phone Number" required/>
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12 slideanim">
              <textarea class="form-control" rows="6" placeholder="Your Message" required></textarea>
            </div>
            <div class="form-group col-lg-12 slideanim">
              <button type="submit" onclick="location.href='mailto:csmace2017@gmail.com';" class="btn-outline1">Submit</button>
             <!-- <button type="submit" href="mailto:csmace2017@gmail.com" class="btn-outline1">Submit</button>-->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- /Contact Section -->
<!-- Footer Section -->
<section class="footer">
  <h2 class="text-center">THANKS FOR VISITING US</h2>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 footer-left">
        <h4>Contact Information</h4>
        <div class="contact-info">
          <div class="address">
          <!--  <i class="glyphicon glyphicon-globe"></i>-->
            <p class="p3"><i class="glyphicon glyphicon-globe"></i>Mar Athanasius College of Engineering &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKothamangalam,Kerala - 686 666,India.</p>
            <!--<p class="p3"></p>-->
          </div>
          <div class="phone">
            <i class="glyphicon glyphicon-phone-alt"></i>
            <p class="p4">+91 485 2822363</p>
          </div>
          <div class="email-info">
            <i class="glyphicon glyphicon-envelope"></i>
            <p class="p4"><a href="mailto:office@mace.ac.in">office@mace.ac.in</a></p>
          </div>
        </div>
      </div><!-- col -->
     <div class="col-lg-2 footer-center">
       <!-- <h4>Newsletter</h4>
        <p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-4 control-label"></label>
            <div class="col-lg-10">
              <input type="email" class="form-control" id="inputEmail1" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="text1" class="col-lg-4 control-label"></label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="text1" placeholder="Your Name" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-10">
              <button type="submit" class="btn-outline">Sign in</button>
            </div>
          </div>
     </form> form 
     col --> </div>
      <div class="col-lg-2 footer-center">
        
      </div>
      <div class="col-lg-4 footer-right">
        <h4>Support Us</h4>
        <p>The department has been producing computer engineers of high-calibre, who make the workforce in numerous blue chip companies.</p>
        <ul class="social-icons2">
          <!--
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          -->
        </ul>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
  <hr>
  <div class="copyright">
    <p>© 2019 DPCSE. All Rights Reserved | Design by TRIPLE S</p>
  </div>
</section>
<!-- /Footer Section -->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- /Back To Top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js files for gallery -->
<script src="js/chromagallery.pkgd.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function()
    {
        $(".mygallery").chromaGallery();
    });
  </script>
<!-- /js files for gallery -->
<!-- Back To Top -->
<script src="js/backtotop.js"></script>
<!-- /Back To Top -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js files -->
</body>
</html>