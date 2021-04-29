



<?php
//include header area
include('inc/header.php');

?>

<section id="register" class="py-3">
<div class="container">

<form class="form-Horizontal" action="profile.php" method="POST">
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
      <input type="file" class="form-control" id="exampleInputPassword1" placeholder="Password" name="avater">
    </div>
    </div>
    </div>
    </div>
    <br>
    <button type="submit" name="login" class="btn btn-primary">Submit</button>
    <br>
    
    <div class="row">
    <div class="form-group">
    <div class="col-sm-4">
    <?php if(isset($_POST['profile'])):?>
        <div class="alert alert-dismissible alert-warning">
        <p><?php echo $error;?></p> 
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
