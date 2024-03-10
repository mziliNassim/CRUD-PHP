<?php
if (!isset($_GET['id'])) header('location:../index.php');
else include "./dbconx.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <title>CRUD Update</title>
</head>

<body>
  <!-- Update form -->
  <form method="POST" action="updatevalidatio.php">
    <div class="mt-5 container">
      <?php
      $id = $_GET['id'];
      $sql = "SELECT * FROM `students` WHERE `id`=$id";
      $query = mysqli_query($con, $sql);

      if (!$query) {
        die("Could not Update Student");
      } else {
        $row = mysqli_fetch_assoc($query);
      ?>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="mb-3">
          <label for="fname" class="form-label">First Name</label>
          <input type="text" name="fname" value="<?php echo $row['first_name']; ?>" class="form-control" name="fname" required>
        </div>
        <div class="mb-3">
          <label for="lname" class="form-label">Last Name</label>
          <input type="text" name="lname" value="<?php echo $row['last_name']; ?>" class="form-control" name="lname" required>
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input value="<?php echo $row['age'];
                      } ?>" type="number" name="age" class="form-control" name="age" required>
        </div>
        <div class="modal-footer">
          <input type="submit" name="cancel" class="mx-3 btn btn-secondary" data-bs-dismiss="modal" value='Cancel'>
          <input type="submit" name="update" class="btn btn-primary submit" value='Update'>
        </div>
    </div>
  </form>

  <script src="../bootstrap/bootstrap.bundle.min.js"></script>

</body>

</html>