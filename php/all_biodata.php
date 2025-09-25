<?php
    $looking = $logged_user_details["looking_for"];
    // All bio-data based on looking for;
    $all_biodata = [];
    $get_all_biodata = $conn->query("SELECT id,full_name, gender, marital_status, dob, age, height, weight, skin_color, education, profession, monthly_income, fathers_name, fathers_occupation, mothers_name, mothers_occupation, siblings,  present_address, district, preferred_age, preferred_height, preferred_education, preferred_profession, profile_picture, status FROM biodatas WHERE gender='$looking' AND status='active'");
    $all_biodata = $get_all_biodata->fetchAll();

    // All bio-data including male and female
    $get_all_biodata_all = $conn->query("SELECT id,full_name, gender, marital_status, dob, age, height, weight, skin_color, education, profession, monthly_income, fathers_name, fathers_occupation, mothers_name, mothers_occupation, siblings,  present_address, district, preferred_age, preferred_height, preferred_education, preferred_profession, profile_picture, status FROM biodatas WHERE status='active'");
    $all_biodata_all = $get_all_biodata_all->fetchAll();    

// Filter
    if (isset($_GET["filter"])) {
    $lookingFor = !empty($_GET["lookingFor"]) ? $_GET["lookingFor"] : $looking;
    $age        = !empty($_GET["age"]) ? (int) $_GET["age"] : null;
    $location   = !empty($_GET["location"]) ? $_GET["location"] : null;
    $profession = !empty($_GET["profession"]) ? $_GET["profession"] : null;
    $height     = !empty($_GET["height"]) ? $_GET["height"] : null;

    $filtered = array_filter($all_biodata_all, function($biodata) use ($lookingFor, $age, $location, $profession, $height) {
        if ($biodata["gender"] !== $lookingFor) {
            return false;
        }
        if (!is_null($age) && $biodata["age"] < $age) {
            return false;
        }
        if (!is_null($location) && strtolower($biodata["district"]) !== strtolower($location)) {
            return false;
        }
        if (!is_null($profession) && stripos($biodata["profession"], $profession) === false) {
            return false;
        }
        if (!is_null($height) && $biodata["height"] != $height) {
            return false;
        }

        return true;
    });
    $all_biodata = array_values($filtered);
}

?>