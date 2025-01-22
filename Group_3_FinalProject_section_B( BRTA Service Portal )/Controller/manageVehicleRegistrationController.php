<?php
require_once('../model/authModel.php');

$data = json_decode(file_get_contents("php://input"), true);
$action = $data['action'] ?? '';
$id = $data['id'] ?? 0;

$response = ['success' => false, 'message' => 'Invalid request'];

if ($action === 'accept' && $id > 0) {
    if (acceptVehicleRegistration($id)) {
        $response = ['success' => true];
    } else {
        $response['message'] = 'Failed to accept vehicle registration.';
    }
} elseif ($action === 'reject' && $id > 0) {
    if (rejectVehicleRegistration($id)) {
        $response = ['success' => true];
    } else {
        $response['message'] = 'Failed to reject vehicle registration.';
    }
}

echo json_encode($response);
