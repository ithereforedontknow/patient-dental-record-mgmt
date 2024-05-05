<?php
require("../../connection/conn.php");
if (isset($_POST['patient_id'])) {
    $patient_id = $_POST['patient_id'];
    $sql = "SELECT p.*, d.first_name, d.last_name, d.last_dental_visit
            FROM tbl_patient_info p
            INNER JOIN tbl_dental_history d ON p.dental_history_id = d.dental_history_id
            WHERE p.patient_id = ?";
    $result = $conn->query($sql);
    $response = array();
    foreach ($conn->query($sql) as $row) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status'] = 200; //200 means ok
    $response['message'] = "Invalid or data not found";
}
