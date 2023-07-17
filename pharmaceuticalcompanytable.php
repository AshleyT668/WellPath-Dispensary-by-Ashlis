<!DOCTYPE html>
<html>
<head>
    <title>Pharmaceutical Companies Table</title>
    <style>
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
<h1>Pharmaceutical Companies</h1>
    <table>
        <tr>
            <th>cContact</th>
            <th>cName</th>
            <th>cID</th>
        </tr>
        <?php
        // Replace "your_database_name" with the actual name of your database
        $conn = mysqli_connect("localhost", "root", "", "wellpath");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $result = mysqli_query($conn, "SELECT * FROM pharmaceuticalcompany");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['cContact'] . "</td>";
            echo "<td>" . $row['cName'] . "</td>";
            echo "<td>" . $row['cID'] . "</td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>