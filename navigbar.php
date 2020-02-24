<!DOCTYPE html>
<html lang="en">
<head>

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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><font color="white">Department Of Computer Science</font></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
   
      <li><a href="#about_form">About Us</a></li>
      <li><a href="#contact_form">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in" onclick="see()"></span> Login</a></li>
    </ul>
  </div>
</nav>
  

</body>
</html>
