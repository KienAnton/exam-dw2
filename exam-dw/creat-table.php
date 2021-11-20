<?php
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

$sql_query = "CREATE TABLE feedbacks (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(10) NOT NULL,
	phone VARCHAR(15) NOT NULL,
	content VARCHAR(500),
	createdAt DATE,
	status INT(5)
)";

$status = $conn->query($sql_query);

// If tables created, status should be true
if ($status) {
    echo "Table feedbacks created successfully.";
}
else {
    echo "Error creating table: " . $conn->error;
}

// Connection Close
$conn->close();
?>