<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
//include header area
include('inc/header.php');

?>
<div class="container">
<?php
    $url = $_SERVER['PHP_SELF'];
    $seg = explode('/',$url);
    $path = "http://127.0.0.1".$seg[0].'/'.$seg[1];
    echo $path;
?>
<p>
<button type="button" class="btn btn-dark" a href="login.php"> <i class="fas fa-user"></i><a href="login.php">|Log out </a></button>

      
    </p>
<h1 style="text-align: center;"><i class="fas fa-user"></i>| <?php echo $_SESSION['username']; ?> </h1>
    <div class="row">
    <div class="col-lg-12">
        
    </div>
    </div>
</div>
<?php
//include footer area
include('inc/footer.php');
?>

</body>
</html>