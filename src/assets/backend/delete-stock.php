<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "mysql");
define("DB_NAME", "Portafoglio");

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
    echo $conn->connect_error;
}

$stockId = $_GET['id'];
$stockId = substr($stockId, 9);
echo $stockId;

$sql = "DELETE FROM Titoli WHERE ID=$stockId";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
