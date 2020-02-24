<?php include('sidebar.php');?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>


<div class = "pages">
<form method="post">
  <select name="sem">
  	<option value="1">Sem1</option>
  	<option value="2">Sem2</option>
  	<option value="3">Sem3</option>
  	<option value="4">Sem4</option>
  	<option value="5">Sem5</option>
  	<option value="6">Sem6</option>
  </select>
<input type="submit" name="submit" value="view" class="btn btn-primary btn-sm">

</form>
<div class="container">
  <div class="row">

    <div class="col-md-6">

<?php


include('connect.php');
if(isset($_POST['submit']))
    {



    	$sel_sem = $_POST['sem'];
    

      echo '<table  class="table table-bordered table-striped table-hover"><tr>
      <th>Subject Id</th>
      <th>Subject</th>
      <th>Hours per week</th>
      <th>Credits</th>
      </tr>';

	   $qry = "
  Select sub_id,sub_name,credits,total_hrs from subject where sub_sem = '$sel_sem'";
	   
       $res = mysql_query($qry);

  
       while ($arr=mysql_fetch_array($res)) {
       	
             

    	echo '
             <tr>
             <td>'.$arr[0].'</td>
             <td>'.$arr[1].'</td>
             <td>'.$arr[3].'</td>
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
</div>
</body>
</html>