<?php
// process_eoi.php

// Database credentials
$host = 'localhost';
$db   = 'recruitment_portal';
$user = 'root';
$pass = ''; // your MySQL password
$charset = 'utf8mb4';

// Create connection using PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    exit('Database connection failed: ' . $e->getMessage());
}

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $job_title = $_POST['job_title'] ?? '';
    $cover_letter = $_POST['cover_letter'] ?? '';

    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO applications (full_name, email, phone, job_title, cover_letter) 
                           VALUES (?, ?, ?, ?, ?)");
    if ($stmt->execute([$full_name, $email, $phone, $job_title, $cover_letter])) {
        echo "<h2>Application Submitted Successfully!</h2>";
        echo "<p><a href='jobs.php'>Back to Jobs</a></p>";
    } else {
        echo "<h2>Failed to submit application. Please try again.</h2>";
    }
}
?>