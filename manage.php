<?php
// manage.php

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

// Fetch all applications
$stmt = $pdo->query("SELECT * FROM applications ORDER BY submitted_at DESC");
$applications = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Applications</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="top-nav">
        <span class="top-nav-text">Admin Management</span>
        <div class="icon-tray">
            <img src="assets/icon1.png" alt="icon" class="icon">
        </div>
    </div>

    <main>
        <h1 style="text-align:center; margin-bottom:20px;">Submitted Applications</h1>
        <?php if ($applications): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Job Title</th>
                        <th>Cover Letter</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($applications as $app): ?>
                        <tr>
                            <td><?= htmlspecialchars($app['id']) ?></td>
                            <td><?= htmlspecialchars($app['full_name']) ?></td>
                            <td><?= htmlspecialchars($app['email']) ?></td>
                            <td><?= htmlspecialchars($app['phone']) ?></td>
                            <td><?= htmlspecialchars($app['job_title']) ?></td>
                            <td><?= nl2br(htmlspecialchars($app['cover_letter'])) ?></td>
                            <td><?= $app['submitted_at'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p style="text-align:center;">No applications submitted yet.</p>
        <?php endif; ?>
    </main>

</body>
</html>