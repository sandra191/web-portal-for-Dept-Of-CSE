<html>
<?php
session_start();
$uid=$_SESSION["ud"];
$nam=$_POST["txt"];
$t1=$_POST["txt1"];
$t2=$_POST["txt2"];
$t3=$_POST["txt3"];
$t4=$_POST["txt4"];
$t5=$_POST["txt5"];
$t6=$_POST["txt6"];

$con=mysql_connect("localhost","bca7165","bca7165")or die("couldn't connect to server".mysql_error($con));
$db=mysql_select_db("db_bca7165",$con)or die("couldn't connect to server");

$query="insert into feedback(name,cls_mang,skills,knowledge,punchuality,efficency,comment,sid)values('$nam','$t1','$t2','$t3','$t4','$t5','$t6','$uid')";

if(mysql_query($query,$con))

{
 ?>
 <script>
 alert("new record added successfully");

  window.location="shome.php";
 </script>
<?php
}
else
{
 ?>
 <script>
 alert("You have already submitted your feedback");

  window.location="shome.php";
 </script>
<?php
}

mysql_close($con);
?>
</html>
