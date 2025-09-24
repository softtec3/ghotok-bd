<?php
    $looking = $logged_user_details["looking_for"];
    
    $get_all_biodata = $conn->query("SELECT id,full_name, gender, marital_status, dob, age, height, weight, skin_color, education, profession, monthly_income, fathers_name, fathers_occupation, mothers_name, mothers_occupation, siblings,  present_address, district, preferred_age, preferred_height, preferred_education, preferred_profession, profile_picture, status FROM biodatas WHERE gender='$looking' AND status='active'");

    $all_biodata = $get_all_biodata->fetchAll();
?>