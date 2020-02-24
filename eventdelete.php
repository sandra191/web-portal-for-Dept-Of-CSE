<?php

include('connect.php');


$query="delete from h_notifications";

if(mysql_query($query))
  {
  ?>
  <script>
  alert("Successfully");
  window.location="home_noti.php";
  </script>
  <?php
  }
  else
  {
  ?>
    <script>
  alert("Unsuccessfully");
  window.location="home_noti.php";
  </script>
  <?php
 }

?>
