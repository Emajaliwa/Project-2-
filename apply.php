<?php
// apply.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply - Recruitment Portal</title>
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
            <h1 class="hero-phrase">Apply for a Job</h1>
            <p class="hero-text">Fill out the form below to submit your expression of interest.</p>
        </div>
    </section>

    <!-- Application Form -->
    <main>
        <form action="process_eoi.php" method="post">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="job_title">Job Title:</label>
            <select id="job_title" name="job_title">
                <option value="software_developer">Software Developer</option>
                <option value="marketing_coordinator">Marketing Coordinator</option>
                <option value="graphic_designer">Graphic Designer</option>
                <option value="hr_assistant">HR Assistant</option>
            </select>

            <label for="cover_letter">Cover Letter / Comments:</label>
            <textarea id="cover_letter" name="cover_letter" rows="6"></textarea>

            <button type="submit">Submit Application</button>
        </form>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Recruitment Portal. All rights reserved.</p>
        <p>Visit our <a href="about.php">About Us</a> page for more info.</p>
    </footer>

</body>
</html>