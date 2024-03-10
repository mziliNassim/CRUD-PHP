<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include "dbconx.php";

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];

  $sql = "INSERT INTO `students`(`first_name`, `last_name`, `age`) VALUES ('$fname', '$lname', $age)";
  $query = mysqli_query($con, $sql);

  if (!$query) {
    $status = "danger";
    // die('query failed : ' . mysqli_error($con));
    header('location:../index.php?status=' . $status . '&&msg=error insert student!');
    exit();
  } else {
    $status = "success";
    header('location:../index.php?status=' . $status . '&&msg=New student added successfully');
    exit();
  }
} else header('location:../index.php');
