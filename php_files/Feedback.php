<?php include '../php_files/StartHTML.php'; ?>

<link rel="stylesheet" href="../CSS_Files/feedback-styles.css">

<?php include '../php_files/HeaderNav.php'; ?>

<!-- Feedback Form Section -->
<div class="feedback">
    <h2>Feedback Form</h2>
    <form action="/submit-feedback" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" />

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" />
        </fieldset>

        <fieldset>
            <legend>Your Feedback</legend>
            <p>How did you hear about us?</p>
            <label><input type="radio" name="discovery" value="friends" /> Friends</label>
            <label><input type="radio" name="discovery" value="social_media" /> Social Media</label>
            <label><input type="radio" name="discovery" value="website_blog" /> Website/Blog</label>
            <label><input type="radio" name="discovery" value="other" /> Other</label>

            <p>Services Used:</p>
            <label><input type="checkbox" name="service" value="view_calendar" /> View Calendar</label>
            <label><input type="checkbox" name="service" value="create_tasks" /> Create Tasks</label>
            <label><input type="checkbox" name="service" value="view_tasklist" /> View Tasklist</label>
            <label><input type="checkbox" name="service" value="contact_us" /> Contact Us</label>

            <label for="feedback-type">Type of Feedback:</label>
            <select id="feedback-type" name="feedback-type">
                <option value="comment">Comment</option>
                <option value="suggestion">Suggestion</option>
                <option value="complaint">Complaint</option>
            </select>

            <label for="feedback">Your Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea>
        </fieldset>
        
        <div>
            <input type="submit" name="submit" value="Submit Feedback" />
        </div>
        
    </form>
</div>


<?php include '../php_files/Footer.php'; ?>