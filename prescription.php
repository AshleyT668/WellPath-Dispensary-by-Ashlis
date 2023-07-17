<?php

// Retrieve form data
$drugName = $_POST['drugName '];
$drugID = $_POST['drugID '];
$quantity = $_POST['quantity'];
$route_of_administration= $_POST['route_of_administration'];
$dosage = $_POST['dosage'];
$duration = $_POST['duration'];
$pSSN= $_POST['pSSN'];

// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert data into the database
try {
    $stmt = $conn->prepare('INSERT INTO prescription (drugName,drugID,quantity,route_of_administration,dosage,duration,pSSN) VALUES (:drugName,:drugID,:quantity,:route_of_administration,:dosage,:duration,:pSSN)');
    $stmt->bindParam(':drugName', $drugName);
    $stmt->bindParam(':drugID ', $drugID);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':route_of_administration', $route_of_administration);
    $stmt->bindParam(':dosage', $dosage);
    $stmt->bindParam(':duration', $duration);
    $stmt->bindParam(':pSSN', $pSSN);
    $stmt->execute();
}

catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>