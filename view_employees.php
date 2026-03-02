<?php
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM employees");
?>
<h2>Employee List</h2>
<table border="1">
<tr><th>E Code</th><th>Name</th><th>Photo</th><th>Action</th></tr>
<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td><?php echo $row['ecode']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><img src="uploads/<?php echo $row['photo']; ?>" width="60"></td>
<td><a href="delete_employee.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>