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
table{
border-collapse:collapse;
border-spacing:0;
width:100%;
border:1px solid #ddd;
}
th,td{
text-align:left;
padding:16 px;
}
tr:nth-child(even){
background-color:#f2f2f2;
}
a{
text-decoration:none;
}
</style>
</head>
<body>
<div class="topnav">
<a href="tfeedback.html" class="active">BACK</a>
</div>
</body>
</html>
<?php

session_start();


$ar="Eldho P";
$pr="Jisha Abraham";
$an="Ani Sunny";
$di="Joby George";
$ni="Preethy";



//$con=mysql_connect("localhost","bca7165","bca7165")or die("couldn't connect to server".mysql_error($con));
//$db=mysql_select_db("db_bca7165",$con)or die("couldn't connect to server");
include("connect.php");
include ("student.bar");

if($ar==$name)
{

$query="select * from feedback where name='Eldho P'";
$result=mysql_query($query,$con)or die("couldn't connect to  server");

echo "<table border='1'>";

echo "<tr>";

echo "<th> Sno </th>";

echo "<th>  Name</th>";

echo "<th> Class Management</th>";

echo "<th>  Skills</th>";

echo "<th> Knowledge</th>";

echo "<th> Punchuality</th>";

echo "<th> Efficency</th>";

echo "<th> Comments</th>";

echo "</tr>";

echo "</tr>";

while($row=mysql_fetch_array($result))

{

echo "<tr>";

echo
"<td>",$row['Sno'],"</td><td>",$row['name'],"</td><td>",$row['cls_mang'],"</td><td>",$row['skills'],"</td><td>",$row['knowledge'],"</td><td>",$row['punchuality'],"</td><td>",$row['efficency'],"</td><td>",$row['comment'],"</td>";
echo "</tr>";
}
echo "</table>";



 
}

else if($pr==$name)
{

$query="select * from feedback where name='Jisha Abraham'";
$result=mysql_query($query,$con)or die("couldn't connect to  server");

echo "<table border='1'>";

echo "<tr>";

echo "<th> Sno </th>";

echo "<th>  Name</th>";

echo "<th> Class Management</th>";

echo "<th>  Skills</th>";

echo "<th> Knowledge</th>";

echo "<th> Punchuality</th>";

echo "<th> Efficency</th>";

echo "<th> Comments</th>";

echo "</tr>";

echo "</tr>";

while($row=mysql_fetch_array($result))

{

echo "<tr>";

echo
"<td>",$row['Sno'],"</td><td>",$row['name'],"</td><td>",$row['cls_mang'],"</td><td>",$row['skills'],"</td><td>",$row['knowledge'],"</td><td>",$row['punchuality'],"</td><td>",$row['efficency'],"</td><td>",$row['comment'],"</td>";
echo "</tr>";
}
echo "</table>";



  
}

if($an==$name)
{

$query="select * from feedback where name='Ani Sunny'";
$result=mysql_query($query,$con)or die("couldn't connect to  server");

echo "<table border='1'>";

echo "<tr>";

echo "<th> Sno </th>";

echo "<th>  Name</th>";

echo "<th> Class Management</th>";

echo "<th>  Skills</th>";

echo "<th> Knowledge</th>";

echo "<th> Punchuality</th>";

echo "<th> Efficency</th>";

echo "<th> Comments</th>";

echo "</tr>";

echo "</tr>";

while($row=mysql_fetch_array($result))

{

echo "<tr>";

echo
"<td>",$row['Sno'],"</td><td>",$row['name'],"</td><td>",$row['cls_mang'],"</td><td>",$row['skills'],"</td><td>",$row['knowledge'],"</td><td>",$row['punchuality'],"</td><td>",$row['efficency'],"</td><td>",$row['comment'],"</td>";
echo "</tr>";
}
echo "</table>";



 
}
if($di==$name)
{

$query="select * from feedback where name='Joby George'";
$result=mysql_query($query,$con)or die("couldn't connect to  server");

echo "<table border='1'>";

echo "<tr>";

echo "<th> Sno </th>";

echo "<th>  Name</th>";

echo "<th> Class Management</th>";

echo "<th>  Skills</th>";

echo "<th> Knowledge</th>";

echo "<th> Punchuality</th>";

echo "<th> Efficency</th>";

echo "<th> Comments</th>";

echo "</tr>";

echo "</tr>";

while($row=mysql_fetch_array($result))

{

echo "<tr>";

echo
"<td>",$row['Sno'],"</td><td>",$row['name'],"</td><td>",$row['cls_mang'],"</td><td>",$row['skills'],"</td><td>",$row['knowledge'],"</td><td>",$row['punchuality'],"</td><td>",$row['efficency'],"</td><td>",$row['comment'],"</td>";
echo "</tr>";
}
echo "</table>";




}

if($ni==$name)
{

$query="select * from feedback where name='Preethy'";
$result=mysql_query($query,$con)or die("couldn't connect to  server");

echo "<table border='1'>";

echo "<tr>";

echo "<th> Sno </th>";

echo "<th>  Name</th>";

echo "<th> Class Management</th>";

echo "<th>  Skills</th>";

echo "<th> Knowledge</th>";

echo "<th> Punchuality</th>";

echo "<th> Efficency</th>";

echo "<th> Comments</th>";

echo "</tr>";

echo "</tr>";

while($row=mysql_fetch_array($result))

{

echo "<tr>";

echo
"<td>",$row['Sno'],"</td><td>",$row['name'],"</td><td>",$row['cls_mang'],"</td><td>",$row['skills'],"</td><td>",$row['knowledge'],"</td><td>",$row['punchuality'],"</td><td>",$row['efficency'],"</td><td>",$row['comment'],"</td>";
echo "</tr>";
}
echo "</table>";



   
}
?>
