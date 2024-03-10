<?php
include './assets/dbconx.php';
include './view/header.php';
?>
<!-- Table -->
<table border="1" class="m-5 table table-striped table-hover table-bordered text-center">
  <?php
  // Event Status
  if (isset($_GET['status'])) {
    echo '<div class="m-3 py-2 px-4 alert alert-' . $_GET["status"] . '">' . $_GET["msg"] . '</div>';
  }
  ?>
  <thead>
    <tr>
      <td>id</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Age</td>
      <td>Update</td>
      <td>Delete</td>
    </tr>
  </thead>
  <tbody>
    <?php
    // Insert ui data from DB
    $query1 = mysqli_query($con, "SELECT * FROM `students`");
    if ($query1) {
      $i = 1;
      while ($row = mysqli_fetch_assoc($query1)) { ?>
        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $row['first_name'] ?></td>
          <td><?php echo $row['last_name'] ?></td>
          <td><?php echo $row['age'] ?></td>
          <td><a href="./assets/update.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">Update</a></td>
          <td><a href="./assets/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php
      }
    } else die("Error query " . mysqli_error($con));
    ?>

  </tbody>
</table>

<!-- Modal add -->
<form method="POST" action="./assets/create.php">
  <div class="modal fade" id="addStudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname" required>
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" required>
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" name="age" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary submit">Add</button>
        </div>
      </div>
    </div>
  </div>
</form>

<?php
include './view/footer.php';
?>