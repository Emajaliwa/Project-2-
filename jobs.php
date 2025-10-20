<?php
// jobs.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs - Recruitment Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Top navigation bar -->
    <div class="top-nav">
        <span class="top-nav-text">Welcome to our recruitment portal</span>
        <span class="australia">Australia</span>
        <div class="icon-tray">
            <img src="assets/icon1.png" alt="icon" class="icon">
            <img src="assets/icon2.png" alt="icon" class="icon">
        </div>
        <button class="apply-button">Apply Now</button>
    </div>

    <!-- Hero section -->
    <section class="hero-section">
        <div class="nav-bar">
            <div class="company-logo">
                <img src="assets/logo.png" alt="Company Logo">
            </div>
            <div class="site-title">Recruitment Portal</div>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="jobs.php">Jobs</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="apply.php">Apply</a></li>
                <li><a href="manage.php">Manage</a></li>
            </ul>
        </div>

        <div class="hero-text-section">
            <h1 class="hero-phrase">Explore Job Opportunities</h1>
            <p class="hero-text">Browse all positions currently available at our company.</p>
            <a href="apply.php" class="more-button">Apply Now</a>
        </div>
    </section>

    <!-- Jobs listing -->
    <main>
        <div class="page-intro">
            <h2>Current Openings</h2>
        </div>

        <div class="tiles">
            <div class="tile tile--p200">
                <h3>Software Developer</h3>
                <h4>Company A</h4>
                <p>Develop and maintain web applications using modern frameworks.</p>
            </div>
            <div class="tile tile--p300">
                <h3>Marketing Coordinator</h3>
                <h4>Company B</h4>
                <p>Coordinate campaigns, analyze trends, and improve brand presence.</p>
            </div>
            <div class="tile tile--p400">
                <h3>Graphic Designer</h3>
                <h4>Company C</h4>
                <p>Create visual assets for marketing and product designs.</p>
            </div>
            <div class="tile tile--p500">
                <h3>HR Assistant</h3>
                <h4>Company D</h4>
                <p>Support HR processes including recruitment and onboarding.</p>
            </div>
        </div>

        <!-- Compliance box (aside) -->
        <aside class="compliance">
            <h3>Compliance</h3>
            <ul>
                <li>Equal opportunity employer</li>
                <li>Workplace safety certified</li>
                <li>Privacy compliant</li>
            </ul>
        </aside>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Recruitment Portal. All rights reserved.</p>
        <p>Visit our <a href="about.php">About Us</a> page for more info.</p>
    </footer>

</body>
</html>