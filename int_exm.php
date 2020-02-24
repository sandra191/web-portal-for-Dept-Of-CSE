<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<style>


td{
	text-align: center;
}





</style>

</head>
<body>

<form method="post">
	<div class="form-group">
		<label for="sel1">Select Sem</label>
  <select class="form-control" name="sem">
  	<option value="1">Sem1</option>
  	<option value="2">Sem2</option>
  	<option value="3">Sem3</option>
  	<option value="4">Sem4</option>
  	<option value="5">Sem5</option>
  	<option value="6">Sem6</option>
  </select>

</div>

<br>

<select name="internal">
  	<option value="First">First Internal</option>
  	<option value="Second">Second Internal</option>
  	<option value="Model">Model Exam</option>
  </select>


<input type="submit" name="submit" value="see" class="btn-primary btn-xl">
<br>
</form>


<div class="container">
	<div class="row">

		<div class="col-md-6">
<?php


include('connect.php');
if(isset($_POST['submit']))
    {



    	$sel_sem = $_POST['sem'];
    	$sel_int = $_POST['internal'];
    

      echo '<table class="table table-bordered table-striped table-hover"><tr>
      <th>Student Name</th>
      <th>Subject</th>
      <th>Aquired Mark</th>
      <th>Total Mark</th>
      <th>Internal</th>
      <th>Semester</th>
      </tr>';

	   $qry = "Select s_name,sub_name,sub_sem,acq_mark,tot_mark,exm from i_exam as i inner join subject as s on i.sub_id = s.sub_id join
  student as st on st.s_sid = i.s_sid and exm = '$sel_int' and sub_sem = '$sel_sem'";
	   
       $res = mysql_query($qry);

  
       while ($arr=mysql_fetch_array($res)) {
       	
             

    	echo '
             <tr>
             <td>'.$arr[0].'</td>
             <td>'.$arr[1].'</td>
             <td>'.$arr[3].'</td>
             <td>'.$arr[4].'</td>
             <td>'.$arr[5].'</td>
             <td>'.$arr[2].'</td>
             </tr>
    	';
    		                                }
    echo '</table>';
    }

?>
</div>
</div>
</div>
</body>
</html>