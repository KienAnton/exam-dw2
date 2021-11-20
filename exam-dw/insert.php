<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$content = $_POST['content'];
$status = $_POST['status'];
$createdAt = $_POST['createdAt'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam-dw2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedbacks (name , email, phone, content, createdAt, status) VALUES ('$name', '$email', '$phone', '$content', '$createdAt', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

