<?php
// Retrieve form data
$drugID = $_POST['drugID'];
$tradeName = $_POST['tradeName'];
$sQuantity = $_POST['sQuantity'];

// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert data into the database
    $stmt = $conn->prepare('INSERT INTO stocks (drugID, tradeName, sQuantity) VALUES (:drugID, :tradeName, :sQuantity)');
    $stmt->bindParam(':drugID', $stockID);
    $stmt->bindParam(':tradeName', $tradeName);
    $stmt->bindParam(':sQuantity', $sQuantity);
    $stmt->execute();

    // echo "Data inserted successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>



