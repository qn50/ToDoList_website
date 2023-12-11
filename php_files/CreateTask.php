<?php include '../php_files/StartHTML.php'; ?>

<link rel="stylesheet" type="text/css" href="../CSS_Files/style.css" />

<?php include '../php_files/HeaderNav.php'; ?>

<div class="CreateTask">
    <h2>Add New Task</h2>
    <form action="handle_CreateTask.php" method="post">
        <div>
            <label for="event-title">Task Title:</label><br />
            <input type="text" id="event-title" name="event-title" /><br /><br />
        </div>
        <div>
            <label for="event-date">Event Date:</label><br />
            <input type="date" id="event-date" name="event-date" /><br /><br />
        </div>
        <div>
            <label for="status">Status:</label><br />
            <select id="status" name="status">
                <option value="Not Done">Not Done</option>
                <option value="Done">Done</option>
            </select><br /><br />
        </div>
        <div>
            <input type="submit" value="Add Event" name="submit" />
        </div>
    </form>
</div>

<?php include '../php_files/Footer.php'; ?>