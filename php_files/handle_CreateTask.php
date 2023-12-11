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

    $title = $_POST['event-title'];
    $event_date = $_POST['event-date'];
    $status = $_POST['status'];
    
    // SQL query to insert data
    $sql = "INSERT INTO tasks (title, event_date, status) 
    VALUES ('$title', '$event_date', '$status')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
?>