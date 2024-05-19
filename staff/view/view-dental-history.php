<?php
require("../../connection/conn.php");

if (isset($_POST['patient_id'])) {
    $patient_id = $_POST['patient_id'];

    try {
        // Fetch patient information
        $sql = "SELECT * FROM tbl_patient_info WHERE patient_id = :patient_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':patient_id', $patient_id);
        $stmt->execute();
        $patient_info = $stmt->fetch(PDO::FETCH_ASSOC);
        // Fetch dental history
        if ($patient_info['dental_history_id']) {
            $dental_history_id = $patient_info['dental_history_id'];
            $sql = "SELECT * FROM tbl_dental_history WHERE dental_history_id = :dental_history_id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':dental_history_id', $dental_history_id);
            $stmt->execute();
            $dental_history = $stmt->fetch(PDO::FETCH_ASSOC);

            $response = array_merge($patient_info, $dental_history);
        } else {
            $response = $patient_info;
        }
        echo json_encode($response);
    } catch (PDOException $e) {
        $response['status'] = 500; // 500 means Internal Server Error
        $response['message'] = "Error: " . $e->getMessage();
        echo json_encode($response);
    }
} else {
    $response['status'] = 400; // 400 means Bad Request
    $response['message'] = "Invalid or data not found";
    echo json_encode($response);
}
