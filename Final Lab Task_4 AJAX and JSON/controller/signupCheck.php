<?php
require_once('../model/userModel.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['data'])) {

    // Decode incoming JSON
    $data     = json_decode($_POST['data'], true);
    $username = trim($data['username'] ?? '');
    $password = trim($data['password'] ?? '');
    $email    = trim($data['email']    ?? '');

    // Validation
    if ($username == '' || $password == '' || $email == '') {
        echo json_encode([
            'status'  => false,
            'message' => 'All fields are required.'
        ]);
        exit;
    }

    $user   = ['username' => $username, 'password' => $password, 'email' => $email];
    $status = addUser($user);

    if ($status) {
        echo json_encode([
            'status'  => true,
            'message' => 'Account created! Redirecting to login...'
        ]);
    } else {
        echo json_encode([
            'status'  => false,
            'message' => 'Registration failed. Username may already exist.'
        ]);
    }
} 
else {
    echo json_encode([
        'status'  => false,
        'message' => 'Invalid request.'
    ]);
}
