<?php
require_once("config.php");
require_once('auth.php');
if(isset($_SESSION['user'])){
    if($_SESSION["user"]["status"]== "admin"){
header("location:admin.php");
    }else{
header("location:user.php");
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php require_once('navbar.php') ?>

<div class="container w-50 mt-3">
    <p>Register With Us</p>
<form action="" method="POST">

<p class="text-danger"><?php echo $error['gen'] ?></p>

   
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email" name="email" value="<?php echo $email ?>" >
        <div id="nameError" class="text-danger"><?php echo $error['email'] ?></div>
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="text" class="form-control" id="Password" name="password" >
        <div id="PasswordError" class="text-danger"><?php echo $error['password']?></div>
    </div>
   


    <div class="mb-3">
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
    </div>

    <p>Don't Have An Account <a href="index.php">SignUp</a></p>
    </form>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
