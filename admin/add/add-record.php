<?php
require("../../connection/conn.php");

if ($_POST["patient_id"]) {
    $data = [
        "patient_id" => $_POST["patient_id"],
        "date" => $_POST["date"],
        "diagnosis" => $_POST["diagnosis"],
        "treatment" => $_POST["treatment"],
        "initialExamination" => $_POST["initialExamination"],
        "prescription" => $_POST["prescription"],
        "followupDate" => $_POST["followupDate"],
    ];
    $sql = "INSERT INTO tbl_records
    (record_id, date, diagnosis, initial_examination, treatment, prescription, followup_checkup_date)
    VALUES (:patient_id, :date, :diagnosis, :initialExamination, :treatment, :prescription, :followupDate)";


    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':patient_id', $data['patient_id'], PDO::PARAM_STR);
    $stmt->bindParam(':date', $data['date'], PDO::PARAM_STR);
    $stmt->bindParam(':diagnosis', $data['diagnosis'], PDO::PARAM_STR);
    $stmt->bindParam(':initialExamination', $data['initialExamination'], PDO::PARAM_STR);
    $stmt->bindParam(':treatment', $data['treatment'], PDO::PARAM_STR);
    $stmt->bindParam(':prescription', $data['prescription'], PDO::PARAM_STR);
    $stmt->bindParam(':followupDate', $data['followupDate'], PDO::PARAM_STR);

    if ($stmt->execute()) {
        $patient_id = $data['patient_id'];

        // Update the other table with the new patient_id
        $updateSql = "UPDATE tbl_patient_info SET record_id = ? WHERE patient_id = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bindParam(1, $patient_id, PDO::PARAM_INT);
        $updateStmt->bindParam(2, $patient_id, PDO::PARAM_INT);

        if ($updateStmt->execute()) {
            echo "success";
        } else {
            echo "failed";
        }
    } else {
        echo "failed";
    }
}
