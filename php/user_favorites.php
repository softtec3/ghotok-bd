<?php
// add to favorites
    if(isset($_GET["add_favorite"])){
        // echo $user_id;
        $bio_id =  $_GET["add_favorite"];
        $find_favorites = $conn->query("SELECT biodata_id FROM favorites WHERE user_id='$user_id' AND biodata_id='$bio_id'");
        if($find_favorites->rowCount()>0){
            echo "<script>
                alert('Already added');
            </script>";
        }else{
        $add_favorites = $conn->query("INSERT INTO favorites(user_id, biodata_id) VALUES ('$user_id', '$bio_id')");
        if($add_favorites){
            echo "
                <script>
                    alert('Added to favorites');
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Something went wrong');
                </script>
            ";
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

        $get_all_favorites_biodata = $conn->query("SELECT id,full_name, gender, marital_status, dob, age, height, weight, skin_color, education, profession, monthly_income, fathers_name, fathers_occupation, mothers_name, mothers_occupation, siblings,  present_address, district, preferred_age, preferred_height, preferred_education, preferred_profession, profile_picture, status FROM biodatas WHERE id IN ($id_list)");

        $all_favorites_biodata = $get_all_favorites_biodata->fetchAll();            
        };

//remove from favorites
        if(isset($_GET["remove_favorite"])){
        $fav_id =  $_GET["remove_favorite"];
        $remove_favorites = $conn->query("DELETE FROM favorites WHERE biodata_id='$fav_id' AND user_id='$user_id'");
        if($remove_favorites){
            echo "
                <script>
                    alert('Removed from favorites');
                    window.location.href = './home.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Something went wrong');
                </script>
            ";
        } 
    };


?>