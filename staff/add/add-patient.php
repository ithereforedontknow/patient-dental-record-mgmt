<?php
require("../../connection/conn.php");

if ($_POST["lastName"]) {
    $data = [
        "lastName" => $_POST["lastName"],
        "firstName" => $_POST["firstName"],
        "middleName" => $_POST["middleName"],
        "birthdate" => $_POST["birthdate"],
        "age" => $_POST["age"],
        "civilStatus" => $_POST["civilStatus"],
        "sex" => $_POST["sex"],
        "religion" => $_POST["religion"],
        "nationality" => $_POST["nationality"],
        "nickname" => $_POST["nickname"],
        "occupation" => $_POST["occupation"],
        "officeNo" => $_POST["officeNo"],
        "dentalInsurance" => $_POST["dentalInsurance"] ? true : false, // Convert checkbox value to boolean
        "effectiveDate" => $_POST["effectiveDate"],
        "faxNo" => $_POST["faxNo"],
        "cellphoneNumber" => $_POST["cellphoneNumber"],
        "emailAddress" => $_POST["emailAddress"],
        "userlevel" => $_POST["userlevel"],
    ];
    $sql = "INSERT INTO tbl_patient_info
    (last_name, first_name, middle_name, birthdate, age, 
    civil_status, sex, religion, nationality, nickname, 
    occupation, office_no, dental_insurance, effective_date, 
    fax_no, cellphone_number, email_address, userlevel)
    VALUES (:lastName, :firstName, :middleName, :birthdate, :age,
    :civilStatus, :sex, :religion, :nationality, :nickname,
    :occupation, :officeNo, :dentalInsurance, :effectiveDate,
    :faxNo, :cellphoneNumber, :emailAddress, :userlevel)";

    if ($conn->prepare($sql)->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
}
