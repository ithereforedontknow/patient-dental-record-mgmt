<?php
require("../../connection/conn.php");

if ($_POST["dental_history_id"]) {
    $data = [
        "dental_history_id" => $_POST['dental_history_id'],
        "e_first_name" => $_POST['e_first_name'],
        "e_last_name" => $_POST['e_last_name'],
        "e_last_dental_visit" => $_POST['e_last_dental_visit'],
    ];

    $sql = "INSERT INTO tbl_dental_history
        (dental_history_id, d_first_name, d_last_name, last_dental_visit)
        VALUES (:dental_history_id, :e_first_name, :e_last_name, :e_last_dental_visit)";

    if ($conn->prepare($sql)->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "failed";
}
