<?php
session_start();
if ($_POST["logout"]) {
    session_destroy();
}
header("location: index.php");
