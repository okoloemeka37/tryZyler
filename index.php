<?php
require_once("config.php");

if(isset($_SESSION['user'])){
    header("location:user.php");}

require_once('auth.php');


$url = 'http://twitter.com/users/show/XpertDevelopers';
$response = file_get_contents ( $url );
$t_profile = new SimpleXMLElement ( $response );
$count = $t_profile->followers_count;

echo $count;

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
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" value="<?php echo $name ?>" name="name">
        <div id="nameError" class=" text-danger">
        <?php echo $error['name'] ?>
        </div>
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="email" class="form-control" id="Email" name="email" value="<?php echo $email ?>" >
        <div id="nameError" class="text-danger"><?php echo $error['email'] ?></div>
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="text" class="form-control" id="Password" name="password" >
        <div id="PasswordError" class="text-danger"></div>
    </div>
    <div class="mb-3">
        <label for="ComfirmP" class="form-label">Comfirm Password</label>
        <input type="text" class="form-control" id="ComfirmP" name="ComfirmP" >
        <div id="ComfirmPError" class="text-danger"><?php echo $error['password'] ?></div>
    </div>


    <div class="mb-3">
        <button type="submit" name="signup" class="btn btn-primary w-100">Submit</button>
    </div>

    <p>Already Have An Account <a href="login.php">login</a></p>
    </form>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
