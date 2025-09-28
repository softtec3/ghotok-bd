<?php
    $ghotok_available = $role == "ghotok" AND $status == "active";
if(isset($_GET["details_id"])){
    $biodata_id =  $_GET["details_id"];

    $check_interest = $conn->query("SELECT biodata_id FROM interested WHERE user_id='$user_id' AND biodata_id='$biodata_id'");
    $is_available = $check_interest->fetchAll();
    
    $sql_query_bio;

    if(count($is_available) >0 ||  $ghotok_available){
        $sql_query_bio = "SELECT id,full_name, gender, marital_status, dob, age, height, weight, skin_color, education, profession, monthly_income, fathers_name, fathers_occupation, mothers_name, mothers_occupation, siblings,  present_address, district, preferred_age, preferred_height, preferred_education, preferred_profession, profile_picture, phone, email, status FROM biodatas WHERE id='$biodata_id'";

    }else{
        $sql_query_bio = "SELECT id,full_name, gender, marital_status, dob, age, height, weight, skin_color, education, profession, monthly_income, fathers_name, fathers_occupation, mothers_name, mothers_occupation, siblings,  present_address, district, preferred_age, preferred_height, preferred_education, preferred_profession, profile_picture, status FROM biodatas WHERE id='$biodata_id'";
    }

    $get_biodata = $conn->query($sql_query_bio);
    
    $biodata_details = $get_biodata->fetch();

    if(!$biodata_details){
        header("Location: ./home.php");
    }
}

?>