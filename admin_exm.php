<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	

	<title></title>
</head>
<body>

<div class="pages">
  <form method="post">
  <select name="sem">
  	<option value="1">Sem1</option>
  	<option value="2">Sem2</option>
  	<option value="3">Sem3</option>
  	<option value="4">Sem4</option>
  	<option value="5">Sem5</option>
  	<option value="6">Sem6</option>
  </select>



<input type="submit" name="sumit" value="See" class="btn btn-danger btn-sm">



</form>


<div class="container">
  <div class="row">

    <div class="col-md-6">



<?php

include('connect.php');

if(isset($_POST['sumit']))
{
 
 $sel_sem = $_POST['sem'];
 

$qry = "Select date,sem,sub_name,time,s_id from exm_timetable as e join subject as s on 
        s.sub_id = e.s_id and e.sem = '$sel_sem' and e.status='active'";
$res = mysql_query($qry);


echo '<table class="table table-bordered table-striped table-hover">
		<th>Date</th>
		<th>Semester</th>
		<th>Subject</th>
		<th>Time</th>
		<th>Actions</th>
                 <th>
<a name="insert" class="btn btn-success btn-sm" href="exm_ins.php?sem='.$sel_sem.'&action=insert">Insert</a>
             </th>';

while ($arr=mysql_fetch_array($res)) {
       	
             $id = $arr['s_id'];

    	echo '
             <tr>
             <td>'.$arr[0].'</td>
             <td>'.$arr[1].'</td>
             <td>'.$arr[2].'</td>
             <td>'.$arr[3].'</td>
                     <td><a name="edit" href="exm_edit.php?sem='.$sel_sem.'&id='.$id.'&action=edit" class="btn btn-primary btn-sm">Edit</a></td>

 
             </tr>
    	';
    		                                }
    echo '
</table>';

}


?>
</div>
</div>
</div>
</div>

</body>
</html>