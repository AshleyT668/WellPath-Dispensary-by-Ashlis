<?php
session_start();

// Check if the user is logged in as a doctor
if (isset($_SESSION['username']) && $_SESSION['usertype'] === 'Doctor') {
    $username = $_SESSION['username'];
    echo "Success!";
} else {
    // Redirect to login page or show an error message
    header('Location: login.php');
    exit;
}

// Check if logout request is triggered
if (isset($_GET['logout'])) {
    // Destroy the session and redirect to the login page
    session_destroy();
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .welcome-message {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .logout-link {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }

        .logout-link:hover {
            background-color: #45a049;
        }

        .username {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Doctor Dashboard</h1>
        <p class="username">Doctor <?php echo $username; ?></p>
        <p class="welcome-message">Welcome, Doctor <?php echo $username; ?>!</p>
        <!-- Add your doctor-specific content here -->
        <a class="logout-link" href="?logout=true">Logout</a>
    </div>
</body>
</html>

