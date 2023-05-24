<?php
$servername = "localhost";
$username = "skill";
$password = "skill";
$dbname = "skill1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$quantity = $_POST["quantity"];

// Insert data into database
$sql = "INSERT INTO book (name, email,quantity) VALUES ('$name', '$email','$quantity')";

if ($conn->query($sql) === TRUE) {
  echo "Registration successful!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
