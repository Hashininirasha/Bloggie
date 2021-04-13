<?php
//include header area
include('inc/header.php');
?>

<section id="register" class="py-3">
<div class="container">
<div class="row">
<div class="col-sm-6">
<form>
  <fieldset>
    <legend>User Registration</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">User Name</label>
      <input type="text" class="form-control" id="exampleInputname" placeholder="Enter user name">
    </div><br>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div><br>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div><br>
   
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div>
</div>
</div>
</section>

<?php
//include footer area
include('inc/footer.php');
?>
