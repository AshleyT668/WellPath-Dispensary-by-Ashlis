<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $pSSN = $_GET["phSSN"];

    // Function to handle deleting a patient's record
    function deletePharmacist($conn, $phSSN) {
        $query = "DELETE FROM patient WHERE phSSN = '$phSSN'";
        if (mysqli_query($conn, $query)) {
            echo "Record deleted successfully.";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

    // Call the deletePatient function
    deletePharmacist($conn, $pSSN);

    mysqli_close($conn);
}
?>