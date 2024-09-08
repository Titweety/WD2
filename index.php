<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
</head>

<body>
<?php
//include_once 'database.class.php';
include_once 'product.class.php';



//$database = new Database();
//$db = $database->getConnection();
$products = new Products();
$stmt = $products->read();


echo "<table>";
echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Type</th>
    <th>Availability</th>
</tr>";


 
    foreach ($stmt as $row) {
        echo "<tr>";
        echo "<td>{$row['ID']}</td>";
        echo "<td>{$row['Name']}</td>";
        echo "<td>{$row['Type']}</td>";
        echo "<td>{$row['Availability']}</td>";
        echo "</tr>";
    }

echo "</table>";

?>   
</body>

</html>