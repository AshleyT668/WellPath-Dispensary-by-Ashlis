<?php
// Retrieve form data
$drugID = $_POST['drugID'];
$tradeName = $_POST['tradeName'];
$dFormula = $_POST['dFormula'];
$dQuantity = $_POST['dQuantity'];
// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert data into the database
    $stmt = $conn->prepare('INSERT INTO drugs (drugID, tradeName, dFormula,dQuantity)
     VALUES (:drugID, :tradeName, :dFormula,:dQuantity)');
    $stmt->bindParam(':drugID',$drugID);
    $stmt->bindParam(':tradeName',$tradeName);
    $stmt->bindParam(':dFormula',$dFormula);
    $stmt->bindParam(':dQuantity',$dQuantity);
    $stmt->execute();

    echo "Data inserted successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>