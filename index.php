<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Recruitment Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

   
    <div class="top-nav">
        <span class="top-nav-text">Welcome to our recruitment portal</span>
        <span class="australia">Australia</span>
        <div class="icon-tray">
            <img src="assets/icon1.png" alt="icon" class="icon">
            <img src="assets/icon2.png" alt="icon" class="icon">
        </div>
        <button class="apply-button">Apply Now</button>
    </div>

   
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
            <h1 class="hero-phrase">Your Career Starts Here</h1>
            <p class="hero-text">Explore a variety of opportunities across multiple industries.</p>
            <p class="hero-text2">Join our team and make a difference.</p>
            <a href="jobs.php" class="more-button">See Available Jobs</a>
        </div>
    </section>

    <main>
        <div class="page-intro">
            <h2>Featured Opportunities</h2>
        </div>

        <div class="featured">
            <div class="job-card">
                <div class="job-card__head">
                    <h3>Software Developer</h3>
                </div>
                <p class="company">Company A</p>
                <h4>Responsibilities:</h4>
                <ul>
                    <li>Develop web applications</li>
                    <li>Collaborate with cross-functional teams</li>
                </ul>
                <h4>Salary:</h4>
                <span class="salary-chip">$80,000 - $100,000</span>
            </div>

            <div class="job-card">
                <div class="job-card__head">
                    <h3>Marketing Coordinator</h3>
                </div>
                <p class="company">Company B</p>
                <h4>Responsibilities:</h4>
                <ul>
                    <li>Coordinate campaigns</li>
                    <li>Analyze market trends</li>
                </ul>
                <h4>Salary:</h4>
                <span class="salary-chip">$60,000 - $75,000</span>
            </div>
        </div>

        
        <div class="more">
            <h2>Other Available Jobs</h2>
            <div class="tiles">
                <div class="tile tile--p200">
                    <h3>Graphic Designer</h3>
                    <h4>Company C</h4>
                    <p>Design creative assets for marketing campaigns.</p>
                </div>
                <div class="tile tile--p300">
                    <h3>HR Assistant</h3>
                    <h4>Company D</h4>
                    <p>Assist HR team with recruitment and onboarding.</p>
                </div>
                <div class="tile tile--p400">
                    <h3>Accountant</h3>
                    <h4>Company E</h4>
                    <p>Manage financial records and reports.</p>
                </div>
                <div class="tile tile--p500">
                    <h3>Project Manager</h3>
                    <h4>Company F</h4>
                    <p>Lead projects from planning to execution.</p>
                </div>
            </div>
        </div>

        
        <aside class="compliance">
            <h3>Compliance</h3>
            <ul>
                <li>Equal opportunity employer</li>
                <li>Workplace safety certified</li>
                <li>Privacy compliant</li>
            </ul>
        </aside>
    </main>

    
    <footer>
        <p>&copy; 2025 Recruitment Portal. All rights reserved.</p>
        <p>Visit our <a href="about.php">About Us</a> page for more info.</p>
    </footer>

</body>
</html>