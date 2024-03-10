<?php
if (isset($_POST['update'])) {
  include "./dbconx.php";

  $id = $_POST['id'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];

  $sql = "UPDATE `students` SET `first_name`='$fname',`last_name`='$lname',`age`='$age' WHERE id = $id";
  $query3 = mysqli_query($con, $sql);

  if ($query3) {
    $status = "success";
    header('location:../index.php?status=' . $status . '&&msg=Student Update successfully!');
    exit();
  } else die("Could not update");
}
header('location:../index.php');
exit();
