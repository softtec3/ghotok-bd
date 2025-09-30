<?php
    // get professions
    $get_professions = $conn->query("SELECT DISTINCT profession FROM biodatas WHERE status='active'");
    $professions = $get_professions->fetchAll();

    // get heights
    $get_heights = $conn->query("SELECT DISTINCT height FROM biodatas WHERE status='active'");
    $heights = $get_heights->fetchAll();

    // get weights
    $get_weights = $conn->query("SELECT DISTINCT weight FROM biodatas WHERE status='active'");
    $weights = $get_weights->fetchAll();

    // get districts
    $get_districts = $conn->query("SELECT DISTINCT district FROM biodatas WHERE status='active'");
    $districts = $get_districts->fetchAll();
?>