<?php
require_once('config.php');
if(!isset($_SESSION['user'])){
    header("location:login.php");
    }
require_once("action.php");

require_once("Sly.php");
$tasks=tasks();
//4448317948
//29204706

$scores=getScore();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List and Scoreboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php require_once('navbar.php') ?>
<?php if($_SESSION['user']['verified'] !== 'true'){ ?>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="text-center">
            <h1 class="display-4 mb-4">Verify Your Account</h1>
            <p class="lead mb-4">Please enter the code sent to your email to verify your account.</p>
            <form method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control form-control-lg text-center" name="code" placeholder="Enter verification code" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg w-100" name="verify">Verify</button>
            </form>
        </div>
    </div><a href="mail.php">send</a>
<?php }else{ ?>

    
    <div class="container mt-5">
        <h1 class="text-center mb-4">Task List and Scoreboard</h1>
        <div class="d-flex justify-content-between">
            <!-- Task List -->
            <div class="flex-grow-1 me-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0">Tasks</h5>
                    </div>
                    <ul class="list-group list-group-flush">

                    <?php foreach ($tasks as $task ) { ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1"><?php echo $task['name'] ?></h6>
                                <p class="mb-0 text-muted"><?php echo $task['des']?></p>
                            </div>
                            
                        </li>
                        
                 <?php   } ?>

                      
                        
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="mb-1">Refer us</h6>
                                <p class="mb-0 text-muted">https://zyler.cleverapps.io/index.php?referid=<?php echo $_SESSION['user']['id'] ?>&user_id=<?php echo $_SESSION['user']['id']?></p>
                            </div>
                           
                        </li>
                       
                    </ul>
                </div>
            </div>

            <!-- Scoreboard -->
            <div class="flex-shrink-0" style="width: 300px;">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h5 class="mb-0">Scoreboard</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                       <?php foreach($scores as $score){?>

                        <li class="list-group-item d-flex justify-content-between align-items-center <?php if($score['id']===$_SESSION['user']['id']){echo 'bg-primary';}?>">
                            <div><?php echo $score['name']?></div>
                            <span class="badge bg-success rounded-pill"><?php echo $score['points']?></span>
                        </li>
                    <?php   } ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
