<?php include('sidebar.php');?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>


	<div class = "pages">

	<form method="POST">

<b> STUDENT NOTIFICATONS</b><br><br>
Enter the Student ID : &nbsp&nbsp&nbsp<input type="text" name="txt"><br><br>
Enter Notification : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="txt1"><br><br>
Enter Teacher Name : &nbsp&nbsp&nbsp<input type="text" name="txt2"><br><br>
<input type="submit" name="submit" value="send">
</div>
</form>


</body>
</html>


<?php

include('connect.php');

if(isset($_POST['submit']))
{
	$t = $_POST['txt'];
	$t2 = $_POST['txt1'];
	$t3 = $_POST['txt2'];
	echo $t3;
$qry = "INSERT INTO special_noti(`id`,`teacher`,`noti`) VALUES('$t','$t2','$t3')";

$res = mysql_query($qry);
  	if($res)
  		header("Location: ts_notif.php");


 

}	

?>

