<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: index.php");
}
?>
<h2>Dashboard</h2>
<a href="add_employee.php">Add Employee</a><br>
<a href="view_employees.php">View Employees</a><br>
<a href="logout.php">Logout</a>