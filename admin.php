<?php
session_start();

// Check if the user is logged in as a doctor
if (isset($_SESSION['username']) && $_SESSION['usertype'] === 'Admin') {
    $username = $_SESSION['username'];
   
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
    <title>Admin Dashboard</title>
    <style>

header {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
}

        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            font-size: 20px;
        }

        .welcome-message {
            font-size: 24px;
            margin: 0;
            position: absolute; /* Add position absolute */
            top: 20px; /* Adjust the top distance */
            right: 20px; /* Adjust the right distance */
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
        :root{
  --black:#272D3B;
  --red:#ED176F;
  --coral:#F7817F;
  --gradient:linear-gradient(90deg, var(--red), var(--coral));
}
body {
            font-family: Arial, sans-serif;
            background-image: url("https://t3.ftcdn.net/jpg/02/07/09/06/240_F_207090644_pzixjQM0iSPLdTTAjDT0DX4nXVMz7Non.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }


*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  text-decoration: none;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

*::selection{
  background:var(--red);
  color:#fff;
}

html{
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 4rem;
}

section{
  padding:3rem 9%;
}

.btn{
  display: inline-block;
  padding:.7rem 3rem;
  margin-top: 1rem;
  border-radius: 5rem;
  background:var(--gradient);
  color:#fff;
  cursor: pointer;
  font-size: 1.7rem;
}

.btn:hover{
  transform: scale(1.1);
}

.heading{
  text-align: center;
  color:transparent;
  background:var(--gradient);
  -webkit-background-clip: text;
  background-clip: text;
  font-size: 5rem;
  text-transform: uppercase;
  padding:1rem;
}

header{
  position: fixed;
  top:0; left: 0; right:0;
  background:var(--black);
  z-index: 1000;
  padding:2rem 9%;
  border-bottom: .1rem solid #fff3;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

header .logo{
  font-weight: bolder;
  color:#fff;
  font-size: 2.5rem;
}

header .navbar a{
  font-size: 2rem;
  margin-left: 2.5rem;
  color:#fff;
}

header .navbar a:hover{
  color:var(--red);
}
     
.logo {
  color: solid #333;
  font-size: 24px;

}

.navbar a {
  color: #333;
  font-size: 16px;
  text-decoration: none;
  margin: 0 10px;
  padding: 10px;
  border-radius: 5px;
  
}
.navbar img {
  height: 30px;
  width: auto;
  margin-right: 10px;
}

.navbar a:hover {
  background-color: #333;
  color: #fff;
}
.menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 1000px; /* Adjust the width to make the menu larger */
        position: fixed;
        top: 50%; /* Position the menu vertically in the center */
        left: 50%; /* Position the menu horizontally in the center */
        transform: translate(-50%, -50%);
    }

    .menu li {
      background-color:white;
      border-bottom: 1px solid #ddd;
    }

    .menu li a {
      display: block;
      color: solid black;
      text-decoration: none;
      padding: 20px 10px;
      font-size: 24px;
  font-weight: bold;
    }

    .menu li a:hover {
      background-color: #4CAF50;
    }

    .menu li.active a {
      font-size: 24px;
  font-weight: bold;
  color: black;
  text-align: center;
      color:black;
    }
    </style>
</head>
<body>
<ul class="menu">
    <li class="active"><a href="patienttable.php">View Patients</a></li>
    <li class="active"><a href="doctortable.php">View Doctors</a></li>
    <li class="active"><a href="pharmacisttable.php">View Pharmacists</a></li>
    <li class="active"><a href="appointmenttable.php">View Appointments</a></li>
    <li class="active"><a href="drugstable.php">View Drugs</a></li>
    <li class="active"><a href="billtable.php">View Bills</a></li>
    


  </ul>
    <div class="container">
        <h1>Admin Dashboard</h1>
       
        <p class="welcome-message">Welcome, Admin <?php echo $username; ?>!</p>
        <!-- Add your doctor-specific content here -->
        <a class="logout-link" href="?logout=true">Logout</a>
    </div>
   
</body>
</html>
