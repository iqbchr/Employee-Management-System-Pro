<?php include 'db.php'; ?>
<h2>Add Employee</h2>
<form action="save_employee.php" method="POST" enctype="multipart/form-data">
E Code: <input type="text" name="ecode" required><br><br>
Name: <input type="text" name="name" required><br><br>
Photo: <input type="file" name="photo" required><br><br>
<input type="submit" value="Save Employee">
</form>