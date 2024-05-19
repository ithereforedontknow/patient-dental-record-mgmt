<?php
require("../../connection/conn.php");

if (isset($_POST['patient_id'])) {
    $patient_id = $_POST['patient_id'];

    $sql = "SELECT
                pi.*, dh.*, mh.*, r.*
            FROM
                tbl_patient_info pi
                LEFT JOIN tbl_dental_history dh ON pi.dental_history_id = dh.dental_history_id
                LEFT JOIN tbl_medical_history mh ON pi.med_history_id = mh.med_history_id
                LEFT JOIN tbl_records r ON pi.record_id = r.record_id
            WHERE
                pi.patient_id = '$patient_id'";

    $result = $conn->query($sql);
    $response = array();
    foreach ($conn->query($sql) as $row) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status'] = 400; // 400 means bad request
    $response['message'] = "Invalid request";
}
