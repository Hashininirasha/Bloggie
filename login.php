<?php
    session_start();
    include('config/db.php');
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email != "" && $password != ""){
            $password = sha1($password);
            $sql = "SELECT * FROM user WHERE email= '$email' AND password='$password' ";
            $result = mysqli_query($con, $sql) or die ('Error');
            if(mysqli_num_rows($result) > 0){
              while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $username = $row['username'];
                $password = $row['$password'];
                $email = $row['email'];

                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['email'] = $email;
                header('Location:dashboard.php');
                
              }

            }
            else{
                  $error="User name or password is Incorrect";
            }

        }
        else{
            $error = "Please fill the details";
        }
    }



?>

<?php
//include header area
include('inc/header.php');

?>

<section id="register" class="py-3">
<div class="container">

<form class="form-Horizontal" action="login.php" method="POST">
  <fieldset>
    <legend>Logging User</legend>
    
    <br>
    <div class="row">
        <div class="col-sm-6">
    <div class="form-group">
      <label for="exampleInputEmail1" class="col-lg-2 col-form-label" >Email address</label>
      <div class="col-lg-10">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      
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
    <button type="submit" name="login" class="btn btn-primary">Login</button>
    <br>
    <p>
      Not yet a Member? <a href="index.php">Sign up </a>
    </p>
    <div class="row">
    <div class="form-group">
    <div class="col-sm-4">
    <?php if(isset($_POST['login'])):?>
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
