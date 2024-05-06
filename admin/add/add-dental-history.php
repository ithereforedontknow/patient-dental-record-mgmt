<?php
require("../../connection/conn.php");

if ($_POST["dental_history_id"]) {
    $data = [
        "dental_history_id" => $_POST['dental_history_id'],
        "firstName" => $_POST['firstName'],
        "lastName" => $_POST['lastName'],
        "last_dental_visit" => $_POST['last_dental_visit'],
    ];

    $sql = "INSERT INTO tbl_dental_history
        (dental_history_id, d_first_name, d_last_name, last_dental_visit)
        VALUES (:dental_history_id, :firstName, :lastName, :last_dental_visit)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":dental_history_id", $data['dental_history_id'], PDO::PARAM_STR);
    $stmt->bindParam(":firstName", $data['firstName'], PDO::PARAM_STR);
    $stmt->bindParam(":lastName", $data['lastName'], PDO::PARAM_STR);
    $stmt->bindParam(":last_dental_visit", $data['last_dental_visit'], PDO::PARAM_STR);

    if ($stmt->execute()) {
        $dental_history_id = $data['dental_history_id'];

        // Update the other table with the new dental_history_id
        $updateSql = "UPDATE tbl_patient_info SET dental_history_id = ? WHERE patient_id = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bindParam(1, $dental_history_id, PDO::PARAM_INT);
        $updateStmt->bindParam(2, $dental_history_id, PDO::PARAM_INT);

        if ($updateStmt->execute()) {
            echo "success";
        } else {
            echo "failed";
        }
    } else {
        echo "failed";
    }
}
