<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leave_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM leave_requests WHERE status='pending'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h3>Leave Request #{$row['id']}</h3>";
        echo "<p>Employee Name: {$row['employee_name']}</p>";
        echo "<p>Leave Type: {$row['leave_type']}</p>";
        echo "<p>Start Date: {$row['start_date']}</p>";
        echo "<p>End Date: {$row['end_date']}</p>";
        echo "<p>Reason: {$row['reason']}</p>";
        
        echo "<form action='update_leave.php' method='POST'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit' name='status' value='approved'>Approve</button>
                <button type='submit' name='status' value='rejected'>Reject</button>
              </form>";
        echo "</div><hr>";
    }
} else {
    echo "No pending requests.";
}

$conn->close();
?>
