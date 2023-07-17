<?php
session_start();

// Connect to the database
$db = new mysqli('localhost', 'root', '', 'wellpath');

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string($_POST['password']);
    $usertype = $db->real_escape_string($_POST['user_type']);
    $email = $db->real_escape_string($_POST['email']);

    // Validate form data
    if (empty($username) || empty($password) || empty($usertype) || empty($email)) {
        // Handle validation errors
        echo "Please fill in all the required fields.";
    } else {
        // Check if the username already exists in the database
        $query = "SELECT username FROM users WHERE username = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Username already exists
            echo "Username already taken. Please choose a different username.";
        } else {
            // Insert user into the database using a prepared statement
            $query = "INSERT INTO users (username, password, usertype, email) VALUES (?, ?, ?, ?)";
            $stmt = $db->prepare($query);
            $stmt->bind_param("ssss", $username, $password, $usertype, $email);

            if ($stmt->execute()) {
                // Redirect to login page or display a success message
                echo "Registration successful. You can now <a href='login.php'>log in</a>.";
            } else {
                // Handle database insertion error
                echo "An error occurred during registration. Please try again.";
            }
        }
    }
}
?>

<style>
   body {
      background-image: url("https://t3.ftcdn.net/jpg/05/27/21/10/240_F_527211055_1utaOgcNfecph4AXTUfjVKBL8tmis9do.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    .form-container {
        max-width: 300px;
        margin: auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 5px;
    }

    /* Form input fields */
    .form-container input[type=text],
    .form-container input[type=password],
    .form-container input[type=email],
    .form-container select {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 4px;
    }

    /* Form submit button */
    .form-container button[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    /* Form submit button on hover */
    .form-container button[type=submit]:hover {
        background-color: #45a049;
    }

    /* Login button */
    .login-button {
        display: block;
        text-align: center;
        margin-top: 20px;
    }
</style>

<div class="form-container">
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="email" name="email" placeholder="Email" required>
        <select name="user_type" required>
        <option value="Admin">Admin</option><option value="Admin">Admin</option>
            <option value="Doctor">Doctor</option>
            <option value="Patient">Patient</option>
            <option value="Pharmacist">Pharmacist</option>
        </select>
        <button type="submit">Register</button>
    </form>
    <div class="login-button">
        Already have an account? <a href="login.php">Login</a>
    </div>
</div>