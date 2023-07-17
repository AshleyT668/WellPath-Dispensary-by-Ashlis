<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $dSSN = $_GET["dSSN"];

    // Function to handle deleting a patient's record
    function deleteDoctor($conn, $dSSN) {
        $query = "DELETE FROM doctor WHERE dSSN = '$dSSN'";
        if (mysqli_query($conn, $query)) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    // Call the deletePatient function
    deleteDoctor($conn, $dSSN);

    mysqli_close($conn);
}
?>