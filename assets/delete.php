<?php

if (isset($_GET['id'])) {
  include "./dbconx.php";

  $id = $_GET['id'];

  $sql = "DELETE FROM `students` WHERE id=$id";

  $query = mysqli_query($con, $sql);

  if (!$query) {
    die("Could not delete");
  } else {
    $status = "success";
    header('location:../index.php?status=' . $status . '&&msg=Student deleted successfully');
    exit();
  }
}
