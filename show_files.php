<?php include('sidebar.php');?>

<?php

echo '  <div class="pages">

<form method="post">
  <select name="sem">
    <option value="1">Sem1</option>
    <option value="2">Sem2</option>
    <option value="3">Sem3</option>
    <option value="4">Sem4</option>
    <option value="5">Sem5</option>
    <option value="6">Sem6</option>
    <option value="7">Sem7</option>
    <option value="8">Sem8</option>
  </select>

<br><br><br>



<input type="submit" name="sumit" value="See" class="btn btn-danger btn-sm">



</form>';

$dir_path;

if(isset($_POST['sumit']))
{
$sem = $_POST['sem'];
$dir_path = "uploads/".$sem;
$options = "";

echo '<form method="post"><select name="sub">';
if(is_dir($dir_path))
{
    $files = opendir($dir_path);
    {
        if($files)
        {
          while(($file_name = readdir($files)) !== FALSE)
          {
              if($file_name != '.' && $file_name != '..')
              {
               // select option with files names
        //       $options = $options."<option>$file_name</option>";   
               
               // display the file names
              // echo '<a href="download.php?file='.$file_name.'"> '.$file_name.'<br>';


echo '<option value='.$file_name.'>'.$file_name.'</option>';  

              }
          }
        }
        echo '</select>
<input type="text" name="dir" value="'.$dir_path.'" hidden>
        <input type="submit" name="shw" class="btn btn-info">
</form>';
}
}
}

if(isset($_POST['shw']))
{
$sem = $_POST['dir'];
$sub = $_POST['sub'];
$dir_path = $sem."/".$sub;

$options = "";

if(is_dir($dir_path))
{
    $files = opendir($dir_path);
    {
        if($files)
        {
          while(($file_name = readdir($files)) !== FALSE)
          {
              if($file_name != '.' && $file_name != '..')
              {
               
               // display the file names
              echo '<a href="download.php?file='.$file_name.'&dir='.$dir_path.'"> '.$file_name.'<br>';


}}}}}}

?>




<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
    
        </div>
    </body>
</html>

