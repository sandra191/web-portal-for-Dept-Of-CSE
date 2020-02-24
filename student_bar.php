<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  .container-fluid{
    background-color: #000;
  }

</style>

  <title>Student Nav Bar</title>
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
     <!-- <a class="navbar-brand" href="#"><font color="white">Department Of Computer Science</font></a>-->
    </div>
    <ul class="nav navbar-nav">
       <li><a href="s_home.php">Back</a></li>
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="timetable.php">Time Table<span class="caret"></span></a>
        <ul class="dropdown-menu">
<br>
        <li>
          <?php

              $role = $_SESSION['role'];

              if($role == 'teacher')
                  echo '<a href="t_timetable.php">Daily Time Table</a>';

              if($role == 'student')
                  echo '<a href="timetable.php">Daily Time Table</a>';
              ?>
       </li>
          <li><a href="e_timetable.php">Exam Time Table</a></li>
          
        </ul>
      </li>



        

          <li>


            <?php

              $role = $_SESSION['role'];

              if($role == 'teacher')
                  echo '<a href="dem_file.php">';

              if($role == 'student')
                  echo '<a href="show_files.php">';

?>

Study Materials</a></li>

<li>
<?php

$role = $_SESSION['role'];

if($role == 'teacher')
  echo '<a href="teachernoti.php">';

if($role == 'student')
    echo '<a href="studentnoti.php">';

?>
  Notifications</a></li>

  <li>
 
 <?php

$role = $_SESSION['role'];

if($role == 'teacher')
  echo '<a href="ts_notif.php">';

if($role == 'student')
    echo '<a href="ss_notif.php">';

?>
Invidual Notifications</a></li> 
<li>
 
 <?php

$role = $_SESSION['role'];

if($role == 'teacher')
  echo '<a href="undefined.html">';

if($role == 'student')
    echo '<a href="../Online_e/sublist.php">';

?>
Quiz</a></li>       

  <li>
 
 <?php

$role = $_SESSION['role'];

if($role == 'teacher')
  echo '<a href="feedbacks.php">';

if($role == 'student')
    echo '<a href="feedbacks.php">';

?>
      <li><a href="about_us.php"></a></li>
      <li><a href="contact.php"></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">


      <li><a href="s_chpassword.php"><span class="glyphicon glyphicon-user"></span>Change Password</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
  

</body>
</html>
