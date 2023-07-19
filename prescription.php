<?php

// Retrieve form data
$prescID = $_POST['prescID'];
$drugName = $_POST['drugName'];
$drugID = $_POST['drugID'];
$quantity = $_POST['quantity'];
$routeOfAdministration= $_POST['routeOfAdministration'];
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
    $stmt = $conn->prepare('INSERT INTO prescription (prescID,drugName,drugID,quantity,routeOfAdministration,dosage,duration,pSSN) VALUES (:prescID,:drugName,:drugID,:quantity,:routeOfAdministration,:dosage,:duration,:pSSN)');
    $stmt->bindParam(':prescID', $prescID);
    $stmt->bindParam(':drugName', $drugName);
    $stmt->bindParam(':drugID', $drugID);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':dosage', $dosage);
    $stmt->bindParam(':duration', $duration);
    $stmt->bindParam(':pSSN', $pSSN);
    $stmt->bindParam(':routeOfAdministration', $routeOfAdministration);
    $stmt->execute();
}

catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>