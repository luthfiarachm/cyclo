<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['phone']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logInPhone("users", $_POST['phone'], $_POST['password'])) {
            echo "Login success";
        } else echo "Wrong phone number or password";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
