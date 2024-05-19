<?php
require("../../connection/conn.php");

if ($_POST["name"]) {
    $data = [
        "name" => $_POST["name"],
        "password" => $_POST["password"],
        "user_level" => $_POST["user_level"],
    ];
    $sql = "INSERT INTO tbl_users
    (name, password, userlevel)
    VALUES (:name, :password, :user_level)";

    if ($conn->prepare($sql)->execute($data)) {
        echo "success";
    } else {
        echo "failed";
    }
}
