<?php
include 'db.php';

$item = $_POST['item_name'];
$desc = $_POST['description'];
$date = $_POST['date_reported'];
$status = $_POST['status'];

$sql = "INSERT INTO items (item_name, description, date_reported, status)
        VALUES ('$item', '$desc', '$date', '$status')";

$conn->query($sql);
header("Location: index.php");
?>
