<!DOCTYPE html>
<html>
<head>
    <title>Appointments Table</title>
    <style>
         body {
      background-image: url("https://img.freepik.com/premium-psd/3d-schedule-with-pen_453897-607.jpg?size=626&ext=jpg&ga=GA1.1.1576251838.1689066598&semt=sph");
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
<h1>Appointments Schedule</h1>
    <table>
        <tr>
            <th>appointmentDate </th>
            <th>appointmentTime</th>
            <th>fName</th>
            <th>lName</th>
            <th>specialist</th>
            <th>doctorName</th>
            <th>message</th>

        </tr>
        <?php
        // Replace "your_database_name" with the actual name of your database
        $conn = mysqli_connect("localhost", "root", "", "wellpath");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $result = mysqli_query($conn, "SELECT * FROM appointment");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['appointmentDate'] . "</td>";
            echo "<td>" . $row['appointmentTime'] . "</td>";
            echo "<td>" . $row['fName'] . "</td>";
            echo "<td>" . $row['lName'] . "</td>";
            echo "<td>" . $row['specialist'] . "</td>";
            echo "<td>" . $row['doctorName'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>