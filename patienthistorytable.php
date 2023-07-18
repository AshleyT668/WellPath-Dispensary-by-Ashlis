<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = "SELECT * FROM patienthistory";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient History</title>
    <style>
body {
  background-image: url("https://img.freepik.com/premium-photo/doctor-consulting-patient-talking-her-about-covid-virus-using-tablet-hospital-clinic-female-her-appointment-consultation-with-healthcare-medical-worker_590464-79314.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=ais");
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
<h1>Patient History Details</h1>
    <table>
        <tr>
            <th>historyID</th>
            <th>dSSN</th>
            <th>prescDetails</th>
            <th>consultationDate</th>
            <th>pSSN</th>
            
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['historyID'] . "</td>";
            echo "<td>" . $row['dSSN'] . "</td>";
            echo "<td>" . $row['prescDetails'] . "</td>";
            echo "<td>" . $row['consultationDate'] . "</td>";
            echo "<td>" . $row['pSSN'] . "</td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>