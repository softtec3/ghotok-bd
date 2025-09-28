<?php
 $ids=[];
// add to favorites
    if(isset($_GET["add_favorite"])){
        // echo $user_id;
        $bio_id =  $_GET["add_favorite"];
        $find_favorites = $conn->query("SELECT biodata_id FROM favorites WHERE user_id='$user_id' AND biodata_id='$bio_id'");
        if($find_favorites->rowCount()>0){
            $show_alert = "Already Added";
        }else{
        $add_favorites = $conn->query("INSERT INTO favorites(user_id, biodata_id) VALUES ('$user_id', '$bio_id')");
        if($add_favorites){
            $show_alert = "Added to favorites";
        }else{
            $show_alert = "Something went wrong";
        } 
        }
    };

    // get from favorites
        $get_favorites_ids = $conn->query("SELECT biodata_id FROM favorites WHERE user_id='$user_id'");
        $favorites_ids = $get_favorites_ids->fetchAll();
        $all_favorites_biodata=[];
        if(count($favorites_ids) >0){
        $ids = array_column($favorites_ids, 'biodata_id');
        $id_list = implode(",", $ids); 

        $get_all_favorites_biodata = $conn->query("SELECT id,full_name, gender, marital_status, dob, age, height, weight, skin_color, education, profession, monthly_income, fathers_name, fathers_occupation, mothers_name, mothers_occupation, siblings,  present_address, district, preferred_age, preferred_height, preferred_education, preferred_profession, profile_picture, about, other_img_one, other_img_two, other_img_three, status FROM biodatas WHERE id IN ($id_list)");

        $all_favorites_biodata = $get_all_favorites_biodata->fetchAll();            
        };

//remove from favorites
        if(isset($_GET["remove_favorite"])){
        $fav_id =  $_GET["remove_favorite"];
        $remove_favorites = $conn->query("DELETE FROM favorites WHERE biodata_id='$fav_id' AND user_id='$user_id'");
        if($remove_favorites){
            $show_alert = "Removed from favorites";
        }else{
            $show_alert = "Something went wrong";
        } 
    };


?>