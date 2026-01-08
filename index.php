<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Lost and Found System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Lost and Found Management System</h1>

<form method="POST" action="insert.php" onsubmit="return validateForm()">
    <input type="text" name="item_name" placeholder="Item Name" required>
    <textarea name="description" placeholder="Item Description"></textarea>
    <input type="date" name="date_reported" required>

    <select name="status" required>
        <option value="">Select Status</option>
        <option value="Lost">Lost</option>
        <option value="Found">Found</option>
    </select>

    <button type="submit">Add Item</button>
</form>

<h2>Item Records</h2>

<table>
<tr>
    <th>Item Name</th>
    <th>Description</th>
    <th>Date</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM items");
while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['item_name']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['date_reported']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['item_id']; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $row['item_id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

<script src="script.js"></script>
</body>
</html>
