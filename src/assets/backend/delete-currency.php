<?php
require_once('db-connection.php');
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
    echo $conn->connect_error;
}

$currencyId = $_GET['id'];
$currencyId = substr($currencyId, 12);

$sql = "DELETE FROM Cambiavalute WHERE ID=$currencyId";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
