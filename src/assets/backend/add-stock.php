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
$stockPrice = $_GET['price'];
echo $stockSymbol;
//
// $sql = "INSERT INTO Titoli (Nome, Simbolo) VALUES ('{$stockName}', '{$stockSymbol}');";
// $result = $conn->query($sql);
// $conn->close();
?>
