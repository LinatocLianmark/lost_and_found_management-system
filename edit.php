<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM items WHERE item_id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Edit Item</h1>

<form method="POST" action="update.php">
    <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">

    <input type="text" name="item_name" value="<?php echo $row['item_name']; ?>" required>

    <textarea name="description"><?php echo $row['description']; ?></textarea>

    <input type="date" name="date_reported" value="<?php echo $row['date_reported']; ?>" required>

    <select name="status" required>
        <option value="Lost" <?php if($row['status']=='Lost') echo 'selected'; ?>>Lost</option>
        <option value="Found" <?php if($row['status']=='Found') echo 'selected'; ?>>Found</option>
    </select>

    <button type="submit">Update Item</button>
</form>

</body>
</html>
