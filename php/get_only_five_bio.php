<?php
    $latest_five_bio=[];
    $get_five_bio = $conn->query("SELECT full_name, age, profession, profile_picture FROM biodatas WHERE status='active' ORDER BY id DESC LIMIT 5 ");

    $latest_five_bio = $get_five_bio->fetchAll(PDO::FETCH_ASSOC);
?>