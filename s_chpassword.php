<?php include('sidebar.php');?>

<?php

if(isset($_POST['change']))
    {
include('connect.php');
session_start();
$sid = $_SESSION['id'];
$role = $_SESSION['role'];

$pass = $_POST['pa2'];
$password = $_POST['pa1'];

if($pass == $password)
 {
if($role == 'student')
	$qry = "Update student set password = '$password' where s_sid = '$sid'";

if($role == 'teacher')
	$qry = "Update teacher set t_password = '$password' where t_id = '$sid'";

$res = mysql_query($qry);
if(!$res)
	echo 'Couldnt Update';

if($res)
	 echo 'Success';

header("Location: s_home.php");	
  }
	}
?>

<!DOCTYPE html>
<html>
<head>

	<script type="text/javascript">
		

		function check()
		{
			var p1,p2;

			p1 = document.form.pa1.value;
			p2 = document.form.pa2.value;

			if(p1 != p2)
				alert("Passwords don't match");
		}

	</script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
</head>
<body>
<div class = "pages">
<form method="post" name="form">
	
	<label>New Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
	<input type="password" name="pa1" required>  <br><br>
	
	<label>Confirm Password:&nbsp&nbsp&nbsp</label>
	<input type="password" name="pa2" required>  <br><br>

<input type="submit" name="change" class="btn btn-success btn-sm" onclick="check()">

</form>
</div>
</body>
</html>