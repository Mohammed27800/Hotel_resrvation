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

$username = strtoupper($_POST['username']);
$password = $_POST['password'];

// Escaping user input to prevent SQL injection
$username = $conn->real_escape_string($username);

$sql = "SELECT password FROM employee WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Username found, check the password
    $row = $result->fetch_assoc();
    $storedPassword = $row['password'];

    if ($password === $storedPassword) {
        header("Location: ../More-info.html");
    } else {
        echo "Password is incorrect.";
    }
} else {
    echo "It seems like you don't have an account ? <a href=\"../register.html\">Click here to make a new account</a>"  ;
}

// Close connection
$conn->close();
?>

</body>
</html>
