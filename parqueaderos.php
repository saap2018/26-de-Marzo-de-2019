<?php
include('Login/config.php');
include('Login/session.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "saap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO cantidaddeparqueaderos (id_cantidad, cantidad) VALUES (NULL, ".$_POST['numero'].")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("Location: parametrizar.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>