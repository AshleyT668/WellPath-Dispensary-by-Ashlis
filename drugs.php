<?php
// Retrieve form data
$drugID = $_POST['drugID'];
$tradeName = $_POST['tradeName'];
$dFormula = $_POST['dFormula'];

// Establish a database connection
$host = 'localhost';
$dbname = 'ashley_backup';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insert data into the database
    $stmt = $conn->prepare('INSERT INTO drugs (drugID, tradeName, dFormula)
     VALUES (:drugID, :tradeName, :dFormula)');
    $stmt->bindParam(':drugID', $drugID);
    $stmt->bindParam(':tradeName', $tradeName);
    $stmt->bindParam(':dFormula', $dFormula);
    $stmt->execute();

    echo "Data inserted successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>