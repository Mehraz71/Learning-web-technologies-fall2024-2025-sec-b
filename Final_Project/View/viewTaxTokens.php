<?php
require_once('../model/authModel.php');

// Fetch tax token data
$data = getAllTaxTokens();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Tokens</title>
    <link rel="stylesheet" href="../css/viewTaxTokens.css">
    <script src="../js/manageTaxTokens.js"></script>
</head>
<body>
    <header>
        <h1>Tax Tokens</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Permit Type</th>
                    <th>Reg. Number</th>
                    <th>Chassis Number</th>
                    <th>Full Name</th>
                    <th>License Number</th>
                    <th>Permit File</th>
                    <th>Inspection Certificate</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $row): ?>
                        <tr id="row-<?php echo $row['id']; ?>">
                            <td><?php echo htmlspecialchars($row['id']); ?></td>
                            <td><?php echo htmlspecialchars($row['permit_type']); ?></td>
                            <td><?php echo htmlspecialchars($row['reg_number']); ?></td>
                            <td><?php echo htmlspecialchars($row['chassis_number']); ?></td>
                            <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['license_number']); ?></td>
                            <td>
                                <a href="../uploads/<?php echo htmlspecialchars($row['permit_file']); ?>" target="_blank">View</a>
                            </td>
                            <td>
                                <a href="../uploads/<?php echo htmlspecialchars($row['inspection_certificate']); ?>" target="_blank">View</a>
                            </td>
                            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                            <td>
                                <button class="accept-btn" onclick="acceptToken(<?php echo $row['id']; ?>)">Accept</button>
                                <button class="reject-btn" onclick="rejectToken(<?php echo $row['id']; ?>)">Reject</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="10">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
