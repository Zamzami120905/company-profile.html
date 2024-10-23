<?php
session_start();


error_reporting(E_ALL);
ini_set('display_errors', 1);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    
    if ($email === 'admin@gmail.com' && $password === 'admin') {
        
        $_SESSION['loggedin'] = true;
        header('Location: ../dashboard.php'); 
        exit();
    } else {
        $_SESSION['error'] = "Email atau password salah.";
        header('Location: ../index.php'); 
        exit();
    }
}
?>

