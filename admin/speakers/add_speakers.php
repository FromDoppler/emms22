<?php
include_once '../config.php';
include_once '../../utils/GeoIp.php';
$ip = GeoIp::getIp();
isIPAllow($ip, $ALLOW_IPS);

if(isset($_POST['btn-save']))
{
 // variables for input data
     $name = $_POST['name'];
      $image =  $_FILES["image"]["name"];
 $file_name = $_FILES["image"]["name"];
$file_tmp = $_FILES["image"]["tmp_name"];
  if($file_name!=''){
        move_uploaded_file($file_tmp,"uploads/".$file_name);
  }
      $alt_image = $_POST['alt_image'];
      $job = $_POST['job'];
      $sm_twitter = $_POST['sm_twitter'];
      $sm_linkedin = $_POST['sm_linkedin'];
      $sm_instagram = $_POST['sm_instagram'];
      $sm_facebook = $_POST['sm_facebook'];
      $description = $_POST['description'];
      $image_company =  $_FILES["image_company"]["name"];
 $file_name = $_FILES["image_company"]["name"];
$file_tmp = $_FILES["image_company"]["tmp_name"];
  if($file_name!=''){
        move_uploaded_file($file_tmp,"uploads/".$file_name);
  }
      $alt_image_company = $_POST['alt_image_company'];
      $time = $_POST['time'];
      $orden = $_POST['orden'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO speakers (`name`,`image`,`alt_image`,`job`,`sm_twitter`,`sm_linkedin`,`sm_instagram`,`sm_facebook`,`description`,`image_company`,`alt_image_company`,`time`,`orden`) VALUES('".$name."','".$image."','".$alt_image."','".$job."','".$sm_twitter."','".$sm_linkedin."','".$sm_instagram."','".$sm_facebook."','".$description."','".$image_company."','".$alt_image_company."','".$time."','".$orden."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
 @header("Location: /admin/speakers/index.php?token=".$_GET['token']);
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABM Speakers</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="container"> 
<div id="table-responsive">
        <h3>Alta Speakers</h3>
    </div>
</div>
<div id="container"> <div   id="table-responsive">
    <form method="post" enctype="multipart/form-data" >
    <table  class="table table-striped">
    <tr>
    <td align="center"><a href="index.php?token=<?=$_GET['token']?>">back to main page</a></td>
    </tr>



      <tr>
   <td>
   <label for="name" class="form-label">Name:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="name" name="name" required placeholder="Name">
    </td>
    </tr>
    <tr>
   <td>
   <label for="image" class="form-label">Image:</label>
   </td>
    <td>
    <input type="file" class="form-control" id="image" name="image" required placeholder="Image">
    </td>
    </tr>
    <tr>
   <td>
   <label for="alt_image" class="form-label">Alt_image:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="alt_image" name="alt_image" required placeholder="Alt_image">
    </td>
    </tr>
    <tr>
   <td>
   <label for="job" class="form-label">Job:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="job" name="job" required placeholder="Job">
    </td>
    </tr>
    <tr>
   <td>
   <label for="sm_twitter" class="form-label">Sm_twitter:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="sm_twitter" name="sm_twitter" placeholder="Sm_twitter">
    </td>
    </tr>
    <tr>
   <td>
   <label for="sm_linkedin" class="form-label">Sm_linkedin:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="sm_linkedin" name="sm_linkedin" placeholder="Sm_linkedin">
    </td>
    </tr>
    <tr>
   <td>
   <label for="sm_instagram" class="form-label">Sm_instagram:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="sm_instagram" name="sm_instagram" placeholder="Sm_instagram">
    </td>
    </tr>
    <tr>
   <td>
   <label for="sm_facebook" class="form-label">Sm_facebook:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="sm_facebook" name="sm_facebook" placeholder="Sm_facebook">
    </td>
    </tr>
    <tr>
   <td>
   <label for="description" class="form-label">Description:</label>
   </td>
    <td>
     <textarea id="description" name="description" required></textarea>
    </td>
    </tr>
    <tr>
   <td>
   <label for="image_company" class="form-label">Image_company:</label>
   </td>
    <td>
    <input type="file" class="form-control" id="image_company" name="image_company" required placeholder="Image_company">
    </td>
    </tr>
    <tr>
   <td>
   <label for="alt_image_company" class="form-label">Alt_image_company:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="alt_image_company" name="alt_image_company" required placeholder="Alt_image_company">
    </td>
    </tr>
    <tr>
   <td>
   <label for="time" class="form-label">Time:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="time" name="time" required placeholder="Time">
    </td>
    </tr>
    <tr>
   <td>
   <label for="orden" class="form-label">Orden:</label>
   </td>
    <td>
    <input type="text" class="form-control" id="orden" name="orden" required placeholder="Orden">
    </td>
    </tr>
  
	<tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>