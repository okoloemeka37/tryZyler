
<?php 
require_once("config.php");

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['status'] !== 'admin') {
        header("location:user.php");
    }
}else{
  header("location:login.php");
}


require_once("Sly.php");

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
<div class="mes btn btn-primary"><?php $error['gen'] ?></div>

    <div class="container mt-4">
        <h1 class="mb-4">Task Manager</h1>

        <!-- Form to add a new task -->
        <form id="taskForm" method="POST">
            <div class="mb-3">
                <label for="taskTitle" class="form-label">Task Title</label>
                <input type="text" name="name" class="form-control" id="taskTitle" placeholder="Enter task title" required>
           <p class="text-danger"><?php echo $error['name']?></p>
           
            </div>
            <div class="mb-3">
                <label for="taskDescription" class="form-label">Task Description</label>
                <textarea class="form-control" name="des" id="taskDescription" rows="3" placeholder="Enter task description" required></textarea>
           <p class="text-danger"><?php echo $error['des']?></p>
           
            </div>

            <div class="mb-3">
                <label class="form-label">Points Awarded</label>
                <input type="number" name="point" class="form-control" id="" placeholder="Enter Point">
                <p class="text-danger"><?php echo $error['point'] ?></p>
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
                    <th>act 1</th>
                    <th>act2</th>
                </tr>
            </thead>
            <tbody id="taskList">
               <?php $count=1; foreach ($tasks as $task) { $c=$count++ ?>
                <tr>
                    <td><?php echo $c?></td>
                    <td><?php echo $task['name'] ?></td>
                    <td><?php  echo $task['des']?></td>
                    <td><?php echo $task['point']?></td>
                    <td class="btn bnt-dark">Edit</td>
                    <td class="btn btn-danger del" id=<?php echo $task['id'] ?> >Delete</td>
                </tr>
              <?php } ?>
            </tbody>
        </table>
    </div>

     <script>
        // Handle form submission
       const dels= document.querySelectorAll('.del')
       dels.forEach(del => {
        del.addEventListener('click', function(event) {
            let id=this.id;
            const body={
                id,
                type:"Delete"
            }
        fetch('Sly.php',{
            method:"POST",
            body:body
        }) .then(response => response.text())
                    .then(data => {
                        // Display the response in the #response div
                        console.log(data)
                    })
                    .catch(error => console.error('Error:', error));
                });
       });
      
        
    </script> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
