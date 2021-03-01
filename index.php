<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("users", $_POST['fullname'], $_POST['email'], $_POST['phone'], $_POST['password'])) {
            echo "Sign up success";
        } else echo "Sign up failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
