<?php
$postIndex = $_GET['postIndex'];

// Retrieve comments for the specified post from the database or file

// Send the comments as a JSON response
header('Content-Type: application/json');
echo json_encode($comments);
?>
