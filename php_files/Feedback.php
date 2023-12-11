<?php include '../php_files/StartHTML.php'; ?>

<link rel="stylesheet" href="../CSS_Files/feedback-styles.css">

<?php include '../php_files/HeaderNav.php'; ?>

<!-- Feedback Form Section -->
<div class="feedback">
        <h2>Feedback Form</h2>
        <form action="handle_feedback.php" method="post">
            <fieldset>
                <legend>Personal Information</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required />

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </fieldset>

            <fieldset>
                <legend>Your Feedback</legend>
                <p>How did you hear about us?</p>
                <label><input type="radio" name="discovery" value="friends" required /> Friends</label>
                <label><input type="radio" name="discovery" value="social_media" /> Social Media</label>
                <label><input type="radio" name="discovery" value="website_blog" /> Website/Blog</label>
                <label><input type="radio" name="discovery" value="other" /> Other</label>

                <p>Services Used:</p>
                <label><input type="checkbox" name="service[view_calendar]" value="1" /> View Calendar</label>
                <label><input type="checkbox" name="service[create_tasks]" value="1" /> Create Tasks</label>
                <label><input type="checkbox" name="service[view_tasklist]" value="1" /> View Tasklist</label>
                <label><input type="checkbox" name="service[contact_us]" value="1" /> Contact Us</label>

                <label for="feedback-type">Type of Feedback:</label>
                <select id="feedback-type" name="feedback-type" required>
                    <option value="comment">Comment</option>
                    <option value="suggestion">Suggestion</option>
                    <option value="complaint">Complaint</option>
                </select>

                <label for="feedback">Your Feedback:</label>
                <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea>
            </fieldset>
            
            <div>
                <input type="submit" value="Submit Feedback" />
            </div>
            
        </form>
    </div>


<?php include '../php_files/Footer.php'; ?>
