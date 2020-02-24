<?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      

      $success = 0;
      if(isset($_POST['role']))
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
<html>
   
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
  height: 17px;
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



<script type="text/javascript">
  
  var i=0;

function see{
  {
    alert("jgdds");
 if(!i) 
    {  
document.getElementById("login").style.display="inline";
i=1; 
    }
else
       {
document.getElementById("login").style.display="none";
   i=0;
       }
  }


</script>

  <style type="text/css">
    
    {
      position: fixed;
      top: 0px;
    }
  </style>
  <title>Home Nav Bar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>
    
      <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-log-in" onclick="see()"></span> Login</a></button></li>
    
  </div>
</nav>




<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="login.png" alt="User" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
<label class="switch">
                                      <input type="checkbox" checked name="role">
                                       <span class="slider"></span>
                                    </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
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


</body>
</html>






  
