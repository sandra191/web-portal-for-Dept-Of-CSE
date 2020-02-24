<?php
include('connect.php');
include('admin_timetable.php');
if(!isset($_GET['edit']))
	{
$day = $_GET['s_d'];
$sem = $_GET['s_s'];

$qry = "Select hour1,hour2,hour3,hour4,hour5,day,sem from d_timetable where sem='5' and day='$day'";
$res = mysql_query($qry);
$arr = mysql_fetch_array($res);






	}


if(isset($_POST['save']))
{

$h1 = $_POST['h1'];
$h2 = $_POST['h2'];
$h3 = $_POST['h3'];
$h4 = $_POST['h4'];
$h5 = $_POST['h5'];

$sav = "UPDATE d_timetable SET hour1 = '$h1', hour2 = '$h2', hour3 = '$h3',
 hour4 = '$h4', hour5 = '$h5'
 WHERE sem = 5 AND day = '$day'";
$up = mysql_query($sav);
if($up)	
	header("Location: admin_timetable.php");
}

?>


<form method="post">

<div class="container">
	<div class="rows">
		<div class="col-md-6">

<table  class="table table-bordered table-striped table-hover"><tr>
      <th>Hour 1</th>
      <th>Hour 2</th>
      <th>Hour 3</th>
      <th>Hour 4</th>
      <th>Hour 5</th>
      
      </tr>

	<tr>
		<td><input type="text" value="<?php echo $arr[0] ?>" name="h1"></td>
<td><input type="text" value="<?php echo $arr[1] ?>" name="h2"></td>
<td><input type="text" value="<?php echo $arr[2] ?>" name="h3"></td>
<td><input type="text" value="<?php echo $arr[3] ?>" name="h4"></td>
<td><input type="text" value="<?php echo $arr[4] ?>" name="h5"></td>
</tr>
<tr>
<td><button type="submit" class="btn btn-primary btn-sm" name="save">Save</button></td>
<td><a class="btn btn-primary btn-sm" href="admin_timetable.php">Go Back</a></td>
</tr>	

	</table>

</div>
</div>
</div>
</form>