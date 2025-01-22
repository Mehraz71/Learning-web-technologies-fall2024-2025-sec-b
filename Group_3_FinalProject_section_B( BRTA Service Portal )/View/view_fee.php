<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: ../View/login.html");
    exit;
}

// Include the fee model
require_once '../model/feeModel.php';

// Fetch all application fees
$fees = getAllFees();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Fees</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .header-bar {
            background-color: #006400;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 1.5em;
            font-weight: bold;
        }

        h1 {
            margin: 0;
        }

        .header-logo {
            height: 50px;
            width: auto;
        }

        .container {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #006400;
            color: white;
        }

        .home-button {
            text-align: center;
            margin-top: 20px;
        }

        .home-button a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #006400;
            color: white;
            border-radius: 5px;
        }

        .home-button a:hover {
            background-color: #004b00;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-bar">
            <img src="../Asset/brta-logo-new.png" alt="BRTA Logo" class="header-logo">
            <h1>Application Fees</h1>
        </div>
    </header>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Application Name</th>
                    <th>Application Cost (tk)</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($fees)): ?>
                    <?php foreach ($fees as $fee): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($fee['application_name']); ?></td>
                            <td><?php echo htmlspecialchars($fee['application_cost']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2">No fees available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Back to Homepage -->
        <div class="home-button">
            <a href="../View/userHome.php">Go Back to Homepage</a>
        </div>
    </div>
</body>

</html>