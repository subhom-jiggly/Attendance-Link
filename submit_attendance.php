<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST["student_name"];

    // Database connection (replace with your credentials)
    $servername = "localhost";
    $username = "root";
    $password = "mysqlserver";
    $dbname = "attendance_db";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO attendance (student_name) VALUES ('$student_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Attendance marked successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
