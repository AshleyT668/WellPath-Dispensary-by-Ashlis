<!DOCTYPE html>
<html>
<head>
    <title>Pharmacist Table</title>
    <style>
       
       
       
        body {
  background-image: url( "https://img.freepik.com/premium-vector/pharmacy-with-pharmacist-client-counter_36082-529.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=sph");
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
<h1>Pharmacist Table</h1>
    <table>
        <tr>
            <th>phSSN</th>
            <th>phFName</th>
            <th>phLName</th>
            <th>phEmail</th>
        </tr>
        <?php
        // Replace "your_database_name" with the actual name of your database
        $conn = mysqli_connect("localhost", "root", "", "wellpath");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        
// Function to handle updating a patient's record
function updatePharmacist($conn, $phSSN, $field, $value) {
    $query = "UPDATE pharmacist SET $field = '$value' WHERE phSSN = '$phSSN'";
    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Function to handle deleting a patient's record
function deletPharmacist($conn, $phSSN) {
    $query = "DELETE FROM pharmacist WHERE phSSN = '$phSSN'";
    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

        $result = mysqli_query($conn, "SELECT * FROM pharmacist");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['phSSN'] . "</td>";
            echo "<td>" . $row['phFName'] . "</td>";
            echo "<td>" . $row['phLName'] . "</td>";
            echo "<td>" . $row['phEmail'] . "</td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>

    <h2>Update Pharmacist Record</h2>
    <form method="post" action="updatePharmacist.php">
        <label for="phSSN">Pharmacist SSN:</label>
        <input type="text" name="phSSN" id="phSSN" required><br><br>

        <label for="field">Field to Update:</label>
        <input type="text" name="field" id="field" required><br><br>

        <label for="value">New Value:</label>
        <input type="text" name="value" id="value" required><br><br>

        <input type="submit" value="Update">
    </form>
    
    <h2>Delete Pharmacist Record</h2>
    <form method="get" action="deletePharmacist.php">
        <label for="phSSN">Pharmacist SSN:</label>
        <input type="text" name="phSSN" id="phSSN" required><br><br>

        <input type="submit" value="Delete">
    </form>

</body>
</html>