<?php
include_once '../config.php';
include_once '../../utils/GeoIp.php';
$ip = GeoIp::getIp();
isIPAllow($ip, $ALLOW_IPS);

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM speakers WHERE id=".$_GET['edit_id'];
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
          
   $job = $_POST['job'];
          
   $sm_twitter = $_POST['sm_twitter'];
          
   $sm_linkedin = $_POST['sm_linkedin'];
          
   $sm_instagram = $_POST['sm_instagram'];
          
   $sm_facebook = $_POST['sm_facebook'];
          
   $description = $_POST['description'];
          
  if($_FILES["image_company"]["name"]==''){
 $image_company =  $fetched_row['image_company'];
}else{
  $image_company =  $_FILES["image_company"]["name"];
  $file_name = $_FILES["image_company"]["name"];
$file_tmp = $_FILES["image_company"]["tmp_name"];
  if($file_name!=''){
        move_uploaded_file($file_tmp,"uploads/".$file_name);
       
  }
}
         
   $alt_image_company = $_POST['alt_image_company'];
          
   $time = $_POST['time'];
          
   $orden = $_POST['orden'];
   $day = $_POST['day'];
   //print_r($_POST); exit;
        // variables for input data

 // sql query for update data into database
  $sql_query="UPDATE speakers SET `name`='$name',`image`='$image',`alt_image`='$alt_image',`job`='$job',`sm_twitter`='$sm_twitter',`sm_linkedin`='$sm_linkedin',`sm_instagram`='$sm_instagram',`sm_facebook`='$sm_facebook',`description`='$description',`image_company`='$image_company',`alt_image_company`='$alt_image_company',`time`='$time',`orden`='$orden',`day`='$day' WHERE id=".$_GET['edit_id'];

 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('aliados_speakers updated successfully');
  window.location.href='index.php?token=<?=$_GET['token']?>';
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
 header("Location: index.php?token=".$_GET['token']);
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

<div id="container"> <div id="table-responsive">
        <h3>ABM Speakers</h3>
    </div>
</div>

<div id="container"> 
  
<div   id="table-responsive">
    <form method="post" enctype="multipart/form-data">
    <table  class="table table-striped">
          <tr>
    <td align="center"><a href="index.php?token=<?=$_GET['token']?>">back to main page</a></td>
    </tr>
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
     <img src="uploads/<?=$fetched_row['image']?>" alt="<?=$fetched_row['alt_image']?>" width="150" height="150"> 
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
   <label for="job" class="form-label">Job:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['job'] ?>" class="form-control" id="job" name="job">
</td>
    </tr>
  <tr>
   <td>
   <label for="sm_twitter" class="form-label">Sm_twitter:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['sm_twitter'] ?>" class="form-control" id="sm_twitter" name="sm_twitter">
</td>
    </tr>
  <tr>
   <td>
   <label for="sm_linkedin" class="form-label">Sm_linkedin:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['sm_linkedin'] ?>" class="form-control" id="sm_linkedin" name="sm_linkedin">
</td>
    </tr>
  <tr>
   <td>
   <label for="sm_instagram" class="form-label">Sm_instagram:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['sm_instagram'] ?>" class="form-control" id="sm_instagram" name="sm_instagram">
</td>
    </tr>
  <tr>
   <td>
   <label for="sm_facebook" class="form-label">Sm_facebook:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['sm_facebook'] ?>" class="form-control" id="sm_facebook" name="sm_facebook">
</td>
    </tr>
  <tr>
   <td>
   <label for="description" class="form-label">Description:</label>
   </td>
    <td>
     <textarea  class="form-control" id="description" name="description"><?=$fetched_row['description']?></textarea>
</td>
    </tr>
  <tr>
   <td>
   <label for="image_company" class="form-label">Image_company:</label>
   </td>
    <td>
    <img src="uploads/<?=$fetched_row['image_company']?>" alt="<?=$fetched_row['alt_image_company']?>" width="70" height="70"> 
    <input type="file" value="<?php echo $fetched_row['image_company'] ?>" class="form-control" id="image_company" name="image_company">
</td>
    </tr>
  <tr>
   <td>
   <label for="alt_image_company" class="form-label">Alt_image_company:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['alt_image_company'] ?>" class="form-control" id="alt_image_company" name="alt_image_company">
</td>
    </tr>
  <tr>
   <td>
   <label for="time" class="form-label">Time:</label>
   </td>
    <td>
    <input type="text" value="<?php echo $fetched_row['time'] ?>" class="form-control" id="time" name="time">
</td>
    </tr>
      <tr>
   <td>
   <label for="day" class="form-label">Day:</label>
   </td>
    <td>
      <?php
      //print_r($fetched_row); exit;
      ?>
    <select name="day" class="form-select" >
      <option <?= ($fetched_row['day']=== '1') ? 'selected ' : '' ?>value="1">Miercoles</option>
      <option <?= ($fetched_row['day']=== '2') ? 'selected ' : '' ?>value="2">Jueves</option>
    </select>
</td>
    </tr>
  <tr>
   <td>
   <label for="orden" class="form-label">Orden:</label>
   </td>
    <td>

    <input type="text" value="<?php echo $fetched_row['orden'] ?>" class="form-control" id="orden" name="orden">
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
