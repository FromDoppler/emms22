<?php
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM aliados_pro WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
     
   $name = $_POST['name'];
          
  if($_FILES["image"]["name"]==''){
 $image =  $fetched_row['image'];
}else{
  $image =  $_FILES["image"]["name"];
  $file_name = $_FILES["image"]["name"];
$file_tmp = $_FILES["image"]["tmp_name"];
  if($file_name!=''){
        move_uploaded_file($file_tmp,"uploads/".$file_name);
       
  }
}
         
   $alt_image = $_POST['alt_image'];
          
   $Orden = $_POST['Orden'];
          
   $link = $_POST['link'];
        // variables for input data

 // sql query for update data into database
  $sql_query="UPDATE aliados_pro SET `name`='$name',`image`='$image',`alt_image`='$alt_image',`Orden`='$Orden',`link`='$link' WHERE id=".$_GET['edit_id'];

 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('aliados_pro updated successfully');
  window.location.href='indexaliados_pro.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: indexaliados_pro.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Core PHP Crud functions By PHP Code Builder</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="container"> <div id="table-responsive">
        <label>Core PHP Crud functions - <a href="http://www.phpcodebuilder.com" target="_blank">By PHP Code Builder</a></label>
    </div>
</div>

<div id="container"> &<div   id="table-responsive">
    <form method="post" enctype="multipart/form-data">
    <table  class="table table-striped">
    <tr>
   <td>
   <label for="name" class="form-label">Name:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['name'] ?>" class="form-control" id="name" name="name">
</td>
    </tr>
  <tr>
   <td>
   <label for="image" class="form-label">Image:</label>
   </td>
    <td>
    <input type="file" value="<?php echo $fetched_row['image'] ?>" class="form-control" id="image" name="image">
</td>
    </tr>
  <tr>
   <td>
   <label for="alt_image" class="form-label">Alt_image:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['alt_image'] ?>" class="form-control" id="alt_image" name="alt_image">
</td>
    </tr>
  <tr>
   <td>
   <label for="Orden" class="form-label">Orden:</label>
   </td>
    <td>
    <input type="number" value="<?php echo $fetched_row['Orden'] ?>" class="form-control" id="Orden" name="Orden">
</td>
    </tr>
  <tr>
   <td>
   <label for="link" class="form-label">Link:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['link'] ?>" class="form-control" id="link" name="link">
</td>
    </tr>
      <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
