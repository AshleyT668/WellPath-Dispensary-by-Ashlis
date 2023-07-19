<!DOCTYPE html>
<html>
<head>
    <title>Database Table</title>
    <style>
        body {
  background-image: url("https://img.freepik.com/premium-photo/pharmacist-filling-prescription-pharmacy-drugstore_67340-187.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=sph");
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
            color : solid black;
            font-weight: bold;

        }
    </style>
</head>
<body>
    <h1>Drugs Table</h1>
    <table>
        <tr>
            <th>drugID</th>
            <th>tradeName</th>
            <th>dFormula</th>
            <th>dQuantity</th>
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
        function updateDrugs($conn, $drugID, $field, $value) {
            $query = "UPDATE drugs SET $field = '$value' WHERE drugID = '$drugID'";
            if (mysqli_query($conn, $query)) {
                echo "Record updated successfully.";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        
        // Function to handle deleting a patient's record
        function deleteDrugs($conn, $drugID) {
            $query = "DELETE FROM drugs WHERE drugID = '$drugID'";
            if (mysqli_query($conn, $query)) {
                echo "Record deleted successfully.";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        }
        


        $result = mysqli_query($conn, "SELECT * FROM drugs");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['drugID'] . "</td>";
            echo "<td>" . $row['tradeName'] . "</td>";
            echo "<td>" . $row['dFormula'] . "</td>";
            echo "<td>" . $row['dQuantity'] . "</td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>

    <h2>Update Drugs Record</h2>
    <form method="post" action="updateDrugs.php">
        <label for="drugID">Drug ID:</label>
        <input type="text" name="drugID" id="drugID" required><br><br>

        <label for="field">Field to Update:</label>
        <input type="text" name="field" id="field" required><br><br>

        <label for="value">New Value:</label>
        <input type="text" name="value" id="value" required><br><br>

        <input type="submit" value="Update">
    </form>
    
    <h2>Delete Drugs Record</h2>
    <form method="get" action="deleteDrugs.php">
        <label for="drugID">Drug ID:</label>
        <input type="text" name="pSSN" id="pSSN" required><br><br>

        <input type="submit" value="Delete">
    </form>
</body>
</html>