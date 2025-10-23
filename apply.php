<?php

include_once("header.inc");
include_once("nav.inc");
?>

<main class="main-content">
    <section class="page-header">
        <h1>Apply for a Role</h1>
        <p>Please complete the form below to submit your expression of interest.</p>
    </section>

    <form id="applyForm" method="post" action="process_eoi.php" novalidate>
        <fieldset>
            <legend>Job Details</legend>

            <label for="job_ref">Job Reference Number:</label>
            <input type="text" id="job_ref" name="job_ref" maxlength="5" placeholder="e.g. A1B2C" required>

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" maxlength="20" placeholder="John" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" maxlength="20" placeholder="Doe" required>
        </fieldset>

        <fieldset>
            <legend>Contact Information</legend>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" placeholder="04XXXXXXXX" required>
        </fieldset>

        <fieldset>
            <legend>Address</legend>

            <label for="street">Street Address:</label>
            <input type="text" id="street" name="street" required>

            <label for="suburb">Suburb/Town:</label>
            <input type="text" id="suburb" name="suburb" required>

            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="">Please select</option>
                <option value="VIC">VIC</option>
                <option value="NSW">NSW</option>
                <option value="QLD">QLD</option>
                <option value="NT">NT</option>
                <option value="WA">WA</option>
                <option value="SA">SA</option>
                <option value="TAS">TAS</option>
                <option value="ACT">ACT</option>
            </select>

            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" maxlength="4" required>
        </fieldset>

        <fieldset>
            <legend>Skills and Other Information</legend>

            <p>Please select your skills:</p>
            <label><input type="checkbox" name="skills[]" value="Communication"> Communication</label>
            <label><input type="checkbox" name="skills[]" value="Teamwork"> Teamwork</label>
            <label><input type="checkbox" name="skills[]" value="Problem Solving"> Problem Solving</label>
            <label><input type="checkbox" name="skills[]" value="Programming"> Programming</label>

            <label for="other_skills">Other Skills:</label>
            <textarea id="other_skills" name="other_skills" rows="4" cols="40" placeholder="List any other skills here..."></textarea>
        </fieldset>

        <div class="form-actions">
            <button type="submit">Submit Application</button>
            <button type="reset">Reset Form</button>
        </div>
    </form>
</main>

<?php

include_once("footer.inc");
?>
