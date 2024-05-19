<?php
require("../../connection/conn.php");

if ($_POST["patient_id"]) {
    $data = [
        "patient_id" => $_POST['patient_id'],
        "date" => $_POST["date"],
        "diagnosis" => $_POST["diagnosis"],
        "treatment" => $_POST["treatment"],
        "initialExamination" => $_POST["initialExamination"],
        "prescription" => $_POST["prescription"],
        "followupDate" => $_POST["followupDate"],
    ];

    $sql = "UPDATE tbl_records 
        SET date = :date,
        diagnosis = :diagnosis,
        treatment = :treatment,
        initial_examination = :initialExamination,
        prescription = :prescription,
        followup_checkup_date = :followupDate
        WHERE record_id = :patient_id";
    if ($conn->prepare($sql)->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "failed";
}
