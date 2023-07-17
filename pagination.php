<?php
// Replace "your_database_name" with the actual name of your database
$conn = mysqli_connect("localhost", "root", "", "wellpath");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Pagination variables
$recordsPerPage = 5; // Number of records to display per page
$currentPage = 1; // Current page

// Calculate the starting record for the current page
if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
}
$startingRecord = ($currentPage - 1) * $recordsPerPage;

// Query to fetch paginated data
$query = "SELECT * FROM patient LIMIT $startingRecord, $recordsPerPage";
$result = mysqli_query($conn, $query);

// Query to count total records
$totalRecordsQuery = "SELECT COUNT(*) as total FROM patient";
$totalRecordsResult = mysqli_query($conn, $totalRecordsQuery);
$totalRecords = mysqli_fetch_assoc($totalRecordsResult)['total'];

// Calculate the total number of pages
$totalPages = ceil($totalRecords / $recordsPerPage);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Patients Table</title>
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
    <h1>Patient Details</h1>
    <table>
        <tr>
            <th>pFName</th>
            <th>pLName</th>
            <th>pSSN</th>
            <th>pAge</th>
            <th>pAddress</th>
            <th>pContact</th>
            <th>pEmail</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['pFName'] . "</td>";
            echo "<td>" . $row['pLName'] . "</td>";
            echo "<td>" . $row['pSSN'] . "</td>";
            echo "<td>" . $row['pAge'] . "</td>";
            echo "<td>" . $row['pAddress'] . "</td>";
            echo "<td>" . $row['pContact'] . "</td>";
            echo "<td>" . $row['pEmail'] . "</td>";
            echo "</tr>";
        }

        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>

    <!-- Pagination links -->
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo ($currentPage - 1); ?>">&laquo; Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <a class="active" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo ($currentPage + 1); ?>">Next &raquo;</a>
        <?php endif; ?>
    </div>
</body>
</html>