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


<img id="Chat_gif" src="assets/hikerr.gif" alt="description of gif" style="width:280px;height:280px;margin: 20px;" > 

<section id="register" class="py-3">
<div class="container">

<form class="form-Horizontal" action="login.php" method="POST">
<div class="wrapper">
    <section class="form login">
      <header>Welcome to HolaIn</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
      

        <div class="error-text"></div>
        <div class="field input">
        <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
         <br>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="login" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
    
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


 

</body>
</html>

