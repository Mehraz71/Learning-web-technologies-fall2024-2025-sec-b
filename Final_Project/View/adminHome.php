<?php
session_start();

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header( "Location: adminlogin.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header Section */
        .header-bar {
            background-color: rgb(0, 152, 190);
            color: white;
            text-align: center;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-bar img {
            height: 50px;
        }

        .header-bar h1 {
            margin: 5px 0 0;
            font-size: 1.5em;
        }


        /* Logout Button Styling */
        .logout-button {
            background-color: #ff4d4d;
            color: white;
            margin-left: 1200px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: #ff1a1a;
        }

        /* Main Content Styling */
        .container {
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: rgb(0, 152, 190);
            margin-bottom: 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
            margin: 0;
        }
    </style>
    </style>
</head>

<body>
    <header class="header-bar">
        <div>
            <img src="../Asset/brta-logo-new.png" alt="BRTA Logo">
            <h1>Admin Homepage</h1>
        </div>
        <a href="../Controller/logout.php" class="logout-button">Logout</a>
    </header>
    <div class="container">
        <h2>Welcome, Admin</h2>
        <div class="grid">
            <!-- Edit Rules -->
            <div class="card" onclick="location.href='edit_rules.php?action=edit'">
                <img src="../Asset/edit_rules.png" alt="Edit Rules Logo">
                <p>Edit Rules</p>
            </div>

            <!-- Post News -->
            <div class="card" onclick="location.href='post_news.php?action=post'">
                <img src="../Asset/post_news.png" alt="Post News Logo">
                <p>Post News</p>
            </div>

            <!-- View Users -->
            <div class="card" onclick="location.href='view_users.php?action=view_all'">
                <img src="../Asset/view_users.png" alt="View Users Logo">
                <p>View Users</p>
            </div>

            <!-- Update Fee -->
            <div class="card" onclick="location.href='update_fee.php'">
                <img src="../Asset/update_fee.png" alt="Update Fee Logo">
                <p>Update Fees</p>
            </div>

            <div class="card" onclick="location.href='admin_fare_view_ajax.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>View Fares</p>
            </div>
            <div class="card" onclick="location.href='admin_feedbackview_ajax.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>See Feedbacks</p>
            </div>

            <div class="card" onclick="location.href='admin_handle_owner_ajax.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>View Owner Change Applications</p>
            </div>
            <div class="card" onclick="location.href='fine.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>Give Fine</p>
            </div>
            <div class="card" onclick="location.href='approve_appointment.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>Check Appointments</p>
            </div>
            <div class="card" onclick="location.href='view_license_appliers.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>Check License Appliers</p>
            </div>
            <div class="card" onclick="location.href='view_permit.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>Approve Permits</p>
            </div>
            <div class="card" onclick="location.href='viewVehicleRegistration.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>Vehcile Registration Applications</p>
            </div>
            <div class="card" onclick="location.href='viewTaxTokens.php'">
                <img src="../Asset/update_fee.png" alt="">
                <p>Tax Token</p>
            </div>
        </div>
    </div>

</body>

</html>