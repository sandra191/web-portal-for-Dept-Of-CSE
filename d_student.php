<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="simple.js">
 

</script>


  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */


    #main_content{
      position: absolute;
      top: 0px;
      left: 40%;
      height: 100%;
      //display: none;
    }

    .toggle-btn{
      position: absolute;
      top: 15px;
      left: 23%;
    }

    .toggle-btn span{
      display: block;
      width: 30px;
      height: 5px;
      background: #151719;
      margin: 3px 0px;
    }


    #navig{
      display: block;
    }

    .row.content {height: 1500px;
      }
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      width: 20%;
      position: fixed;
      z-index: 2;
      transition: all 400ms linear;
    }

    .cntnt{
      position: absolute;
      left: 26%;
      z-index: 1;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }

   #l1,#l2{
    display: none;
   }

   .litems1 li{
     list-style-type: none;
     text-align: center;
     color: white;
     border-bottom: none;
   }


   .pages{
      position: absolute;
      top: 0px;
      left: 30%;
    }
   
  img{
    display: inline-block;
    width: 50%;

  }

  </style>
</head>
<body>

<?php
include('connect.php');
//include('student.php');
session_start();
$id = $_SESSION['id'];
echo $id;
//$id = 2201;
$qry = " Select s_name,s_batch,s_year,image from student where s_sid = '$id'";
$res = mysql_query($qry);

if(!$res)
echo "sfkjdsjhbgf";

$name = mysql_fetch_array($res);

?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav" id="navig">
      
      <h4>Student's Portal</h4>

        

      <ul class="nav nav-pills nav-stacked">
<?php   echo $_SESSION['id'];

        echo '     <li><img src="images/'.$name['image'].'" alt="pic of student"></li>

         <li>Name : '.$name['s_name'].'</li>
         <li>Class : CS - '.$name['s_batch'].' </li>
         <li>Year : '.$name['s_year'].' Year</li>';
?>
<hr> 

        <li><a href="#main_content">
      
          Home</a></li>
        <li><a href="#section2">
          <div class="dropdown" onclick="see1()" >
          Time Tables<span class="caret" onmouseover="see1()" onmouseout="see1()"></span>
        </div>
      </a></li>


      <ul class="litems1" id="l1">
        <li><a href="e_timetable.php">Exam Timetable</a></li>
        <li><a href="timetable.php">Daily Timetable</a></li>
      </ul>
      

                               
        <li><a href="courses.php">
                   Courses<span class="caret"></span></a></li>
        

        <li><a href="#section3">
          <div class="dropdown" onclick="see2()" >
            Study Materials<span class="caret" onmouseover="see2()" onmouseout="see2()"></span></div></a></li>
          
          <ul class="litems1" id="l2">
        <li><a href="Study_Materials/dem_file.php">Upload</a></li>
        <li><a href="Study_Materials/show_files.php">Download</a></li>
      </ul>

      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search something..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>



    </div>

<div class="toggle-btn" onclick="toggleSidebar()" id="dots" onmouseover="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
      </div>



<div id="main_content">


  
</div>



  </div>

</div>
</body>
</html>