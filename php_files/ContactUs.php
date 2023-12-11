<?php include '../php_files/StartHTML.php'; ?>

<link rel="stylesheet" type="text/css" href="../CSS_Files/ContactUs.css" />

<?php include '../php_files/HeaderNav.php'; ?>

<div class="contact-box">
    <h2>Contact Us</h2>
    <form action="/submit-form" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" />
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" />
        </div>

        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" />
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>
        </div>
        
        <div>
            <input type="submit" name="submit" value="Submit Form" />
        </div>
    </form>
</div>

<?php include '../php_files/Footer.php'; ?>