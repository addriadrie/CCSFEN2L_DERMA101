<?php
include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Edit</title>
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: DM Sans, Poppins;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            background-color: whitesmoke;
            justify-content: space-between;
            align-items: center;
            color: #BE9355;
            padding: 10px 20px;
        }

        .navbar .logo img {
            height: 40px;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links li a {
            color: #BE9355;
            text-decoration: none;
        }

        .notif-number {
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 3px 6px;
            font-size: 12px;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .username {
            margin-right: 10px;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #333;
            padding: 10px;
            list-style: none;
            margin-top: 20px;
        }

        .dropdown-menu li {
            margin-bottom: 5px;
        }

        .user-info:hover .dropdown-menu {
            display: block;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
        }

        .profile-section {
            margin-bottom: 30px;
        }

        .profile-section h2 {
            margin-bottom: 10px;
        }

        .profile-info {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
        }

        .profile-info div {
            display: flex;
            flex-direction: column;
        }

        .profile-info label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .profile-info input,
        .profile-info select {
            padding: 5px;
        }

        .security-section {
            margin-bottom: 30px;
        }

        .security-section h2 {
            margin-bottom: 10px;
        }

        .security-info {
        display: flex;
        flex-direction: row; /* Align items vertically */
        align-items: flex-start; /* Align items to the start of the container */
        margin-bottom: 10px; /* Add some space between security info sections */
}

        .security-info input[type="password"],
        .security-info button {
        margin-right: 8px;
        padding: 7px; /* Add some space between the input box and the button */
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-update {
            background-color: #4CAF50;
            color: white;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
        }

        #update-password-btn {
            padding: 8px 11px;
            border: none;
            background-color: #BE9355;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #update-password-btn:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Logo" height="30">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="patient-home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="patient-appt.php">Appointments <span class="notif-number">3</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item disabled" aria-disabled="true"><i class="fa fa-pencil-square-o"
                                    aria-hidden="true"></i>&nbsp;&nbsp;Edit Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php"><i class="fa fa-sign-out"
                                    aria-hidden="true"></i>&nbsp;&nbsp;Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>



    <div class="container">
        <h1>Profile</h1>
        <form method="post" action="update_profile.php">
        <div class="profile-section">
            <h2>Personal Information</h2>
            <div class="profile-info">
                <div>
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" value="John">
                </div>
                <div>
                    <label for="middle-name">Middle Name</label>
                    <input type="text" id="middle-name" value="Doe">
                </div>
                <div>
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" value="Smith">
                </div>
                <div>
                    <label for="date-of-birth">Date of Birth</label>
                    <input type="date" id="date-of-birth">
                </div>
                <div>
                    <label for="sex">Sex</label>
                    <select id="sex">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div>
                    <label for="status">Status</label>
                    <input type="text" id="status" value="Single">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" value="1234567890">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" value="john@example.com">
                </div>
            </div>
        </div>

        <div class="security-section">
        <h2>Security</h2>
        <div class="security-info">
        <label for="password">Change Password (last updated: July 1, 2023)</label>
        </div>
        <div class="security-info">
        <input type="password" id="password" placeholder="New Password">
        <button id="update-password-btn">Update Password</button>
    </div>
</div>

        <div class="button-container">
            <button class="btn-delete">Delete Account</button>
            <button class="btn-update">Update Profile</button>
            </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
