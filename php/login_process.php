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

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// SQL query to create table (if not exists)
$table = "CREATE TABLE IF NOT EXISTS book (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(25),
    phone VARCHAR(25),
    email VARCHAR(25)
)";

$sql = "INSERT INTO book (customer_name, phone, email) VALUES ('$name', '$phone', '$email')";

if ($conn->query($table) and $conn->query($sql) === TRUE) {

    header("Location: ../rooms.html");
    exit();
    









} else {
       header("Location: ../Error-page.html");
    exit();
}

// SQL query to insert data



// Close connection
$conn->close();
?>

</body>
</html>
