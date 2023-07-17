<?php
// Retrieve form data
$pSSN = $_POST['pSSN'];
$dSSN= $_POST['dSSN'];
$typeOfTest = $_POST['typeOfTest'];
$time= $_POST['time'];
$additionalDetails= $_POST['additionalDetails'];


// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert data into the database
$stmt = $conn->prepare('INSERT INTO patients (pSSN,dSSN,typeOfTest,time,additionalDetails) VALUES (:pSSN,:dSSN,:typeOfTest,:time,:additionalDetails)');
$stmt->bindParam(':pSSN', $pSSN);
$stmt->bindParam(':dSSN', $dSSN);

$stmt->bindParam(':typeofTest', $typeOfTest);
$stmt->bindParam(':time', $time);
$stmt->bindParam(':additionalDetails', $additionalDetails);

$stmt->execute();

// Close the database connection
$conn = null;
?>