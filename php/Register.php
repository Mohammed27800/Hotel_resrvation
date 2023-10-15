<!DOCTYPE html>
<html>
<head>
    <title>Customer insert</title>
</head>
<body>

<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Escaping user input to prevent SQL injection
$username = $conn->real_escape_string($username);

$sql = "INSERT INTO employee ($username,$password);";
$result = $conn->query($sql);

if ($conn->query($sql)) {
    header("Location: ../rooms.html");
}


// Close connection
$conn->close();
?>

</body>
</html>
