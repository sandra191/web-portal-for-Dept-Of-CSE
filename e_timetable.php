<?php include('sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	  <style type="text/css">
    
    #sel2,#sel{
  height: 20%;
  width: 20%;
}

  </style>
</head>
<body>
<div class="pages">
<div class="container">
  <div class="rows">
    <div class="col-sm-8">
  <form method="post">
  <select name="sem" class="form-control" id="sel">
  	<option value="1">Sem1</option>
  	<option value="2">Sem2</option>
  	<option value="3">Sem3</option>
  	<option value="4">Sem4</option>
  	<option value="5">Sem5</option>
  	<option value="6">Sem6</option>
  </select>

<input type="submit" name="sumit" value="See" class="btn-primary btn-xl">



</form>


</body>
</html>

<?php

include('connect.php');

if(isset($_POST['sumit']))
{
 
 $sel_sem = $_POST['sem'];

$qry = "Select date,sem,sub_name,time from exm_timetable as e join subject as s on 
        s.sub_id = e.s_id and e.sem = '$sel_sem' and e.status='active'";
$res = mysql_query($qry);


echo '<table class="table table-bordered table-striped table-hover">
		<th>Date</th>
		<th>Semester</th>
		<th>Subject</th>
		<th>Time</th>';

while ($arr=mysql_fetch_array($res)) {
       	
             

    	echo '
             <tr>
             <td>'.$arr[0].'</td>
             <td>'.$arr[1].'</td>
             <td>'.$arr[2].'</td>
             <td>'.$arr[3].'</td>
             </tr>
    	';
    		                                }
    echo '</table>';

}


?>
</div>
</div>
</div>
</div>