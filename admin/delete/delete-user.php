<?php
require("../../connection/conn.php");
if ($_POST["d_id"]) {

    $data = [
        "d_id" => $_POST['d_id'],
    ];
    $sql = "DELETE FROM tbl_users where id = :d_id";

    $stmt = $conn->prepare($sql);

    if ($stmt->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
} else {
    echo "failed";
}
