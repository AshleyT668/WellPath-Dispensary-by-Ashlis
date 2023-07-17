<?php
$inputJSON = file_get_contents('php://input');
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Retrieve form data
$appointmentDate = $_POST['appointmentDate'];
$appointmentTime = $_POST['appointmentTime'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$specialist = $_POST['specialist'];
$doctorName = $_POST['doctorName'];
$appointmentID = $_POST['appointmentID'];
$message = $_POST['message'];

// Establish a database connection
$host = 'localhost';
$dbname = 'wellpath';
$username = 'root';
$password = '';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Insert data into the database
$stmt = $conn->prepare('INSERT INTO appointment (appointmentDate, appointmentTime, fName, lName, specialist, doctorName,appointmentID, message) VALUES (:appointmentDate, :appointmentTime, :fName, :lName, :specialist, :doctorName,:appointmentID, :message)');
$stmt->bindParam(':appointmentDate', $appointmentDate);
$stmt->bindParam(':appointmentTime', $appointmentTime);
$stmt->bindParam(':fName', $fName);
$stmt->bindParam(':lName', $lName);
$stmt->bindParam(':specialist', $specialist);
$stmt->bindParam(':doctorName', $doctorName);
$stmt->bindParam(':appointmentID', $appointmentID);
$stmt->bindParam(':message', $message);
$stmt->execute();

// Close the database connection
$conn = null;
?>