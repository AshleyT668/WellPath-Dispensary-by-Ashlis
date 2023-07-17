<?php
// Retrieve form data
$pFName = $_POST['pFName'];
$pLName = $_POST['pLName'];
$pSSN = $_POST['pSSN'];
$pDOB = $_POST['pDOB'];
$pAddress = $_POST['pAddress'];
$pContact = $_POST['pContact'];
$pEmail = $_POST['pEmail'];

// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert data into the database
$stmt = $conn->prepare('INSERT INTO patient (pFName, pLName, pSSN, pDOB, pAddress, pContact, pEmail) VALUES (:pFName, :pLName, :pSSN, :pDOB, :pAddress, :pContact, :pEmail)');
$stmt->bindParam(':pFName', $pFName);
$stmt->bindParam(':pLName', $pLName);
$stmt->bindParam(':pSSN', $pSSN);
$stmt->bindParam(':pDOB', $pDOB);
$stmt->bindParam(':pAddress', $pAddress);
$stmt->bindParam(':pContact', $pContact);
$stmt->bindParam(':pEmail', $pEmail);
$stmt->execute();

// Close the database connection
$conn = null;
?>
