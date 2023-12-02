<?php
$name = $_POST['name'];
$comment = $_POST['comment'];

// Perform necessary validation and sanitization

// Save the comment to the database or file

// Send a response
header('Content-Type: application/json');
echo json_encode(['success' => true]);
?>
