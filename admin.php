<?php
require_once("config.php");

echo $_SESSION["user"]["status"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <?php require_once("navbar.php")?>
    <div class="container mt-4">
        <h1 class="mb-4">User Management</h1>

        <!-- Table to list users -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Points</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example user row -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>johndoe@example.com</td>
                    <td>150</td>
                    <td>
                        <!-- Suspend button -->
                        <button class="btn btn-warning btn-sm" onclick="suspendUser(1)">Suspend</button>
                        <!-- Email button -->
                        <button class="btn btn-primary btn-sm" onclick="emailUser('johndoe@example.com')">Email</button>
                    </td>
                </tr>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
