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
  <form method="post">
 <!-- <select name="sem" class="form-control" id="sel">
  	<option value="1">Sem1</option>
  	<option value="2">Sem2</option>
  	<option value="3">Sem3</option>
  	<option value="4">Sem4</option>
  	<option value="5">Sem5</option>
  	<option value="6">Sem6</option>
	<option value="7">Sem7</option>
	<option value="8">Sem8</option>
  </select>-->



 <!-- <select name="day" class="form-control" id="sel2">
  	<option value="1">Day1</option>
  	<option value="2">Day2</option>
  	<option value="3">Day3</option>
  	<option value="4">Day4</option>
  	<option value="5">Day5</option>
  </select>-->

<br>
See All
<input type="checkbox" name="check" value="all">

<br><br>

<input type="submit" name="submit" value="see" class="btn-primary btn-xl">
  </form>

<div class="container">
  <div class="row">

    <div class="col-md-6">


<?php



include('connect.php');
if(isset($_POST['submit']))
    {
      echo '<table  class="table table-bordered table-striped table-hover"><tr>
      <th>day</th>
      <th>Hour 1</th>
      <th>Hour 2</th>
      <th>Hour 3</th>
      <th>Hour 4</th>
      <th>Hour 5</th>
      <th>Hour 6</th>
      </tr>';

     if(!isset($_POST['check']))
{

       $qry = "select day,hour1,hour2,hour3,hour4,hour5,hour6 from t_timetable";
}
     else
{
	$qry = "select day,hour1,hour2,hour3,hour4,hour5,hour6 from t_timetable";
	$count=0;
}      
       $res = mysql_query($qry);

  
       while ($arr=mysql_fetch_array($res)) {
       	
             

    	echo '
             <tr>
             <td>'.$arr[0].'</td>
             <td>'.$arr[1].'</td>
             <td>'.$arr[2].'</td>
             <td>'.$arr[3].'</td>
             <td>'.$arr[4].'</td>
	           <td>'.$arr[5].'</td>
             <td>'.$arr[6].'</td>
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
