<?php
$servername = "localhost";
$username = "qwerty";
$password = "qwerty";
$dbname = "qwerty";

$title=$_GET["title"];
$img=$_GET["img"];
$body=$_GET["body"];
$id=$_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "UPDATE posts SET title='$title', img='$img', body='$body' WHERE id=1";
$sql = "UPDATE posts SET title='$title', img='$img', body='$body' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: msg.php');
    die();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 
