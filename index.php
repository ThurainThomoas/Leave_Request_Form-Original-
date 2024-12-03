<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        label { font-weight: bold; }
        input, textarea { width: 100%; padding: 10px; margin: 5px 0; }
        button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>
    <h2>Leave Request Form</h2>
    <form action="submit_leave.php" method="POST">
        <label for="employee_name">Employee Name:</label>
        <input type="text" name="employee_name" id="employee_name" required>

        <label for="leave_type">Leave Type:</label><br>
        <select name="leave_type" id="leave_type" required>
            <option value="sick">Sick Leave</option>
            <option value="vacation">Vacation</option>
            <option value="other">Other</option>
        </select><br>

        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required>

        <label for="reason">Reason for Leave:</label>
        <textarea name="reason" id="reason" rows="4" required></textarea>

        <button type="submit">Submit Request</button>
    </form>
</body>
</html>
