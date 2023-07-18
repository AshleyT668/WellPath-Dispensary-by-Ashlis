<?php

// Retrieve form data
$paymentMethod = $_POST['paymentMethod'];
$totalAmount = $_POST['totalAmount'];
$insuaranceDetails = $_POST['insuaranceDetails'];
$drugID= $_POST['drugID'];
$quantity = $_POST['quantity'];
$paymentID = $_POST['paymentID'];

// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert data into the database
try {
    $stmt = $conn->prepare('INSERT INTO prescription (paymentMethod,totalAmount,insuaranceDetails,drugID,quantity,paymentID) VALUES (:paymentMethod,:totalAmount,:insuaranceDetails,:drugID,:quantity,:paymentID)');
    $stmt->bindParam(':paymentMethod', $paymentMethod);
    $stmt->bindParam(':totalAmount ', $totalAmount);
    $stmt->bindParam(':insuaranceDetails', $insuaranceDetails);
    $stmt->bindParam(':drugID', $drugID);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':paymentID', $paymentID);
    $stmt->execute();
}

catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>