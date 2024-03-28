<?php
session_start();

require("connection/conn.php");
if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM tbl_users WHERE id = '$id' AND password = '$pass'";
    //prepare
    //bind
    //execute
    $query = $conn->query($sql);
    if ($query->rowCount() > 0) {
        foreach ($query as $row) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['userlevel'] = $row['userlevel'];
        }
        if ($_SESSION['userlevel'] == 'admin') {
            echo "admin";
        } elseif ($_SESSION['userlevel'] == 'staff') {
            echo "staff";
        } else {
            echo "patient";
        }
    } else {
        echo "error";
    }
}
