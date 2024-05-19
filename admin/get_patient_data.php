<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_dental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the SQL query
$sql = "SELECT MONTH(created_at) AS month, YEAR(created_at) AS year, COUNT(*) AS patient_count
        FROM tbl_patient_info
        GROUP BY YEAR(created_at), MONTH(created_at)
        ORDER BY YEAR(created_at), MONTH(created_at)";

$result = $conn->query($sql);

// Store the data in an array
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
