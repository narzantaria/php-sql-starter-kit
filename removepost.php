<?php
$servername = "localhost";
$username = "shutruk";
$password = "82gsu92x";
$dbname = "qwerty";

$id=$_GET["id"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM posts WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header('Location: msg.php');
    die();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 