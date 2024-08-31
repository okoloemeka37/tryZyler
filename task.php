
<?php 
require_once("config.php");

require_once("sly.php");

$tasks=tasks();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php require_once("navbar.php")?>
    <div class="container mt-4">
        <h1 class="mb-4">Task Manager</h1>

        <!-- Form to add a new task -->
        <form id="taskForm" method="POST">
            <div class="mb-3">
                <label for="taskTitle" class="form-label">Task Title</label>
                <input type="text" name="name" class="form-control" id="taskTitle" placeholder="Enter task title" required>
            </div>
            <div class="mb-3">
                <label for="taskDescription" class="form-label">Task Description</label>
                <textarea class="form-control" name="des" id="taskDescription" rows="3" placeholder="Enter task description" required></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Points Awarded</label>
                <input type="number" name="point" class="form-control" id="" placeholder="Enter Point">

            </div>
            <button type="submit" name="task" class="btn btn-primary">Add Task</button>
        </form>

        <!-- Table to display the tasks -->
        <h2 class="mt-5">Task List</h2>
        <table class="table table-bordered mt-3">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Point</th>
                </tr>
            </thead>
            <tbody id="taskList">
               <?php $count=1; foreach ($tasts as $task) { $c=$count++ ?>
                <tr>
                    <td><?php echo $c?></td>
                    <td><?php echo $task['name'] ?></td>
                    <td><?php  echo $task['des']?></td>
                    <td><?php echo $task['point']?></td>
                </tr>
              <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript -->
 <!--    <script>
        // Handle form submission
        document.getElementById('taskForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from refreshing the page

            // Get the task title and description
            const title = document.getElementById('taskTitle').value;
            const description = document.getElementById('taskDescription').value;

            // Get the task list table body
            const taskList = document.getElementById('taskList');

            // Determine the new task ID
            const taskId = taskList.rows.length + 1;

            // Create a new row for the task
            const newRow = taskList.insertRow();
            newRow.innerHTML = `
                <td>${taskId}</td>
                <td>${title}</td>
                <td>${description}</td>
            `;

            // Clear the form inputs
            document.getElementById('taskTitle').value = '';
            document.getElementById('taskDescription').value = '';
        });
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
