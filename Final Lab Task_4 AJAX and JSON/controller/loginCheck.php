<?php
    session_start();
    require_once('../model/userModel.php');

    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['data'])) {

        // Decode incoming JSON
        $data     = json_decode($_POST['data'], true);
        $username = trim($data['username'] ?? '');
        $password = trim($data['password'] ?? '');

        // Validation
        if ($username == '' || $password == '') {
            echo json_encode([
                'status'  => false,
                'message' => 'Username or password is missing.'
            ]);
            exit;
        }

        $user   = ['username' => $username, 'password' => $password];
        $status = login($user);

        if ($status) {
            $_SESSION['status']   = true;
            $_SESSION['username'] = $username;
            setcookie('status', true, time() + (3600 * 30), '/');

            echo json_encode([
                'status'  => true,
                'message' => 'Login successful! Redirecting...'
            ]);
        } else {
            echo json_encode([
                'status'  => false,
                'message' => 'Invalid username or password.'
            ]);
        }

    } else {
        echo json_encode([
            'status'  => false,
            'message' => 'Invalid request.'
        ]);
    }
?>