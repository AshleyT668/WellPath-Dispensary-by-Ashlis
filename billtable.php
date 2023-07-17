<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$query = "SELECT * FROM bill";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bills</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://img.freepik.com/premium-photo/healthcare-costs-fees-concept-hand-smart-doctor-used-calculator-smartphone-tablet-medical-costs-hospital-morning-light_71455-40.jpg?size=626&ext=jpg&ga=GA1.2.1576251838.1689066598&semt=sph");
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
<h1>Bill Details</h1>
    <table>
        <tr>
            <th>billID</th>
            <th>pSSN</th>
            <th>dSSN</th>
            <th>quantity</th>
            <th>totalAmount</th>
            <th>drugID</th>
            
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['billID'] . "</td>";
            echo "<td>" . $row['pSSN'] . "</td>";
            echo "<td>" . $row['dSSN'] . "</td>";
            echo "<td>" . $row['quantity'] . "</td>";
            echo "<td>" . $row['totalAmount'] . "</td>";
            echo "<td>" . $row['drugID'] . "</td>";
           
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>