<?php
$servername = "localhost";
$username = "root"; // default MySQL username
$password = ""; // default MySQL password (empty for XAMPP)
$dbname = "leave_system"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_name = $_POST['employee_name'];
    $leave_type = $_POST['leave_type'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $reason = $_POST['reason'];

    // Insert leave request into database
    $sql = "INSERT INTO leave_requests (employee_name, leave_type, start_date, end_date, reason)
            VALUES ('$employee_name', '$leave_type', '$start_date', '$end_date', '$reason')";

    if ($conn->query($sql) === TRUE) {
        echo "Leave request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
