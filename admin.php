<?php
require_once("config.php");
require_once("Sly.php");
$users=gu();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once("navbar.php")?>
    <div class="container mt-4">
        <h1 class="mb-4">User Management</h1>

        <!-- Table to list users -->
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Points</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
             <?php 
$h=1;
foreach($users as $user){
    $v=$h++; ?>
    
                <tr>
                    <td><?php echo $v ?></td>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['points'] ?></td>
                    <td>
                        <!-- Suspend button -->
                        <button class="btn btn-warning btn-sm" onclick="suspendUser(1)">Suspend</button>
                        <!-- Email button -->
                        <button class="btn btn-primary btn-sm" onclick="emailUser('johndoe@example.com')">Email</button>
                    </td>
                </tr>
            <?php } ?>                
                <!-- Repeat for other users -->
            </tbody>
        </table>
    </div>

    <!-- JavaScript -->
    <script>
        function suspendUser(userId) {
            // Handle user suspension logic here
            alert('Suspend user with ID: ' + userId);
        }

        function emailUser(email) {
            // Handle sending email logic here
            alert('Send email to: ' + email);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
