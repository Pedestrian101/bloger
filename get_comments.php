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

// Prepare and execute SQL statement to retrieve comments from the database
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);

$comments = array();

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $comments[] = array(
      'postIndex' => $row['postIndex'],
      'name' => $row['name'],
      'comment' => $row['comment']
    );
  }
}

echo json_encode($comments);

$conn->close();
?>
