<?php

include('admin_teacher.php');
$id = $_REQUEST['id'];
$action = $_REQUEST['action'];

if($action == 'delete')
	{
		$qry = "Delete from teacher where t_id = '$id'";
		$res = mysql_query($qry);
		if($res)
			header("Location: admin_teacher.php");
	}

if($action == 'edit')
	{
		

		$qry = "Select * from teacher where t_id = '$id'";
		$res = mysql_query($qry);
		$arr = mysql_fetch_array($res);


		if(isset($_POST['sumit']))

			
		{

				$image = $_FILES['pic']['tmp_name'];
	  	$name = $_FILES['pic']['name'];
	  	$size = $_FILES['pic']['size'];
		$type = $_FILES['pic']['type'];
		
		$file_store = "t_images/".$name;

		$result = move_uploaded_file($image, $file_store);
		if(!$result)		
         echo 'dsfjgdsjg';
		

		$t1 = $_POST['t1'];
		$t2 = $_POST['t2'];
		$t3 = $_POST['t3'];
		$t4 = $_POST['t4'];
		$t5 = $_POST['t5'];
		$t6 = $_POST['t6'];
		$t7 = $_POST['t7'];


        $up = "Update student set s_name='$t3',
        s_hname='$t4',s_city='$t5',s_district='$t6',s_parent='$t7',s_dob='$t8',s_ph='$t9',s_blood='$t10',s_batch='$t11',s_year='$t12',username='$t13',password='$t14',image='$name' where s_admno='$t1'";
        $dat = mysql_query($up);
        if(!$dat)
        	echo "sdgkjdskjf";
        if ($dat) {
        	header("Location: admin_student.php");
        			}
        }
				 

	}

if($action == 'insert')
  {
    if(isset($_POST['subit']))
            {


		$t1 = $_POST['t1'];
		$t2 = $_POST['t2'];
		$t3 = $_POST['t3'];
		$t4 = $_POST['t4'];
		$t5 = $_POST['t5'];
		$t6 = $_POST['t6'];
		$t7 = $_POST['t7'];


  	$qry = "INSERT INTO teacher(
`t_id` ,
`t_name` ,
`t_password` ,
`t_subject` ,
`t_ph` ,
`t_batch` ,
`t_year`
) VALUES('$t1','$t2','$t3','$t4','$t5','$t6','$t7')";
  	$res = mysql_query($qry);
  	if($res)
  		header("Location: admin_teacher.php");
             }
  }	

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<div class="container">
	<div class="rows">
		<div class="col-md-6">
		
<form method="post" enctype="multipart/form-data">

<table class="table table-bordered table-striped table-hover">
	<tr>

	</tr>

	<tr><th>t_id</th>

		<td><input type="text" class="form-control" name="t1" value="<?php  echo $arr[0]  ?>"></td>
	</tr>	
		<tr><th>t_name</th>
<td><input type="text" class="form-control" name="t2" value="<?php  echo $arr[1]  ?>"></td>
	</tr>		
		<tr><th>t_password</th>
<td><input type="text" class="form-control" name="t3" value="<?php  echo $arr[2]  ?>"></td>
	</tr>
		<tr><th>t_subjects</th>
<td><input type="text" class="form-control" name="t4" value="<?php  echo $arr[3]  ?>"></td>
	</tr>
		<tr><th>t_ph</th>
<td><input type="text" class="form-control" name="t5" value="<?php  echo $arr[4]  ?>"></td>
	</tr>
		<!--<tr><th>t_batch</th>
<td><input type="text" class="form-control" name="t6" value="<?php  echo $arr[5]  ?>"></td>
	</tr>	

	<tr><th>t_year</th><td><input type="text" class="form-control" name="t7" value="<?php  echo $arr[6]  ?>"></td>

	</tr>-->

	<tr>
		<td><input type="file" name="pic"></td>
	</tr>

	<tr><?php if($action == 'edit')
	{
		echo '<td><input type="submit" name="sumit" class="btn btn-success btn-sm	" value="Update"></td>';
	}

	if($action == 'insert')
	{
	    echo '<td><input type="submit" name="subit" class="btn btn-success btn-sm	" value="Insert"></td>';	
	}

?>
	</tr>


</table>

</form>

</div>
</div>
</div>


</body>
</html>


