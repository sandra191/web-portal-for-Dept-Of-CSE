

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<div class="container">
	<div class="rows">
		<div class="col-md-6">
		
<form method="post">

<?php

include('connect.php');

$qry = "Select * from teacher";
$res = mysql_query($qry);
echo '<table class="table table-bordered table-striped table-hover">
<tr>
<th>t_id</th>
<th>t_name</th>
<th>t_password</th>
<th>t_subject</th>
<th>t_ph</th>
<th>t_batch</th>
<th>t_year</th>
<th>Actions</th>
<th><a href="edit_teacher.php?id=5l4ho&action=insert"
 class="btn btn-success btn-sm">Insert</a></th>
</tr>
';
while($arr = mysql_fetch_array($res))
	{
		echo '<tr><td>'.$arr[0].'</td>
		<td>'.$arr[1].'</td>
		<td>'.$arr[2].'</td>
		<td>'.$arr[3].'</td>
		<td>'.$arr[4].'</td>
		<td>'.$arr[5].'</td>
		<td>'.$arr[6].'</td>
		<td><a href="edit_teacher.php?id='.$arr[0].'&action=edit" class="btn btn-primary btn-sm">Edit</a></td>
		<td><a href="edit_teacher.php?id='.$arr[0].'&action=delete" class="btn btn-danger btn-sm">Delete</a></td>
		</tr>
		';
	}
  echo '</table>';


?>


</form>

	</div>
</div>
</div>

</body>
</html>