<?php
$nome = $_GET['name'];
$abbreviazione = $_GET['abbreviation'];
require_once('db-connection.php');

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO Cambiavalute (Nome, Abbreviazione)
VALUES ('{$nome}', '{$abbreviazione}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . ". " . $conn->error;
}

$conn->close();
?>
