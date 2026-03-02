<?php
include 'db.php';
$ecode = $_POST['ecode'];
$name = $_POST['name'];

$target_dir = "uploads/";
$imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
$new_filename = $ecode . "." . $imageFileType;
$target_file = $target_dir . $new_filename;

move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

mysqli_query($conn,"INSERT INTO employees (ecode,name,photo) VALUES ('$ecode','$name','$new_filename')");

echo "Employee Saved Successfully!";
?>