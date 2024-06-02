<?php
$servername = "localhost";
    $username = "userdb";
    $password = "databaza";
    $dbname = "northwind";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo "<h1>požiadavka 01</h1>";
$sql = "SELECT * FROM Zákazníci";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
}

$sql = "SELECT * FROM Objednávky";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
}

$sql = "SELECT * FROM Dodávatelia";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
}


echo "<h1>požiadavka 02</h1>";
$sql = "SELECT * FROM Zákazníci ORDER BY krajina, nazov";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
}

// Požiadavka 03
echo "<h1>požiadavka 03</h1>";
$sql = "SELECT * FROM Objednávky ORDER BY datum";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
}


echo "<h1>požiadavka 04</h1>";
$sql = "SELECT COUNT(*) as pocet FROM Objednávky WHERE YEAR(datum) = 1997";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Počet objednávok v roku 1997: " . $row["pocet"] . "<br>";


echo "<h1>požiadavka 05</h1>";
$sql = "SELECT kontaktna_osoba FROM Zákazníci WHERE pozicia = 'manažér' ORDER BY kontaktna_osoba";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["kontaktna_osoba"] . "<br>";
    }
}


echo "<h1>požiadavka 06</h1>";
$sql = "SELECT * FROM Objednávky WHERE datum = '1997-05-19'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
        echo "<br>";
    }
}

$conn->close();
?>
