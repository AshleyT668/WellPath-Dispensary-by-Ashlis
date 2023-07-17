<!DOCTYPE html>
<html>
<head>
    
    <title>Stocks Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://img.freepik.com/premium-photo/we-have-all-medication-anybody-would-ever-need-portrait-cheerful-young-female-pharmacist-standing-with-digital-tablet-while-looking-camera-pharmacy_590464-14918.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=ais");
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
<h1>Stocks Available</h1>
    <table>
        <tr>
            <th>drugID </th>
            <th>tradeName</th>
            <th>sQuantity</th>
         
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
function updateStocks($conn, $stockID, $field, $value) {
    $query = "UPDATE stocks SET $field = '$value' WHERE stockID = '$stockID'";
    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Function to handle deleting a patient's record
function deleteStocks($conn, $stockID) {
    $query = "DELETE FROM stocks WHERE stockID = '$stockID'";
    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

        $result = mysqli_query($conn, "SELECT * FROM stocks");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['stockID'] . "</td>";
            echo "<td>" . $row['tradeName'] . "</td>";
            echo "<td>" . $row['sQuantity'] . "</td>";
           
           
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>

    <h2>Update Stocks  Record</h2>
    <form method="post" action="updateStocks.php">
        <label for="stockID">Stock ID:</label>
        <input type="text" name="stockID" id="stockID" required><br><br>

        <label for="field">Field to Update:</label>
        <input type="text" name="field" id="field" required><br><br>

        <label for="value">New Value:</label>
        <input type="text" name="value" id="value" required><br><br>

        <input type="submit" value="Update">
    </form>
    
    <h2>Delete Stocks Record</h2>
    <form method="get" action="deleteStocks.php">
        <label for="stockID">Stock ID:</label>
        <input type="text" name="stockID" id="stockID" required><br><br>

        <input type="submit" value="Delete">
    </form>
</body>
</html>