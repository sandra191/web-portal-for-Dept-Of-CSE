<?php include('sidebar.php');?>


<?php  

/*
Use Session for teacher id and only give edit option
to those notifications posted by those teachers.

And in insertion the t_id is autofilled using session variable.
*/


/*include('t_notif.php');*/
$t = $_GET['t_id'];
$n = $_GET['n'];
$action = $_GET['action'];

if(isset($_POST['sumit']))
{
	$t1 = $_POST['h1'];
	$t2 = $_POST['h2'];
	$t3 = $_POST['h3'];

	echo $t1.$n.$t3;

	$qry = "Update notifications set content = '$t1' , sem = '$t3' where n_id='$n'";
	$res = mysql_query($qry);
	if($res)
		header("Location: t_notif.php");
}

if($action=='edit')
   {
$qry = "Select * from notifications where n_id = '$n'";
$res = mysql_query($qry);

$arr = mysql_fetch_array($res);
	

$qry2 = "Select t_name from teacher where t_id = '$t'";
$res1 = mysql_query($qry2);

$nam = mysql_fetch_array($res1);
$t_name = $nam[0];
    }



if($action == 'delete')
	{
		$qry = "Delete from notifications where n_id = '$n'";
		$res = mysql_query($qry);
		if($res)
			header("Location: admin_student.php");
	}

if(isset($_POST['ins']))
{


}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><br><br>
<div class = "pages">
	<br><br>
<form method="post">
<table class="table table-bordered table-hover table-responsive">
	<tr>
		<th>Notification</th>
		  <td><input type="text" name="h1" value="<?php echo $arr[1]; ?>"></td>
	</tr>

	<tr>
		<th>Teacher</th>
		  <td><input type="text" name="h2" value="<?php echo $t_name; ?>" disabled></td>
	</tr>

	<tr>

		<th>Semester</th>
		  <td><input type="text" name="h3" value="<?php echo $arr[3]; ?>"></td>
	</tr>
	<tr>
		  <td><input type="submit" name="sumit" value="Save" class="btn btn-primary btn-sm"></td>

	</tr>
</table>
</form>
</div>
</body>
</html>