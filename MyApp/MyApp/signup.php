<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone'])) {
    if ($db->dbConnect()) {
        if ($db->signUp("user", $_POST['email'], $_POST['username'], $_POST['password'], $_POST['phone'])) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
