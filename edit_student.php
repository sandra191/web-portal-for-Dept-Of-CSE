<?php

include('admin_student.php');
$id = $_REQUEST['id'];
$action = $_REQUEST['action'];

if($action == 'delete')
	{
		$qry = "Delete from student where s_admno = '$id'";
		$res = mysql_query($qry);
		if($res)
			header("Location: admin_student.php");
	}

if($action == 'edit')
	{
		

		$qry = "Select * from student where s_admno = '$id'";
		$res = mysql_query($qry);
		$arr = mysql_fetch_array($res);


		if(isset($_POST['sumit']))

			
		{
		
	    $image = $_FILES['image']['tmp_name'];
	  	$name = $_FILES['image']['name'];
	  	$size = $_FILES['image']['size'];
		$type = $_FILES['image']['type'];
		
		$file_store = "s_images/".$name;

		$result = move_uploaded_file($image, $file_store);

		$t1 = $_POST['t1'];
		$t2 = $_POST['t2'];
		$t3 = $_POST['t3'];
		$t4 = $_POST['t4'];
		$t5 = $_POST['t5'];
		$t6 = $_POST['t6'];
		$t7 = $_POST['t7'];
		$t8 = $_POST['t8'];
		$t9 = $_POST['t9'];
		$t10 = $_POST['t10'];
		$t11 = $_POST['t11'];
		$t12 = $_POST['t12'];
		$t13 = $_POST['t13'];
		$t14 = $_POST['t14'];



        $up = "Update student set s_name='$t3',
        s_hname='$t4',s_city='$t5',s_district='$t6',s_parent='$t7',s_dob='$t8',s_ph='$t9',s_blood='$t10',s_batch='$t11',s_year='$t12',username='$t13',password='$t14',image='$name' where s_admno='$t1'";
        $dat = mysql_query($up);
        if(!$dat)
        	echo "sdgkjdskjf";
       // if ($dat) {
        //	header("Location: admin_student.php");
        //			}
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
		$t8 = $_POST['t8'];
		$t9 = $_POST['t9'];
		$t10 = $_POST['t10'];
		$t11 = $_POST['t11'];
		$t12 = $_POST['t12'];
		$t13 = $_POST['t13'];
		$t14 = $_POST['t14'];


  	$qry = "INSERT INTO student(`s_admno`,
`s_sid`,
`s_name`,
`s_hname`,
`s_city`,
`s_district`,
`s_parent`,
`s_dob`,
`s_ph`,
`s_blood`,
`s_batch`,
`s_year`,
`username`,
`password`) VALUES('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11'
  	,'$t12','$t13','$t14')";
  	$res = mysql_query($qry);
  	if($res)
  		header("Location: admin_student.php");
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
<th>s_admno</th>


		<td><input type="text" class="form-control" name="t1" class="form-control" value="<?php  echo $arr[0]  ?>"></td>

	<th>s_sid</th>
	<td><input type="text" class="form-control" name="t2" value="<?php  echo $arr[1]  ?>"></td>
</tr>
<tr>
<th>s_name</th>
		<td><input type="text" class="form-control" name="t3" value="<?php  echo $arr[2]  ?>"></td>

<th>s_hname</th>
		<td><input type="text" class="form-control" name="t4" value="<?php  echo $arr[3]  ?>"></td>
</tr>
	<tr>
<th>s_city</th>

		<td><input type="text" class="form-control" name="t5" value="<?php  echo $arr[4]  ?>"></td>

<th>s_district</th>
		<td><input type="text" class="form-control" name="t6" value="<?php  echo $arr[5]  ?>"></td>
</tr>
<tr>
<th>s_parent</th>
		<td><input type="text" class="form-control" name="t7" value="<?php  echo $arr[6]  ?>"></td>

<th>s_dob</th>
		<td><input type="text" class="form-control" name="t8" value="<?php  echo $arr[7]  ?>"></td>
</tr>
<tr>
<th>s_ph</th>
		<td><input type="text" class="form-control" name="t9" value="<?php  echo $arr[8]  ?>"></td>

<th>s_blood</th>
		<td><input type="text" class="form-control" name="t10" value="<?php  echo $arr[9]  ?>"></td>
</tr>
<tr><th>s_batch</th>
	<td><input type="text" class="form-control" name="t11" value="<?php  echo $arr[10]  ?>"></td>
	<th>s_year</th>
<td><input type="text" class="form-control" name="t12" value="<?php  echo $arr[11]  ?>"></td>
</tr>
<tr>
<th>username</th>
	<td><input type="text" class="form-control" class="form-control" name="t13" value="<?php  echo $arr[12]  ?>"></td>
<th>password</th>	<td><input type="text" class="form-control" name="t14" value="<?php  echo $arr[13]  ?>"></td>
	</tr>


	<tr>
		<td><input type="file" name="image"></td>
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


