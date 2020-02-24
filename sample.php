 <html>
<head>
<style>
.topnav 
{
background-color: #FFFAC0;
overflow: hidden;
}
.topnav a
{
float: left;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 14px;
}
.topnav a: hover
{
background-color: #ddd;
color:black;
}
.topnav a.active
{
background-color: red;
color: white;
}
.header
{
overflow: hidden;
background-color: #F0FFF0;
padding:5px 5px;
}
.footer
{
overflow: hidden;
background-color: #F0FFF0;
padding:5px 5px;
}

</style>
</head>
<body>

<div class="topnav">
<a href="sample.php" class="active">HOME</a>
<a href="link1.html">LOGIN</a>
<a href="logincheck.html">REGISTRATION</a>
<a href="admin.html"> ADMIN LOGIN </a>
</div>
<center>

<div class="header">
<h1><marquee direction="right" scrollamount="990"> <u> <font face="bookman" color="red"> DEPT OF COMPUTER SCIENCE </font></u></marquee></u></h1></center>
</div>
<div>
<marquee direction="left" scrollamount="8"> <u><b><a href="miii.html">
<?php 
include('connect.php');

$query="select * from event";
$result=mysql_query($query,$con);

$row=mysql_fetch_array($result);

echo $row['info'];



 ?></a></b></u></marquee>
</div> 
<IMG src="nirmala.jpeg" style="width:100%">
<div class ="footer">
<center><B>For More Details<a href="CONTACT.HTML"> Contacts</a></B></center></div>
</body>
</html>


