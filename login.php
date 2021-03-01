<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        if ($db->logIn("users", $_POST['email'], $_POST['password'])) {
            echo "Login success";
        } else echo "Wrong e-mail or password";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
