<?php
$servername = "localhost";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get post index, name, and comment data from the JavaScript function
$postIndex = $_POST['postIndex'];
$name = $_POST['name'];
$comment = $_POST['comment'];

// Prepare and execute SQL statement to insert the comment into the database
$sql = $conn->prepare("INSERT INTO comments (postIndex, name, comment) VALUES (?,?,?)");
$sql->bind_param("iss", $postIndex, $name, $comment);

if ($sql->execute() === TRUE) {
  echo "Comment stored successfully";
} else {
  echo "Error storing comment: " . $conn->error;
}

$conn->close();
?>
