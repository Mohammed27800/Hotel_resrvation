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

$username = strtoupper($conn->real_escape_string($_POST['username']));
$password = $_POST['password'];

$sql = "INSERT INTO employee (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../More-info.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

</body>
</html>
