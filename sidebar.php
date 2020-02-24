<?php
include('connect.php');
session_start();
$id = $_SESSION['id'];




?>

<head>
<script type="text/javascript" src="simple.js">
    

 var i=0,j=0,k=0;

/*DashBoard Sidebar */


  function toggleSidebar()
  {
alert("skdhfsd");
 if(!i) 
    {  
document.getElementById("m_sidebar").style.display="inline";
document.getElementById("dots").style.left="22%";
document.getElementById("dots").style.transition= "all 400ms linear";
document.getElementById("m_sidebar").style.transition= "all 400ms linear";
  i=1; 
    }
else
       {
document.getElementById("m_sidebar").style.display="none";
document.getElementById("dots").style.left="5px";
   i=0;
       }
  }



</script>

<style>

select{
width: 90px;
height: 30px;
border: none;
outline: none;
background-color: #fff;
font-weight: bold;
}

body {
    margin:0px;
    padding:0px;
    box-sizing:border-box;
    background:#33adff;
}
.main_sidebar {
    margin-top: 50px;
    min-height:100vh;
    position:fixed;
    top:0px;
    left:0;
    width:350px;
    transition: all 300ms cubic-bezier(0.65, 0.05, 0.36, 1);
    will-change: left, width;
    box-shadow: inset -1px 0 10px rgba(0, 0, 0, 0.4);
    background-color:#000;
    /* background-image:url("images/service.jpg");
    background-repeat: no-repeat; /* Do not repeat the image */
    /*background-size: cover; 
  */
}
.main_sidebar:after {
    content: '';
    /* background-image:url("images/service1.jpg");
    background-repeat: no-repeat; /* Do not repeat the image */
   /* background-size: cover; */
    position: absolute;
     background-color:#000;
    top: 0;
    z-index: -1;
    height: 100%;
    width: 58px;
}
.main_sidebar ul {
    list-style:none;
    padding-left: 60px;
}
.main_sidebar ul li {
    padding: 5px;
    color:#fff;
    display:block;
}

.main_sidebar ul li i {
    float:left;
    color:grey;
    margin-left:-58px;
    font-size:24px;
    padding-left:7px;
}
.main_sidebar ul li:hover {
    background:#;
}
.main_sidebar ul li :hover {
    color:#fff;
    text-decoration:none;
}
.main_sidebar ul li:hover i {
    color:#fff;
}
.main_sidebar ul li.active {
    background:#0f4698;
}
.main_sidebar ul li.active i {
    color:#fff;
}
.main_sidebar ul li.active:hover {
    background:#167696;
}
.main_sidebar ul li.active:hover i {
    color:#fff;
}

.main {
    color:#fff;
    width:100%;
    background:#fff;
    /*background-image:url("images/mainpic.jpg");
    background-repeat: no-repeat; /* Do not repeat the image */
    /*background-size: cover Resize the background image to cover the entire container */
    height:100%;
}


p{
    position: fixed;
    top: 0px;
    left: 0px;
}



    #main_content{
      position: absolute;
      top: 80px;
      left: 50%;
      height: 100%;
      //display: none;
    }

    .toggle-btn{
      position: absolute;
      top: 50px;
      left: 500px;
    }

    .toggle-btn span{
      display: block;
      width: 30px;
      height: 5px;
      background: #151719;
      margin: 3px 0px;
    }


    #m_sidebar{
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




 img{
    display: inline-block;
    width: 50%;

  }

.pages{
      position: absolute;
      top: 20%;
      left: 400px;
    }


</style>

<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>


<!------ Include the above in your HEAD tag ---------->

</head>
<div class="wrapper">
    <div id="m_sidebar">
    <aside class="main_sidebar">
        <ul>
<?php  

if($_SESSION['role'] == 'student')
{

  $qry = " Select * from student where s_sid = '$id'";
$res = mysql_query($qry);
$name =mysql_fetch_array($res);
echo '           <li><h3>Students Portal</h3></li>

               

             <li><img src="admin/s_images/'.$name['image'].'" alt="pic of student"></li>
          
          <li>User Name : '.$name['username'].'</li>

         <li>Name : '.$name['s_name'].'</li>
         <li>Class : CS - '.$name['s_batch'].' </li>
         <li>Year : '.$name['s_year'].' Year</li>
         <li>Date Of Birth : '.$name['s_dob'].'</li>
         <li>Phone Number : '.$name['s_ph'].'</li>';

}


if($_SESSION['role'] == 'teacher')
{

$qry = " Select * from teacher where t_id = '$id'";
$res = mysql_query($qry);
$name =mysql_fetch_array($res);

echo '<li><h3>Teachers Portal</h3></li>

            

            <li><img src="admin/t_images/'.$name['image'].'" alt="pic of Teacher"></li>';
          



          echo '
	 <li>Name : '.$name['t_id'].'</li>
         <li>Subjects: '.$name['t_subject'].' </li>
         <li>Year : '.$name['t_year'].' Year</li>
         <li>City : '.$name['t_city'].'</li>
         <li>Phone Number : '.$name['t_ph'].'</li>';

}
?>



        </ul>



    </aside>
</div>
       
    <div class="main">
        <p><?php   include('student_bar.php'); 
        ?></p>
    


    </div>
</div>
