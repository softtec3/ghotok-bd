<?php
    $user_id = $_SESSION["user_id"];
    // user bio-data details
    $logged_user = $conn->query("SELECT * FROM biodatas WHERE user_id='$user_id'");
    $logged_user_bio_details = $logged_user->fetch();
?>