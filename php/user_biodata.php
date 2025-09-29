<?php
    
// File upload function
// upload file and get name
  function upload_file_get_name($name){
   if($_FILES["$name"]){
    $path = "./uploads/".$_FILES["$name"]["name"];
    $file_name = $_FILES["$name"]["name"];
    move_uploaded_file($_FILES["$name"]["tmp_name"], $path);
    return $file_name;
  }else{
    echo "Something went Wrong";
  };
  };
  // Update bio-data
    $user_id = $_SESSION["user_id"];

    if(isset($_POST["full_name"])){
    $full_name = $_POST["full_name"];
    $gender = $_POST["gender"];
    $marital_status = $_POST["marital_status"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $skin_color = $_POST["skin_color"];
    $education = $_POST["education"];
    $profession = $_POST["profession"];
    $monthly_income = $_POST["monthly_income"];
    $fathers_name = $_POST["fathers_name"];
    $fathers_occupation = $_POST["fathers_occupation"];
    $mothers_name = $_POST["mothers_name"];
    $mothers_occupation = $_POST["mothers_occupation"];
    $siblings = $_POST["siblings"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $present_address = $_POST["present_address"];
    $district = $_POST["district"];
    $preferred_age = $_POST["preferred_age"];
    $preferred_height = $_POST["preferred_height"];
    $preferred_education = $_POST["preferred_education"];
    $preferred_profession = $_POST["preferred_profession"];
    $profile_picture = upload_file_get_name("profile_picture");
    $about = $_POST["about"];
    $other_img_one = upload_file_get_name("other_img_one");
    $other_img_two = upload_file_get_name("other_img_two");
    $other_img_three = upload_file_get_name("other_img_three");
    $child_order = $_POST["child_order"];
    $fathers_status = $_POST["fathers_status"];
    $mothers_status = $_POST["mothers_status"];

    $update_bio_sql = "UPDATE biodatas SET 
    full_name='$full_name',
    gender='$gender',
    marital_status='$marital_status',
    dob='$dob',
    age='$age',
    height='$height',
    weight='$weight',
    skin_color='$skin_color',
    education='$education',
    profession='$profession',
    monthly_income='$monthly_income',
    fathers_name='$fathers_name',
    fathers_status='$fathers_status',
    fathers_occupation='$fathers_occupation',
    mothers_name='$mothers_name',
    mothers_status='$mothers_status',
    mothers_occupation='$mothers_occupation',
    siblings='$siblings',
    child_order='$child_order',
    phone='$phone',
    email='$email',
    present_address='$present_address',
    district='$district',
    preferred_age='$preferred_age',
    preferred_height='$preferred_height',
    preferred_education='$preferred_education',
    preferred_profession='$preferred_profession',
    about='$about'";

    if (!empty($profile_picture)) {
    $update_bio_sql .= ", profile_picture='$profile_picture'";
    };
    if (!empty($other_img_one)) {
    $update_bio_sql .= ", other_img_one='$other_img_one'";
    };
    if (!empty($other_img_two)) {
    $update_bio_sql .= ", other_img_two='$other_img_two'";
    };
    if (!empty($other_img_three)) {
    $update_bio_sql .= ", other_img_three='$other_img_three'";
    };

    $update_bio_sql .= " WHERE user_id='$user_id'";

    $update_biodata = $conn->query($update_bio_sql);
    if($update_biodata){
        $show_alert = "Bio-data successfully updated";
    }else{
        $show_alert = "Something went wrong. Please try again later";
    }

    }else{
    //    
    };
    
?>