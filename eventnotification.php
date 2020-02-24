<?php

include('connect.php');


$query="delete from noti";

if(mysql_query($query))
  {
  ?>
  <script>
  alert("Successfully");
  window.location="teachernoti.php";
  </script>
  <?php
  }
  else
  {
  ?>
    <script>
  alert("Unsuccessfully");
  window.location="teachernoti.php";
  </script>
  <?php
 }

?>
