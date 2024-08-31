<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Task Manager</h1>

        <!-- Form to add a new task -->
        <form id="taskForm">
            <div class="mb-3">
                <label for="taskTitle" class="form-label">Task Title</label>
                <input type="text" class="form-control" id="taskTitle" placeholder="Enter task title" required>
            </div>
            <div class="mb-3">
                <label for="taskDescription" class="form-label">Task Description</label>
                <textarea class="form-control" id="taskDescription" rows="3" placeholder="Enter task description" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>

        <!-- Table to display the tasks -->
        <h2 class="mt-5">Task List</h2>
        <table class="table table-bordered mt-3">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="taskList">
                <!-- Tasks will be added here dynamically -->
            </tbody>
        </table>
    </div>

    <!-- JavaScript -->
    <script>
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
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
