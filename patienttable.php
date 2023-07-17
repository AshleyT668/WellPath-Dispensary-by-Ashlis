<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Function to handle updating a patient's record
function updatePatient($conn, $pSSN, $field, $value) {
    $query = "UPDATE patient SET $field = '$value' WHERE pSSN = '$pSSN'";
    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Function to handle deleting a patient's record
function deletePatient($conn, $pSSN) {
    $query = "DELETE FROM patient WHERE pSSN = '$pSSN'";
    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

$query = "SELECT * FROM patient";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Patients Table</title>
    <style>
            body {
  background-image: url("https://t3.ftcdn.net/jpg/02/74/25/34/240_F_274253442_nxWzGo2eZEZg3rnRGOpIJ50AZkwuKkrx.jpg");
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
<h1>Patient Details</h1>
    <table>
        <tr>
            <th>pFName</th>
            <th>pLName</th>
            <th>pSSN</th>
            <th>pDOB</th>
            <th>pAddress</th>
            <th>pContact</th>
            <th>pEmail</th>
            <th>Action</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['pFName'] . "</td>";
            echo "<td>" . $row['pLName'] . "</td>";
            echo "<td>" . $row['pSSN'] . "</td>";
            echo "<td>" . $row['pDOB'] . "</td>";
            echo "<td>" . $row['pAddress'] . "</td>";
            echo "<td>" . $row['pContact'] . "</td>";
            echo "<td>" . $row['pEmail'] . "</td>";
            echo "<td>
                      <a href='update.php?pSSN=" . $row['pSSN'] . "'>Update</a>
                      <a href='delete.php?pSSN=" . $row['pSSN'] . "'>Delete</a>
                  </td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>
    
    <h2>Update Patient Record</h2>
    <form method="post" action="update.php">
        <label for="pSSN">Patient SSN:</label>
        <input type="text" name="pSSN" id="pSSN" required><br><br>

        <label for="field">Field to Update:</label>
        <input type="text" name="field" id="field" required><br><br>

        <label for="value">New Value:</label>
        <input type="text" name="value" id="value" required><br><br>

        <input type="submit" value="Update">
    </form>
    
    <h2>Delete Patient Record</h2>
    <form method="get" action="delete.php">
        <label for="pSSN">Patient SSN:</label>
        <input type="text" name="pSSN" id="pSSN" required><br><br>

        <input type="submit" value="Delete">
    </form>
</body>
</html>
