

<?php include('sidebar.php');?>



<!DOCTYPE html>
<html>
<head>

</head>
<body>


	<div class = "pages">
		<?php
		echo '<div class="table-responsive"><a href="home_noti.php?t_id=5l4ho&n=5l4ho&action=edit" class="btn btn-info btn-sm">Add Home Notifications</a>';
         ?>
<br>
	<form method="POST">

<br>
<?php

echo '<div class="table-responsive"><a href="eventnotification.php?t_id=5l4ho&n=5l4ho&action=edit" 
class="btn btn-info btn-sm">DELETE</a>';


?>
<br><br>
Add Notification :&nbsp&nbsp &nbsp<input type="text" name="txt">
<input type="submit" name="submit"><br>
<a href="studentnoti.php">VIEW</a>
</div>
</form>


</body>
</html>


<?php

include('connect.php');

if(isset($_POST['submit']))
{
	$t = $_POST['txt'];
	
$qry = "INSERT INTO noti(`notification`) VALUES('$t')";

$res = mysql_query($qry);
  	if($res)
  		header("Location: teachernoti.php");


 

}	

?>

