<?php

include('admin_exm.php');

if(!isset($_GET['edit']))
	{
$id = $_GET['id'];
$sem = $_GET['sem'];

$qry = "Select date,sem,sub_name,time,s_id from exm_timetable as e join subject as s on 
        s.sub_id = e.s_id and e.sem = '$sem' and e.status='active' and e.s_id = '$id'";
$res = mysql_query($qry);
$arr = mysql_fetch_array($res);






	}


if(isset($_POST['save']))
{

$h1 = $_POST['h1'];
$h2 = $_POST['h2'];
$h3 = $_POST['h3'];
$h4 = $_POST['h4'];


$sav = "UPDATE exm_timetable SET status = 'unactive' WHERE s_id = '$id' AND sem = '$sem'";

$up = mysql_query($sav);
if($up)	
	header("Location: admin_exm.php");
}

?>

<form method="post">
	<table>
<table  class="table table-bordered table-striped table-hover"><tr>

      </tr>

	<tr>
		      <th>Date</th>

		<td><input type="text" value="<?php echo $arr[0] ?>" name="h1"></td>
	</tr>
	<tr>
		      <th>Semester</th>

<td><input type="text" value="<?php echo $arr[1] ?>" name="h2"></td>
</tr>
<tr>
	      <th>Subject</th>

<td><input type="text" value="<?php echo $arr[2] ?>" name="h3"></td>
</tr>
<tr>
	      <th>Time</th>
<td><input type="text" value="<?php echo $arr[3] ?>" name="h4"></td>
</tr>
<tr>


<td><button type="submit" class="btn btn-primary btn-sm" name="save">Unactive</button></td>
<td><a class="btn btn-danger btn-sm" href="admin_exm.php">Go Back</a></td>
</tr>	

	</table>

</form>