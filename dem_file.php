<?php include('sidebar.php'); ?>

<html>
<head>
	
</head>
<body>
<div class="pages">
  
<form>
	<select name="sem">
    <option value="1">Sem1</option>
    <option value="2">Sem2</option>
    <option value="3">Sem3</option>
    <option value="4">Sem4</option>
    <option value="5">Sem5</option>
    <option value="6">Sem6</option>
    <option value="7">Sem5</option>
    <option value="8">Sem6</option>
  </select>
<br><br>

<input type="submit" name="se" class="btn btn-primary btn-sm">

</form>


<?php

if(isset($_REQUEST['se']))
{
	$sem = $_REQUEST['sem'];
$dir_path = "uploads/".$sem;
$options = "";

echo '<form method="post" enctype="multipart/form-data"><select name="sub">';
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
}}
}
echo '</select>';

?>


    
    	<br>

  
<br><br><br>


    	<input type="file" name="image" required>
    	<br><br>

    	<input type="submit" name="sumit" value="upload">
<br><br><br>


<?php



//include('connect.php');
if (isset($_POST['sumit'])) {

//echo "sjfgsaj";
$path = $_POST['dir'];
$sub = $_POST['sub'];

	  	$image = $_FILES['image']['tmp_name'];
	  	$name = $_FILES['image']['name'];
	  	$size = $_FILES['image']['size'];
		$type = $_FILES['image']['type'];
		
		$file_store = $path."/".$sub."/".$name;


		$result = move_uploaded_file($image, $file_store);

		if($result)
			 echo 'Uploaded Succesfully';
		else
			 echo 'Unable to Upload';
				
}


if(isset($_REQUEST['se']))
echo '<input type="text" name="dir" value="'.$dir_path.'" hidden>';







?>

    </form>


<a href="show_files.php" class="btn btn-warning">See Files</a>


</div>
</body>
</html>		