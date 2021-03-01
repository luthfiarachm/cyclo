<?php
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
$conn = mysqli_connect("localhost", "root", "", "cyclo");
 
if (isset($_POST["update_profile"]))
{
    $id = $_POST["id_user"];
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $image = $_POST["image"];
 
    $file_path = "profile/" . $id . ".png";
 
    file_put_contents($file_path, base64_decode($picture));
 
    $sql = "UPDATE `users` SET `name`='" . $name . "',`image`='" . $file_path . "' WHERE id='" . $id . "'";
    mysqli_query($conn, $sql);
 
    echo "Profile has been updated";
    exit();
}
 
?>