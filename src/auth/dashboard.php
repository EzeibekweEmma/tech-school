<?php 
session_start();
// Check if the user is logged in
if (isset($_SESSION['student_id'])) {
    echo 'Welcome, ' . $_SESSION['student_id'] . '!';
    var_dump($_SESSION);
    // session_unset();
} else {
    // Redirect to login page if not logged in
    header('Location: ./login.php');
    exit();
}
?>