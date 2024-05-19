<?php
require("../../connection/conn.php");
if ($_POST["e_id"]) {

    $data = [
        "e_id" => $_POST['e_id'],
        "e_name" => $_POST['e_name'],
        "e_password" => $_POST['e_password'],
        "e_user_level" => $_POST['e_user_level'],
    ];
    $sql = "UPDATE tbl_users
            SET name =:e_name,
            password =:e_password,
            userlevel =:e_user_level
            WHERE id =:e_id";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "failed";
}
