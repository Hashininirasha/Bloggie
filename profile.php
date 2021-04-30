<?php 
session_start(); 


    include("config/db.php");
    if(isset($_FILES['avatar'])){

        $profession = $_POST['profession'];
        if($profession !=""){
          $uploadok=1;
          $file_name=$_FILES['avatar']['name'];
          $file_size=$_FILES['avatar']['size'];
          $file_tmp=$_FILES['avatar']['tmp_name'];
          $file_type=$_FILES['avatar']['type'];
          $target_dir="assets/uploads";
          $target_file=$target_dir.basename($_FILES['avatar']['name']);
          $data=array(
              'file_name' => $file_name,
              'file_size' => $file_size,
              'file_tmp' => $file_tmp,
              'file_type' => $file_type,
              'target_dir' => $target_dir,
          );
          echo '<pre>';
          print_r($data);
          echo '<pre>';
          exit();
        }
        else{
          $msg = "Please Fill the Details !";
        }

    }

?>

 

<?php
//include header area
include('inc/header.php');

?>

<section id="register" class="py-3">
<div class="container">

<form class="form-Horizontal" action="profile.php" method="POST" enctype="multipart/form-data">
  <fieldset>
    <legend>Add Profile</legend>
    
    <br>
    <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
      <label for="profession" class="col-lg-2 col-form-label" >Profession</label>
      <div class="col-lg-10">
      <input type="text" class="form-control" id="profession" aria-describedby="emailHelp" placeholder="Enter Profession" name="profession">
      
    </div>
    </div>
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
      <label for="avatar" class="col-lg-2 col-form-label" >Avatar</label>
      <div class="col-lg-10">
      <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Avatar" name="avatar">
    </div>
    </div>
    </div>
    </div>
    <br>
    <button type="submit" name="profile" class="btn btn-primary">Add Profile</button>
    <br>
    
    <div class="row">
    <div class="form-group">
    <div class="col-sm-4">
    <?php if(isset($_POST['profile'])):?>
        <div class="alert alert-dismissible alert-warning">
        <p><?php echo $msg;?></p> 
        </div>
      <?php endif;?>
    </div>
    </div>
    </div>
  </fieldset>
</form>
</div>

</section>


<?php
//include footer area
include('inc/footer.php');
?>
