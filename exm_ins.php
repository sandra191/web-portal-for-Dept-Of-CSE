<html>
<head>
	<style type="text/css">
		.subject_list{
			height: 10%;
			width: 30%;
			position: absolute;
			top: 20px;
			right: 26px;
		}



	</style>

</head>
<?php
$sem = $_REQUEST['sem'];
$action = $_REQUEST['action'];




include('connect.php');
include('admin_exm.php');




if(isset($_POST['save']))
{



$h1 = $_POST['h1'];
$h2 = $_POST['h2'];
$h3 = $_POST['h3'];
$h4 = $_POST['h4'];
$h5 = $_POST['h5'];


$sav ="INSERT INTO exm_timetable (date, sem, s_id, time, status) VALUES ('$h1', '$h2', '$h3', '$h4', '$h5')";

$up = mysql_query($sav);
if($up)	
	header("Location: admin_exm.php");
else
	echo "Oombyyi...";
}

?>


<form method="post">



	<table>
<table  class="table table-bordered table-striped table-hover"><tr>


      </tr>

	<tr>
		      <th>Date</th>
		     

		<td><input type="date"  name="h1"></td>
	</tr>
	<tr> 
		<th>Semester</th>
		      

		<td><input type="text" name="h2"></td>
</tr>
<tr>
	<th>Subject Id</th>


	<td><input type="text" name="h3"></td>
</tr>
<tr>
		      <th>Time</th>

	<td><input type="text" name="h4"></td>
</tr>
<tr>
		      <th>Status</th>
	<td><input type="text" name="h5"></td>
</tr>
<tr>
	
<td><button type="submit" class="btn btn-primary btn-sm" name="save">Insert</button></td>
<td><a class="btn btn-danger btn-sm" href="admin_exm.php">Go Back</a></td>
</tr>	

	</table>

<div class="subject_list">
<select name="show_sem">
	<option value="1">Sem1</option>
  	<option value="2">Sem2</option>
  	<option value="3">Sem3</option>
  	<option value="4">Sem4</option>
  	<option value="5">Sem5</option>
  	<option value="6">Sem6</option>
</select>
<button type="submit" class="btn btn-info btn-sm" name="subs">Show Subjects</button>




</form>
<?php
if(isset($_POST['subs']))
	
	{
$this_sem = $_POST['show_sem'];		

$sub = "Select sub_id,sub_name,sub_sem from subject where sub_sem='$this_sem'";	
$qsub = mysql_query($sub);

echo '<table class="table table-bordered table-striped table-hover" id="tb">
<tr>
<th>Subject_id</th>
<th>Subject_name</th>
<th>Subject_sem</th>
</tr>
';
while($arr = mysql_fetch_array($qsub))
	{
		echo '<tr><td>'.$arr[0].'</td>
		<td>'.$arr[1].'</td>
		<td>'.$arr[2].'</td>

		</tr>
		';
	}
  echo '</table>';

    }
  ?>

</div>
