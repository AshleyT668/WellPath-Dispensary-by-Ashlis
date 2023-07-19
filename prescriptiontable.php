<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}


// Function to handle updating a patient's record
function updatePrescription($conn, $prescID, $field, $value) {
    $query = "UPDATE prescription  SET $field = '$value' WHERE prescID = '$prescID'";
    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Function to handle deleting a patient's record
function deletPrescription($conn, $prescID) {
    $query = "DELETE FROM prescription WHERE pSSN = '$prescID'";
    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

$query = "SELECT * FROM prescription";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Prescriptions</title>
    <style>
         body {
    font-family: Arial, sans-serif;
    background-image: url("https://img.freepik.com/premium-vector/doctor-holds-clipboard-takes-notes-it_168129-48.jpg?size=626&ext=jpg&ga=GA1.2.1576251838.1689066598&semt=sph");
    background-repeat: no-repeat;
    background-size: cover;
}
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<h1>Prescription Details</h1>
    <table>
        <tr>
        <th>prescID</th>      
            <th>drugName</th>
            <th>drugID</th>
            <th>quantity</th>
            <th>dosage</th>
            <th>duration</th>
            <th>pSSN</th>
            <th>routeOfAdministration</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['prescID'] . "</td>";
            echo "<td>" . $row['drugName'] . "</td>";
            echo "<td>" . $row['drugID'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['dosage'] . "</td>";
            echo "<td>" . $row['duration'] . "</td>";
            echo "<td>" . $row['pSSN'] . "</td>";
            echo "<td>" . $row['routeOfAdministration'] . "</td>";
           
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>


 <h2>Update Prescription Record</h2>
    <form method="post" action="updatePrescription.php">
        <label for="prescID">prescription ID:</label>
        <input type="text" name="prescID" id="prescID" required><br><br>

        <label for="field">Field to Update:</label>
        <input type="text" name="field" id="field" required><br><br>

        <label for="value">New Value:</label>
        <input type="text" name="value" id="value" required><br><br>

        <input type="submit" value="Update">
    </form>
    
    <h2>Delete Prescription  Record</h2>
    <form method="get" action="deletePrescription.php">
        <label for="pSSN">prescription ID:</label>
        <input type="text" name="pSSN" id="pSSN" required><br><br>

        <input type="submit" value="Delete">
    </form>

</body>
</html>