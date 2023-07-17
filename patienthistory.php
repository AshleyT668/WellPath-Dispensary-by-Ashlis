<?php
// Retrieve form data
$historyID = $_POST['historyID'];
$dSSN = $_POST['dSSN'];
$prescDetails = $_POST['prescDetails'];
$consultationDate= $_POST['consultationDate'];

// echo $dSSN;

// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert data into the database
$stmt = $conn->prepare('INSERT INTO patienthistory (historyID,dSSN,prescDetails,consultationDate ) VALUES (:historyID,:dSSN,:prescDetails,:consultationDate)');
$stmt->bindParam(':historyID', $historyID);
$stmt->bindParam(':dSSN', $dSSN  );
$stmt->bindParam(':prescDetails', $prescDetails);
$stmt->bindParam(':consultationDate', $consultationDate);
$stmt->execute();

// Close the database connection
$conn = null;
?>
