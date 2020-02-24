
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
$qry = "Select * from noti";
$res = mysql_query($qry);



echo '<div class="table-responsive"><table class="table table-bordered table-hover">

<th>Notification</th>
';

while($row=mysql_fetch_array($res)) {
	



echo "<tr>";


echo "<td>",$row['notification'],"</td>";
echo "</tr>";
}
echo '</table></div>';

?>


</div>
</body>
</html>