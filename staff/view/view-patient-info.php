<?php
require("../../connection/conn.php");
if (isset($_POST['patient_id'])) {
    $patient_id = $_POST['patient_id'];
    $sql = "SELECT * FROM tbl_patient_info WHERE patient_id = '$patient_id'";
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
