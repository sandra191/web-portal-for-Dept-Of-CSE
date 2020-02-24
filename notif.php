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
$qry = "Select * from notifications";
$res = mysql_query($qry);

echo '<div class="table-responsive"><table class="table table-bordered table-hover">
<th>Content</th>
<th>Teacher</th>
<th>Semester</th>
';

while ($arr = mysql_fetch_array($res)) {
	
$t = $arr[2];
$qry2 = "Select t_name from teacher where t_id = '$t'";
$res1 = mysql_query($qry2);

$nam = mysql_fetch_array($res1);
$t_name = $nam[0];

echo '<tr>

<td>'.$arr[1].'</td>
<td>'.$t_name.'</td>
<td>'.$arr[3].'</td>
</tr>';
}
echo '</table></div>';

?>


</div>
</body>
</html>