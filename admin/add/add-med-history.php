<?php
require("../../connection/conn.php");

if ($_POST["patient_id_med"]) {
    $data = [
        "patient_id_med" => $_POST["patient_id_med"],
        "physician" => $_POST["physician"],
        "officeAddress" => $_POST["officeAddress"],
        "specialty" => $_POST["specialty"],
        "officeNumber" => $_POST["officeNumber"],
        "goodHealth" => $_POST["goodHealth"],
        "medicalTreatment" => $_POST["medicalTreatment"],
        "treatmentCondition" => $_POST["treatmentCondition"],
        "seriousIllnessSurgery" => $_POST["seriousIllnessSurgery"],
        "illnessSurgeryDetails" => $_POST["illnessSurgeryDetails"],
        "hospitalized" => $_POST["hospitalized"],
        "hospitalizationDetails" => $_POST["hospitalizationDetails"],
        "medications" => $_POST["medications"],
        "medicationDetails" => $_POST["medicationDetails"],
        "tobaccoUse" => $_POST["tobaccoUse"],
        "alcoholDrugs" => $_POST["alcoholDrugs"],
        "allergies" => isset($_POST["allergies"]) ? implode(", ", $_POST["allergies"]) : '',
        "otherAllergies" => $_POST["otherAllergies"],
        "bleedingTime" => $_POST["bleedingTime"],
        "pregnant" => $_POST["pregnant"],
        "nursing" => $_POST["nursing"],
        "birthControl" => $_POST["birthControl"],
        "bloodType" => $_POST["bloodType"],
        "bloodPressure" => $_POST["bloodPressure"],
        "conditions" => isset($_POST["conditions"]) ? implode(", ", $_POST["conditions"]) : ''
    ];

    $sql = "INSERT INTO tbl_medical_history 
    (med_history_id, physician, office_address, specialty, office_number, good_health, 
    medical_treatment, treatment_condition, serious_illness_surgery, illness_surgery_details, 
    hospitalized, hospitalization_details, medications, medication_details, 
    tobacco_use, alcohol_drugs, allergies, other_allergies, bleeding_time, 
    pregnant, nursing, birth_control, blood_type, blood_pressure, conditions) 
    VALUES 
    (:patient_id_med, :physician, :officeAddress, :specialty, :officeNumber, :goodHealth, 
    :medicalTreatment, :treatmentCondition, :seriousIllnessSurgery, :illnessSurgeryDetails, 
    :hospitalized, :hospitalizationDetails, :medications, :medicationDetails, 
    :tobaccoUse, :alcoholDrugs, :allergies, :otherAllergies, :bleedingTime, 
    :pregnant, :nursing, :birthControl, :bloodType, :bloodPressure, :conditions)";


    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":patient_id_med", $data['patient_id_med'], PDO::PARAM_STR);
    $stmt->bindParam(":physician", $data['physician'], PDO::PARAM_STR);
    $stmt->bindParam(":officeAddress", $data['officeAddress'], PDO::PARAM_STR);
    $stmt->bindParam(":specialty", $data['specialty'], PDO::PARAM_STR);
    $stmt->bindParam(":officeNumber", $data['officeNumber'], PDO::PARAM_STR);
    $stmt->bindParam(":goodHealth", $data['goodHealth'], PDO::PARAM_STR);
    $stmt->bindParam(":medicalTreatment", $data['medicalTreatment'], PDO::PARAM_STR);
    $stmt->bindParam(":treatmentCondition", $data['treatmentCondition'], PDO::PARAM_STR);
    $stmt->bindParam(":seriousIllnessSurgery", $data['seriousIllnessSurgery'], PDO::PARAM_STR);
    $stmt->bindParam(":illnessSurgeryDetails", $data['illnessSurgeryDetails'], PDO::PARAM_STR);
    $stmt->bindParam(":hospitalized", $data['hospitalized'], PDO::PARAM_STR);
    $stmt->bindParam(":hospitalizationDetails", $data['hospitalizationDetails'], PDO::PARAM_STR);
    $stmt->bindParam(":medications", $data['medications'], PDO::PARAM_STR);
    $stmt->bindParam(":medicationDetails", $data['medicationDetails'], PDO::PARAM_STR);
    $stmt->bindParam(":tobaccoUse", $data['tobaccoUse'], PDO::PARAM_STR);
    $stmt->bindParam(":alcoholDrugs", $data['alcoholDrugs'], PDO::PARAM_STR);
    $stmt->bindParam(":allergies", $data['allergies'], PDO::PARAM_STR);
    $stmt->bindParam(":otherAllergies", $data['otherAllergies'], PDO::PARAM_STR);
    $stmt->bindParam(":bleedingTime", $data['bleedingTime'], PDO::PARAM_STR);
    $stmt->bindParam(":pregnant", $data['pregnant'], PDO::PARAM_STR);
    $stmt->bindParam(":nursing", $data['nursing'], PDO::PARAM_STR);
    $stmt->bindParam(":birthControl", $data['birthControl'], PDO::PARAM_STR);
    $stmt->bindParam(":bloodType", $data['bloodType'], PDO::PARAM_STR);
    $stmt->bindParam(":bloodPressure", $data['bloodPressure'], PDO::PARAM_STR);
    $stmt->bindParam(":conditions", $data['conditions'], PDO::PARAM_STR);

    if ($stmt->execute()) {

        $medical_history_id = $data['patient_id_med'];

        $updateSql = "UPDATE tbl_patient_info SET med_history_id = ? WHERE patient_id = ?";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bindParam(1, $medical_history_id, PDO::PARAM_INT);
        $updateStmt->bindParam(2, $medical_history_id, PDO::PARAM_INT);

        if ($updateStmt->execute()) {
            echo "success";
        } else {
            echo "failed";
        }
    } else {
        echo "failed";
    }
}
