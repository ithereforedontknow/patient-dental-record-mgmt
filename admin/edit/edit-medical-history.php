<?php
require("../../connection/conn.php");

if ($_POST["e_patient_id_med"]) {

    $data = [
        "e_patient_id_med" => $_POST['e_patient_id_med'],
        "physician" => $_POST["e_physician"],
        "officeAddress" => $_POST["e_officeAddress"],
        "specialty" => $_POST["e_specialty"],
        "officeNumber" => $_POST["e_officeNumber"],
        "goodHealth" => $_POST["e_goodHealth"],
        "medicalTreatment" => $_POST["e_medicalTreatment"],
        "treatmentCondition" => $_POST["e_treatmentCondition"],
        "seriousIllnessSurgery" => $_POST["e_seriousIllnessSurgery"],
        "illnessSurgeryDetails" => $_POST["e_illnessSurgeryDetails"],
        "hospitalized" => $_POST["e_hospitalized"],
        "hospitalizationDetails" => $_POST["e_hospitalizationDetails"],
        "medications" => $_POST["e_medications"],
        "medicationDetails" => $_POST["e_medicationDetails"],
        "tobaccoUse" => $_POST["e_tobaccoUse"],
        "alcoholDrugs" => $_POST["e_alcoholDrugs"],
        "allergies" => isset($_POST["e_allergies"]) ? implode(", ", $_POST["e_allergies"]) : '',
        "otherAllergies" => $_POST["e_otherAllergies"],
        "bleedingTime" => $_POST["e_bleedingTime"],
        "pregnant" => $_POST["e_pregnant"],
        "nursing" => $_POST["e_nursing"],
        "birthControl" => $_POST["e_birthControl"],
        "bloodType" => $_POST["e_bloodType"],
        "bloodPressure" => $_POST["e_bloodPressure"],
        "conditions" => isset($_POST["e_conditions"]) ? implode(", ", $_POST["e_conditions"]) : ''
    ];
    $sql = "UPDATE tbl_medical_history
            SET physician = :physician,
            office_address = :officeAddress,
            specialty = :specialty,
            office_number = :officeNumber,
            good_health = :goodHealth,
            medical_treatment = :medicalTreatment,
            treatment_condition = :treatmentCondition,
            serious_illness_surgery = :seriousIllnessSurgery,
            illness_surgery_details = :illnessSurgeryDetails,
            hospitalized = :hospitalized,
            hospitalization_details = :hospitalizationDetails,
            medications = :medications,
            medication_details = :medicationDetails,
            tobacco_use = :tobaccoUse,
            alcohol_drugs = :alcoholDrugs,
            allergies = :allergies,
            other_allergies = :otherAllergies,
            bleeding_time = :bleedingTime,
            pregnant = :pregnant,
            nursing = :nursing,
            birth_control = :birthControl,
            blood_type = :bloodType,
            blood_pressure = :bloodPressure,
            conditions = :conditions
            WHERE med_history_id = :e_patient_id_med";

    if ($conn->prepare($sql)->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "failed";
}
