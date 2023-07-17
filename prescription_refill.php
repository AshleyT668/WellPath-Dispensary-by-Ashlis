<?php
// Retrieve form data
$fName = $_POST['fName'];
$lName= $_POST['lName'];
$medicationName = $_POST['medicationName'];
$refillQuantity= $_POST['refillQuantity'];
$paymentMethod= $_POST['paymentMethod'];
$additionalDetails= $_POST['additionalDetails'];

// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert data into the database
$stmt = $conn->prepare('INSERT INTO prescriptionRefill (fName,lName,medicationName,refillQuantity,paymentMethod,additionalDetails) VALUES (:fName, :lName ,:medicationName,:refillQuantity,:paymentMethod,:additionalDetails)');
$stmt->bindParam(':fName', $fName);
$stmt->bindParam(':lName', $lName);
$stmt->bindParam(':medicationName', $medicationName);
$stmt->bindParam(':refillQuantity', $refillQuantity);
$stmt->bindParam(':paymentMethod', $paymentMethod);
$stmt->bindParam(':additionalDetails', $additionalDetails);
$stmt->execute();

// Close the database connection
$conn = null;
?>