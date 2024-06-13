<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úloha 03</title>
    
</head>
<body>

<?php
require_once "connect.php";
?>

<h1>Požiadavka 1</h1>
<?php
$sql = "
    SELECT SUM(od.UnitPrice * od.Quantity) as TotalRevenue
    FROM `order details` od
    JOIN orders o ON od.OrderID = o.OrderID
    WHERE YEAR(o.OrderDate) = 1994
";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Celkové príjmy v roku 1994: " . $row['TotalRevenue'];
?>
    
<?php $conn->close(); ?>

</body>
</html>
