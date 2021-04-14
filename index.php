<?php
//include header area
include('inc/header.php');

?>

<section id="register" class="py-3">
<div class="container">

<form class="form-Horizontal" action="index.php" method="POST">
  <fieldset>
    <legend>User Registration</legend>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="exampleInputEmail1" class="col-lg-2 col-form-label">UserName</label>
                <div class="col-lg-10">
                <input type="text" class="form-control" id="exampleInputname" placeholder="Enter user name" name="username">
            </div>
        </div>
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
      <label for="exampleInputEmail1" class="col-lg-2 col-form-label" >Email address</label>
      <div class="col-lg-10">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    </div>
    </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
      <label for="exampleInputPassword1" class="col-lg-2 col-form-label" >Password</label>
      <div class="col-lg-10">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    </div>
    </div>
    </div>
    <br>
    <button type="submit" name="register" class="btn btn-primary">Register</button>
    <br>

    <div class="row">
    <div class="form-group">
    <div class="col-sm-4">
    <?php if(isset($_POST['register'])):?>
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
