

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

$qry = "Select s_admno,s_sid,s_name,s_hname,s_city,s_district,s_parent,s_dob,s_ph,s_blood,s_batch,s_year from student where s_year = '3'";
$res = mysql_query($qry);
echo '<table class="table table-bordered table-striped table-hover">
<tr>
<th>s_admno</th>
<th>s_sid</th>
<th>s_name</th>
<th>s_hname</th>
<th>s_city</th>
<th>s_district</th>
<th>s_parent</th>
<th>s_dob</th>
<th>s_ph</th>
<th>s_blood</th>
<th>s_batch</th>
<th>s_year</th>
<th>Actions</th>
<th><a href="edit_student.php?id=5l4ho&action=insert"
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
		<td>'.$arr[7].'</td>
		<td>'.$arr[8].'</td>
		<td>'.$arr[9].'</td>
		<td>'.$arr[10].'</td>
		<td>'.$arr[11].'</td>
		<td><a href="edit_student.php?id='.$arr[0].'&action=edit" class="btn btn-primary btn-sm">Edit</a></td>
		<td><a href="edit_student.php?id='.$arr[0].'&action=delete" class="btn btn-danger btn-sm">Delete</a></td>
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