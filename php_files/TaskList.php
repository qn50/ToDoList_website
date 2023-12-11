<?php include '../php_files/StartHTML.php'; ?>

<link rel="stylesheet" type="text/css" href="../CSS_Files/taskList.css" />
<link rel="stylesheet" type="text/css" href="../CSS_Files/taskListPrint.css" />
<link rel="stylesheet" type="text/css" href="../CSS_Files/style.css" />

<?php
    include '../php_files/HeaderNav.php';


    // Connection parameters
    $servername = "localhost";
    $username = "calepubq_DB2";
    $password = "calepubq_DB2";
    $dbname = "calepubq_DB2";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // SQL query to select tasks
    $sql = "SELECT * FROM tasks"; // Replace YourTableName with the actual table name
    
    $result = $conn->query($sql);
?>

<div class="tblElements">
    <form class="contact-container" action="#" method="post">
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Target Date</th>
                    <th>Is Done?</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["ID"] . "</td>";
                        echo "<td>" . $row["title"] . "</td>";
                        echo "<td>" . $row["event_date"] . "</td>";
                        echo "<td>" . ($row["status"] ? "True" : "False") . "</td>";
                        echo "<td><button class='Btn-Succ' type='button'>Update</button></td>";
                        echo "<td><button class='Btn-del' type='button'>Delete</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No tasks found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
</div>

<?php
// Close connection
$conn->close();

include '../php_files/Footer.php';
?>
