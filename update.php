<?php
include 'db.php';

$id = $_POST['item_id'];
$item = $_POST['item_name'];
$desc = $_POST['description'];
$date = $_POST['date_reported'];
$status = $_POST['status'];

$sql = "UPDATE items 
        SET item_name='$item',
            description='$desc',
            date_reported='$date',
            status='$status'
        WHERE item_id=$id";

$conn->query($sql);

header("Location: index.php");
?>
