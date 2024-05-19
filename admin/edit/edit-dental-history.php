<?php
require("../../connection/conn.php");

if ($_POST["dental_history_id"]) {
    $data = [
        "dental_history_id" => $_POST['dental_history_id'],
        "e_first_name" => $_POST['e_first_name'],
        "e_last_name" => $_POST['e_last_name'],
        "e_last_dental_visit" => $_POST['e_last_dental_visit'],
    ];

    $sql = "UPDATE tbl_dental_history 
        SET d_first_name = :e_first_name,
        d_last_name = :e_last_name,
        last_dental_visit = :e_last_dental_visit
        WHERE dental_history_id = :dental_history_id";
    if ($conn->prepare($sql)->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "failed";
}
