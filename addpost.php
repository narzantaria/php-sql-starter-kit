<?php
$servername = "localhost";
$username = "shutruk";
$password = "82gsu92x";
$dbname = "qwerty";

$title=$_GET["title"];
$img=$_GET["img"];
$body=$_GET["body"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "UPDATE posts SET title='$title', img='$img', body='$body' WHERE id=1";
$sql = "INSERT into posts (title, img, body) VALUES ('$title', '$img', '$body')";

if ($conn->query($sql) === TRUE) {
    header('Location: msg.php');
    die();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 