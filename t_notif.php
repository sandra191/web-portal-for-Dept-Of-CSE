<?php include('sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
</head>
<body>
<div class = "pages">
<?php
//session_start();
$teacher_id = $_SESSION['id'];
//echo $teacher_id;
include('connect.php');
$qry = "Select * from notifications";
$res = mysql_query($qry);

echo '<div class="table-responsive"><a href="notif_edit.php?t_id=5l4ho&n=5l4ho&action=edit" 
class="btn btn-info btn-sm">Insert</a>
<table class="table table-bordered table-hover">
<th>Content</th>
<th>Teacher</th>
<th>Semester</th>
<th>Actions</th>
';

while ($arr = mysql_fetch_array($res)) {
	
$t = $arr[2];


$qry2 = "Select t_name from teacher where t_id = '$t' ";
$res1 = mysql_query($qry2);

$nam = mysql_fetch_array($res1);
$t_name = $nam[0];

echo '<tr>

<td>'.$arr[1].'</td>
<td>'.$t_name.'</td>
<td>'.$arr[3].'</td>';


if($t == $teacher_id)
	{
echo '<td><a href="notif_edit.php?t_id='.$t.'&n='.$arr[0].'&action=edit" class="btn btn-primary btn-sm">Edit</a>
<a href="notif_edit.php?t_id='.$t.'&n='.$arr[0].'&action=delete" class="btn btn-danger btn-sm">Delete</a></td>';
	}
echo '</tr>';	
}
echo '</table></div>';

?>

<?php

echo '<div class="table-responsive"><a href="home_noti.php?t_id=5l4ho&n=5l4ho&action=edit" 
class="btn btn-info btn-sm">Add Home Notifications</a>';


?>
</div>


</body>
</html>