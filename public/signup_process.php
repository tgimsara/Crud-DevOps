<?php
session_start();
require_once '../config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Check if passwords match
    if ($password !== $confirm_password) {
        echo json_encode(['success' => false, 'message' => 'Passwords do not match']);
        exit;
    }
    
    // Check if email already exists
    $check = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $check);
    
    if (mysqli_num_rows($result) > 0) {
        echo json_encode(['success' => false, 'message' => 'Email already exists']);
    } else {
        // Insert new user
        $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        
        if (mysqli_query($conn, $query)) {
            echo json_encode(['success' => true, 'message' => 'Account created successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Registration failed: ' . mysqli_error($conn)]);
        }
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>