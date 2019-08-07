<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "mysql");
define("DB_NAME", "Portafoglio");

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$stockName = $_GET['name'];
$stockSymbol = $_GET['symbol'];
$stockCurrency = $_GET['currency'];
echo $stockName.", ".$stockSymbol.", ".$stockCurrency;

$sql = "INSERT INTO Titoli (Nome, Simbolo, Valuta)
VALUES ('{$stockName}', '{$stockSymbol}', '{$stockCurrency}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . ". " . $conn->error;
}

$conn->close();
?>
