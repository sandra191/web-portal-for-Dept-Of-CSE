<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title></title>
</head>
<body>

  <form method="post">
  <select name="sem">
  	<option value="1">Sem1</option>
  	<option value="2">Sem2</option>
  	<option value="3">Sem3</option>
  	<option value="4">Sem4</option>
  	<option value="5">Sem5</option>
  	<option value="6">Sem6</option>
    <option value="5">Sem7</option>
    <option value="6">Sem8</option>
  </select>



<br><br>

<input type="submit" name="submit" value="see" class="btn btn-success">
  </form>

<div class="container">
  <div class="row">

    <div class="col-md-6">

<?php

include('connect.php');

echo '<table  class="table table-bordered table-striped table-hover"><tr>
      <th>Hour 1</th>
      <th>Hour 2</th>
      <th>Hour 3</th>
      <th>Hour 4</th>
      <th>Hour 5</th>
      <th>Hour 6</th>
      <th colspan=2>Actions</th>
      </tr>';

      $qry = "Select hour1,hour2,hour3,hour4,hour5,hour6,day,sem from d_timetable where sem='5'";


      $res = mysql_query($qry);

  
       while ($arr=mysql_fetch_array($res)) {
       	
             $day = $arr['day'];
             $sem = $arr['sem'];

    	echo '
             <tr>
             <td>'.$arr[0].'</td>
             <td>'.$arr[1].'</td>
             <td>'.$arr[2].'</td>
             <td>'.$arr[3].'</td>
             <td>'.$arr[4].'</td>
             <td>'.$arr[5].'</td>

             <td><a name="edit" href="t_edit.php?s_d='.$day.'& s_s='.$sem.'" class="btn btn-primary btn-sm">Edit</a></td>
      
             </tr>
    	';
    		                                }
    echo '</table>';
 

?>

</div>
</div>
</div>

</body>
</html>