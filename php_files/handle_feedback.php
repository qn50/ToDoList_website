<?php
    // Connection parameters
    $servername = "localhost";
    $username = "calepubq_DB2";
    $password = "calepubq_DB2"; // Default XAMPP MySQL password is empty
    $dbname = "calepubq_DB2"; // Replace with your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $discovery = $_POST['discovery'];
    $serviceViewCalendar = isset($_POST['service']['view_calendar']) ? 1 : 0;
    $serviceCreateTasks = isset($_POST['service']['create_tasks']) ? 1 : 0;
    $serviceViewTasklist = isset($_POST['service']['view_tasklist']) ? 1 : 0;
    $serviceContactUs = isset($_POST['service']['contact_us']) ? 1 : 0;
    $feedbackType = $_POST['feedback-type'];
    $feedbackContent = $_POST['feedback'];

    // SQL query to insert data
    $sql = "INSERT INTO UserFeedback (Name, Email, DiscoveryMethod, ServiceViewCalendar, ServiceCreateTasks, ServiceViewTasklist, ServiceContactUs, FeedbackType, FeedbackContent) 
    VALUES ('$name', '$email', '$discovery', '$serviceViewCalendar', '$serviceCreateTasks', '$serviceViewTasklist', '$serviceContactUs', '$feedbackType', '$feedbackContent')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the form page with a success flag
        header("Location: Feedback.php?success=1");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
?>