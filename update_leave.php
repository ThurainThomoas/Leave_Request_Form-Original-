<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "leave_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE leave_requests SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Leave request $status successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>
