<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stockID = $_POST["stockID"];
    $field = $_POST["field"];
    $value = $_POST["value"];

    // Function to handle updating a patient's record
    function updateStocks($conn, $stockID, $field, $value) {
        $query = "UPDATE stocks SET $field = '$value' WHERE stockID = '$stockID'";
        if (mysqli_query($conn, $query)) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }

    // Call the updatePatient function
    updateStocks($conn, $stockID, $field, $value);

    mysqli_close($conn);
}
?>