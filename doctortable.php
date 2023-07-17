<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Function to handle updating a patient's record
function updateDoctor($conn, $dSSN, $field, $value) {
    $query = "UPDATE doctor SET $field = '$value' WHERE dSSN = '$dSSN'";
    if (mysqli_query($conn, $query)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// Function to handle deleting a patient's record
function deleteDoctor($conn, $dSSN) {
    $query = "DELETE FROM doctor WHERE dSSN = '$dSSN'";
    if (mysqli_query($conn, $query)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

$query = "SELECT * FROM doctor";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctors Table</title>
    <style>
              body {
  background-image: url("https://img.freepik.com/free-photo/african-american-therapist-doctor-discussing-healthcare-treatment-with-man-asisstant-analyzing-ill-symptoms-during-health-examination-hospital-office-medical-team-working-medicine-prescription_482257-32880.jpg?size=626&ext=jpg&ga=GA1.2.1576251838.1689066598&semt=sph");
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
<h1>Doctor Details</h1>
    <table>
        <tr>
            <th>dFName</th>
            <th>dLName</th>
            <th>dSSN</th>
            <th>speciality</th>
            <th>experienceStart</th>
            
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['dFName'] . "</td>";
            echo "<td>" . $row['dLName'] . "</td>";
            echo "<td>" . $row['dSSN'] . "</td>";
            echo "<td>" . $row['speciality'] . "</td>";
            echo "<td>" . $row['experienceStart'] . "</td>";
           
            echo "<td>
                      <a href='dupdate.php?pSSN=" . $row['dSSN'] . "'>Update</a>
                      <a href='ddelete.php?pSSN=" . $row['dSSN'] . "'>Delete</a>
                  </td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>
    
    <h2>Update Doctor Record</h2>
    <form method="post" action="dupdate.php">
        <label for="dSSN">Doctor SSN:</label>
        <input type="text" name="dSSN" id="dSSN" required><br><br>

        <label for="field">Field to Update:</label>
        <input type="text" name="field" id="field" required><br><br>

        <label for="value">New Value:</label>
        <input type="text" name="value" id="value" required><br><br>

        <input type="submit" value="Update">
    </form>
    
    <h2>Delete Doctor Record</h2>
    <form method="get" action="ddelete.php">
        <label for="dSSN">Doctor SSN:</label>
        <input type="text" name="dSSN" id="dSSN" required><br><br>

        <input type="submit" value="Delete">
    </form>
</body>
</html>