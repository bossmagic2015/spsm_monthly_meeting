<?php
require __DIR__ . "/../classes/v1/auth.php";

$auth = new Auth;

// POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // User
    if (isset($_POST['userAuth'])) {
        $formData = [
            'username' => $_POST['username'] ?? '',
            'password' => $_POST['password'] ?? ''
        ];

        $result = $auth->userAuth($formData);

        echo json_encode($result);
    }
}
