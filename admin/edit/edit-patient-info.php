<?php
require("../../connection/conn.php");

if ($_POST["e_patient_id"]) {

    $data = [
        "e_patient_id" => $_POST['e_patient_id'],
        "e_last_name" => $_POST['e_last_name'],
        "e_middle_name" => $_POST['e_middle_name'],
        "e_civil_status" => $_POST['e_civil_status'],
        "e_religion" => $_POST['e_religion'],
        "e_nationality" => $_POST['e_nationality'],
        "e_occupation" => $_POST['e_occupation'],
        "e_office_no" => $_POST['e_office_no'],
        "e_dental_insurance" => $_POST['e_dental_insurance'],
        "e_effective_date" => $_POST['e_effective_date'],
        "e_fax_no" => $_POST['e_fax_no'],
        "e_cellphone_no" => $_POST['e_cellphone_no'],
        "e_email_address" => $_POST['e_email_address'],
    ];
    $sql = "UPDATE tbl_patient_info
            SET last_name = :e_last_name,
            middle_name = :e_middle_name,
            civil_status = :e_civil_status,
            religion = :e_religion,
            nationality = :e_nationality,
            occupation = :e_occupation,
            office_no = :e_office_no,
            dental_insurance = :e_dental_insurance,
            effective_date = :e_effective_date,
            fax_no = :e_fax_no,
            cellphone_number = :e_cellphone_no,
            email_address = :e_email_address
            WHERE patient_id = :e_patient_id";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "failed";
}
