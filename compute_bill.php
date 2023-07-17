<?php
// Retrieve form data
$billID = $_POST['billID'];
$pSSN= $_POST['pSSN'];
$dSSN = $_POST['dSSN'];
$quantity= $_POST['quantity'];
$amount= $_POST['amount'];
$drugID= $_POST['drugID'];

// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert data into the database
$stmt = $conn->prepare('INSERT INTO bill(billID,pSSN,dSSN,quantity,amount,drugID) VALUES (:billID,:pSSN,:dSSN,:quantity,:amount,:drugID)');
$stmt->bindParam(':billID', $billID);
$stmt->bindParam(':pSSN', $pSSN);
$stmt->bindParam(':dSSN', $dSSN);
$stmt->bindParam(':quantity', $quantity);
$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':drugID', $drugID);
$stmt->execute();

// Close the database connection
$conn = null;
?>