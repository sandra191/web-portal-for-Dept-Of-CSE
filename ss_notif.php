
<?php include('sidebar.php');?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
</head>
<body>
<div class = "pages">
<?php

include('connect.php');

$id = $_SESSION['id'];
$qry = "Select * from special_noti where id = '$id'";
$res = mysql_query($qry);



echo '<div class="table-responsive"><table class="table table-bordered table-hover">

<th>Notification</th><th>Teacher</th>';
/*echo '<div class="table-responsive"><table class="table table-bordered table-hover">

<th>Teacher</th>';*/

while($row=mysql_fetch_array($res)) {
	



echo "<tr>";


echo "<td>",$row['teacher'],"</td><td>",$row['noti'],"</td>";

echo "</tr>";
}
echo '</table></div>';

?>


</div>
</body>
</html>