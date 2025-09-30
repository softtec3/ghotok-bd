<?php
    // get professions
    $get_professions = $conn->query("SELECT DISTINCT profession FROM biodatas WHERE status='active'");
    $professions = array_column($get_professions->fetchAll(), "profession");
     sort($professions, SORT_STRING);
    // get heights
    $get_heights = $conn->query("SELECT DISTINCT height FROM biodatas WHERE status='active'");
    $heights = array_column($get_heights->fetchAll(), "height");
     sort($heights, SORT_NUMERIC);
    // get weights
    $get_weights = $conn->query("SELECT DISTINCT weight FROM biodatas WHERE status='active'");
    $weights = array_column($get_weights->fetchAll(), "weight");
    sort($weights, SORT_NUMERIC);
    // get districts
    $get_districts = $conn->query("SELECT DISTINCT district FROM biodatas WHERE status='active'");
    $districts = array_column($get_districts->fetchAll(), "district");
    sort($districts, SORT_STRING);
?>