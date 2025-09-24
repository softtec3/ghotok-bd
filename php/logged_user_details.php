<?php
    $user_id = $_SESSION["user_id"];
    // user bio-data details
    $logged_user_bio = $conn->query("SELECT * FROM biodatas WHERE user_id='$user_id'");
    $logged_user_bio_details = $logged_user_bio->fetch();

    // logged user details
    $logged_user = $conn->query("SELECT gender, looking_for, role, connects FROM users WHERE user_id='$user_id'");
    $logged_user_details = $logged_user->fetch();
?>