<?php include "../app/views/partials/header.php" ?>

<div class="container mt-5">
  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete Task</h2>
    <div class="mb-2">
      <label for="">Task Name</label>
      <input type="text" name="task_name" disabled value = "<?= $row->task_name?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Task Description</label>
      <input type="text" name="task_description" disabled value = " <?= $row->task_description ?>" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Task Status</label>

      <select disabled name="task_status" class="form-control">
        <option value="Select">--Select--</option>
        <option value="Complete">Complete</option>
        <option value="To do">To do</option>
        <option value="Ongoing">Ongoing</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="">Task Due</label>
      <input type="date" name="task_due" disabled value = "<?= $row->task_due?>" class="form-control">
    </div>

    <input type="hidden" name="id" value="<?= $row->id ?>">
    <button class="btn btn-danger" type="submit">Delete</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php" ?>