

<?php include('sidebar.php');?>



<!DOCTYPE html>
<html>
<head>

</head>
<body>


	<div class = "pages">

	<form method="POST">

	<b>First You Have to Delete the Previous Notification</b>


<?php

echo '<div class="table-responsive"><a href="eventdelete.php?t_id=5l4ho&n=5l4ho&action=edit" 
class="btn btn-info btn-sm">DELETE</a>';


?>
</br></br>
Add Home Notification&nbsp&nbsp<input type="text" name="txt">
<input type="submit" name="submit">
</div>
</form>


</body>
</html>


<?php

include('connect.php');

if(isset($_POST['submit']))
{
	$t = $_POST['txt'];
	
$qry = "INSERT INTO h_notifications(`notification`) VALUES('$t')";

$res = mysql_query($qry);
  	if($res)
  		header("Location: t_notif.php");


 

}	

?>

