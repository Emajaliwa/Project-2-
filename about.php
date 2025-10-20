<?php
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Recruitment Portal</title>
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
            <h1 class="hero-phrase">About Us</h1>
            <p class="hero-text">We connect talented professionals with outstanding companies.</p>
        </div>
    </section>

    <!-- About content -->
    <main>
        <section class="about-us">
            <h2 class="about-us-title">Our Mission</h2>
            <p class="about-us">To provide high-quality recruitment services that match candidates to the right opportunities, helping both businesses and professionals grow.</p>

            <h2 class="about-us-title2">Our Team</h2>
            <p class="about-us">Our team consists of experienced HR professionals, recruiters, and industry specialists who understand the needs of employers and job seekers alike.</p>

            <h2 class="about-us-title2">Fun Facts</h2>
            <ul>
                <li>We have placed over 10,000 candidates since our founding.</li>
                <li>Our average time to placement is less than 30 days.</li>
                <li>We operate across 5 major cities in Australia.</li>
            </ul>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Recruitment Portal. All rights reserved.</p>
        <p>Contact us via the <a href="apply.php">Apply</a> page for inquiries.</p>
    </footer>

</body>
</html>