<?php
  session_start();
  include_once("./php/config.php");
    if (!isset($_SESSION["user_id"])) {
        header("Location: ./login.php");
        exit();
    };
  // alert
  $show_alert;
  if(isset($_POST["closeAlert"])){
    $show_alert = NULL;
  }
  
  include_once("./php/user_biodata.php");
  include_once("./php/logged_user_details.php");
  include_once("./php/all_biodata.php");
  include_once("./php/user_favorites.php");
  include_once("./php/user_interested.php");
  include_once("./php/single_biodata_details.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <!-- FontAwesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
      rel="stylesheet"
    />
    <title>Ghotok BD</title>
  </head>
  <body>
    <div id="container">

      <!-- Advertise Container 01 -->
      <?php include_once("./components/advertisement1.php")?>
      <!-- Main -->
      <div id="main">
        <!-- Top Bar -->
        <?php include_once("./components/topbar.php")?>
        <!-- Top Main Bar -->
        <?php include_once("./components/topbarmain.php")?>
        <!-- Main part -->
        <div id="mainPart">
          <!-- Side bar -->
          <?php include_once("./components/sidebar.php")?>
          <!-- Main Content - changeable -->
          <div id="mainContent">
            <!-- Home Section -->
            <!-- all bio-data profiles -->
            <div id="homeSection">
              <?php include_once("./components/filter.php")?>
              <div class="mainContent">
                <!-- fetching all bio-data from database -->
                 <?php
                    if(count($all_biodata)>0){
                      foreach($all_biodata as $biodata){
                      $short_name = substr($biodata['full_name'], 0, 5);
                      $short_profession = substr($biodata['profession'], 0, 5);
                      $biodata_json = json_encode($biodata);
                      $added_fav = in_array($biodata["id"], $ids) ? "Added":"Favorite";
                      $added_interested = in_array($biodata["id"], $int_ids) ? "Interested":"Interest";
                     echo "
              <form action='' method='get' style='margin-top:0;' class='sideBarProfile'>
                  <a href='./home.php?details_id={$biodata["id"]}'><img
                      src='./uploads/{$biodata['profile_picture']}'
                      alt='profile image'
                  /></a>
                  <div class='description'>
                    <table>
                      <tr>
                        <td>NAME:</td>
                        <td>$short_name ..</td>
                      </tr>
                      <tr>
                        <td>AGE:</td>
                        <td>{$biodata['age']} years</td>
                      </tr>
                      <tr>
                        <td>HEIGHT:</td>
                        <td>{$biodata['height']}</td>
                      </tr>
                      <tr>
                        <td>PROFESSION:</td>
                        <td>$short_profession ..</td>
                      </tr>
                      <tr>
                        <td>SKIN COLOR:</td>
                        <td>{$biodata['skin_color']}</td>
                      </tr>
                      <tr>
                        <td>WEIGHT:</td>
                        <td>{$biodata['weight']} KG</td>
                      </tr>
                    </table>
                  </div>
                  <div class='actionButtons'>
                    <button type='submit' value='{$biodata["id"]}' name='add_favorite'>$added_fav</button>
                    <button type='submit' value='{$biodata["id"]}' name='add_interested'>$added_interested</button>
                  </div>
                </form>
                     ";
                    };
                    }else{
                      echo "<p>No result found</p>";
                    }
                 ?>
              </div>
            </div>
            <!-- Profile section -->
            <div id="profileSection" style="display: none">
            

              <div class="person-details">
                <!-- Profile Header -->
                <div class="profile-header">
                  <img
                    src="<?php echo  "./uploads/".$logged_user_bio_details['profile_picture']?>"
                    alt="Profile"
                  />
                  <div class="profile-basic">
                    <h2><?php echo $logged_user_bio_details["full_name"]?> <span class="id">ID: <?php echo $logged_user_bio_details["id"]?></span></h2>
                    <p>
                      <i class="fas fa-map-marker-alt"></i> <?php echo $logged_user_bio_details["present_address"]?>
                    </p>
                  </div>
                  <!-- Action Buttons -->
                <form action='' method='get' class="actions">

                  <button style="display: <?php 
                    if($logged_user_bio_details['status'] == "active"){
                      echo "block";
                    }else{
                      echo "none";
                    }
                  ?>;"> 
                  <?php 
                      if($logged_user_bio_details['status'] == "inactive"){
                        echo "Active";
                      }else{
                        echo "Inactive";
                      }
                ?></button>
                </form>
                </div>
                
                <div class="personDetailsLowerContainer">
                <div class="pdlcleft">
                
                <div class="personImageGallery">
                  <div class="pigMain">
                    <img id="mainImageProfile" src="<?php echo  "./uploads/".$logged_user_bio_details['profile_picture']?>" alt="main image">
                    <span id="zoomInBtnProfile" class="zoomInBtn"><i class="fa-solid fa-maximize"></i></span>

                    <div id="zoomImageContainerProfile" class="zoomImageContainer">
                      <span id="zicCloseProfile" class="zicClose"><i class="fa-solid fa-xmark"></i></span>
                        <div class="zoomImageContent">
                        <div class="zicMain">
                        <img id="profileSubMain" src="<?php echo  "./uploads/".$logged_user_bio_details['profile_picture']?>" alt="main image">
                      </div>
                      <div class="zicSub">
                        <img onclick="handleProfileImgZoom(this)" src="<?php echo  "./uploads/".$logged_user_bio_details['profile_picture']?>" alt="subImage">
                        <?php 
                        if (!empty($logged_user_bio_details['other_img_one'])) {
                            $imgPath = "./uploads/" . $logged_user_bio_details['other_img_one'];
                            echo "<img onclick='handleProfileImgZoom(this)' src='{$imgPath}' alt='subImage'>";
                        }
                        ?>
                        <?php 
                        if (!empty($logged_user_bio_details['other_img_two'])) {
                            $imgPath = "./uploads/" . $logged_user_bio_details['other_img_two'];
                            echo "<img onclick='handleProfileImgZoom(this)' src='{$imgPath}' alt='subImage'>";
                        }
                        ?>
                        <?php 
                        if (!empty($logged_user_bio_details['other_img_three'])) {
                            $imgPath = "./uploads/" . $logged_user_bio_details['other_img_three'];
                            echo "<img onclick='handleProfileImgZoom(this)' src='{$imgPath}' alt='subImage'>";
                        }
                        ?>
                                  
                      </div>
                        </div>
                    </div>
                  </div>
                  <div class="pigsub">
                    <img onclick="handleProfileImg(this)" src="<?php echo  "./uploads/".$logged_user_bio_details['profile_picture']?>" alt="subImage">
                    <?php 
                    if (!empty($logged_user_bio_details['other_img_one'])) {
                        $imgPath = "./uploads/" . $logged_user_bio_details['other_img_one'];
                        echo "<img onclick='handleProfileImg(this)' src='{$imgPath}' alt='subImage'>";
                    }
                    ?>
                    <?php 
                    if (!empty($logged_user_bio_details['other_img_two'])) {
                        $imgPath = "./uploads/" . $logged_user_bio_details['other_img_two'];
                        echo "<img onclick='handleProfileImg(this)' src='{$imgPath}' alt='subImage'>";
                    }
                    ?>
                    <?php 
                    if (!empty($logged_user_bio_details['other_img_three'])) {
                        $imgPath = "./uploads/" . $logged_user_bio_details['other_img_three'];
                        echo "<img onclick='handleProfileImg(this)' src='{$imgPath}' alt='subImage'>";
                    }
                    ?>

                  </div>
                </div>

                <!-- Basic Details -->
                <div class="info-section">
                  <h3><i class="fas fa-user"></i> Basic Details</h3>
                  <ul>
                    <li><strong>Full Name:</strong> <?php echo $logged_user_bio_details["full_name"]?></li>
                    <li><strong>Age:</strong> <?php echo $logged_user_bio_details["age"]?> Years</li>
                    <li><strong>Height:</strong> <?php echo $logged_user_bio_details["height"]?></li>
                    <li><strong>Gender:</strong> <?php echo $logged_user_bio_details["gender"]?></li>
                    <li><strong>Marital Status:</strong> <?php echo $logged_user_bio_details["marital_status"]?></li>
                  </ul>
                </div>



                <!-- Professional Information -->
                <div class="info-section">
                  <h3>
                    <i class="fas fa-briefcase"></i> Professional Information
                  </h3>
                  <ul>
                    <li><strong>Education:</strong> <?php echo $logged_user_bio_details["education"]?></li>
                    <li><strong>Profession:</strong> <?php echo $logged_user_bio_details["profession"]?></li>
                    <li><strong>Monthly Income:</strong> <?php echo $logged_user_bio_details["monthly_income"]?>/=</li>
                  </ul>
                </div>


                <!-- Family Details -->
                <div class="info-section">
                  <h3><i class="fas fa-users"></i> Family Details</h3>
                  <ul>
                    <li><strong>Siblings:</strong> — <?php echo $logged_user_bio_details["siblings"]?></li>
                  </ul>
                </div>
                <!-- Quick Intro -->
                <div class="info-section">
                  <h3><i class="fas fa-id-card"></i> Overview</h3>
                  <p>Name: <?php echo $logged_user_bio_details["full_name"]?>, Age: <?php echo $logged_user_bio_details["age"]?> Years</p>
                  <p>Education: <?php echo $logged_user_bio_details["education"]?> | Profession: <?php echo $logged_user_bio_details["profession"]?></p>
                  <p>Height: <?php echo $logged_user_bio_details["height"]?> | Skin Color: <?php echo $logged_user_bio_details["skin_color"]?></p>
                  <p><strong>A Few Lines About <?php echo $logged_user_bio_details["full_name"]?>:</strong> <?php echo $logged_user_bio_details['about']??""?></p>
                </div>

                </div>
                <div class="pdlcright">
                                  <!-- Contact Details -->
                <div class="info-section">
                  <h3><i class="fas fa-phone"></i> Contact Details</h3>
                  <ul>
                    <li><strong>Phone:</strong> <?php 
                      if(isset($logged_user_bio_details["phone"])){
                        echo $logged_user_bio_details["phone"];
                      }else{
                        echo "Sent interest to see";
                      }
                    
                    ?></li>
                    <li><strong>Email:</strong> <?php 
                      if(isset($logged_user_bio_details["email"])){
                        echo $logged_user_bio_details["email"];
                      }else{
                        echo "Sent interest to see";
                      }
                    
                    ?></li>
                    <li>
                      <strong>Address:</strong> <?php echo $logged_user_bio_details["present_address"]?>
                    </li>
                  </ul>
                </div>
                <div class="info-section warning">
                  <p>⚠️ Please verify profiles carefully—never share sensitive information; we are not responsible for any misuse or false representation.</p>
                </div>
                <div class="advertiseSection">
                  <img src="" alt="advertisement">
                </div>
                
                
                </div>
                </div>
              </div>
            </div>

            <!-- Update bio-data section -->
            <div id="updateBio-dataSection" style="display: none">
              <div class="registerBiodataContainer">
                <h2>Update Bio-data</h2>
                <form
                  class="registerForm"
                  action=""
                  method="post"
                  enctype="multipart/form-data"
                >
                  <!-- Personal Information -->
                  <fieldset>
                    <legend>Personal Information</legend>
                    <label>Full Name</label>
                    <input type="text" name="full_name" required value="<?php echo $logged_user_bio_details['full_name']?>"/>

                    <label>Gender</label>
                    <select name="gender" required >
                      <option style="display: none;" value="">-- Select --</option>
                      <option value="male" <?php if($logged_user_bio_details['gender'] == 'male') echo 'selected'; ?>>Male</option>
                        <option value="female" <?php if($logged_user_bio_details['gender'] == 'female') echo 'selected'; ?>>Female</option>
                    </select>
                    <label>Marital Status</label>
                    <select name="marital_status" required>
                      <option style="display: none;" value="">-- Select --</option>
                      <option value="married" <?php if($logged_user_bio_details['marital_status'] == 'married') echo 'selected';?>>Married</option>
                      <option value="unmarried" <?php if($logged_user_bio_details['marital_status'] == 'unmarried') echo 'selected';?>>Unmarried</option>
                    </select>

                    <label>Date of Birth</label>
                    <input type="date" name="dob" required value="<?php echo $logged_user_bio_details['dob']?>"/>

                    <label>Age</label>
                    <input type="number" name="age" min="18" required value="<?php echo $logged_user_bio_details['age']?>"/>

                    <label>Height</label>
                    <input type="number" name="height" step="any" placeholder="e.g. 5′ 6″" required value="<?php echo $logged_user_bio_details['height']?>"/>

                    <label>Weight</label>
                    <input type="number" name="weight" placeholder="e.g. 60 KG" required value="<?php echo $logged_user_bio_details['weight']?>"/>

                    <label>Skin Color</label>
                    <select name="skin_color" required>
                      <option style="display: none;" value="">-- Select --</option>
                      <option value="fair" <?php if($logged_user_bio_details['skin_color'] == 'fair') echo 'selected';?>>Fair</option>
                      <option value="medium" <?php if($logged_user_bio_details['skin_color'] == 'medium') echo 'selected';?>>Medium</option>
                      <option value="dark" <?php if($logged_user_bio_details['skin_color'] == 'dark') echo 'selected';?>>Dark</option>
                    </select>
                    <label for="about">About</label>
                    <textarea name="about" required style="height: 150px;"><?php echo $logged_user_bio_details['about']?></textarea>
                  </fieldset>

                  <!-- Education & Profession -->
                  <fieldset>
                    <legend>Education & Profession</legend>
                    <label>Education</label>
                    <input type="text" name="education" required value="<?php echo $logged_user_bio_details['education']?>"/>

                    <label>Profession</label>
                    <input type="text" name="profession" required value="<?php echo $logged_user_bio_details['profession']?>"/>

                    <label>Monthly Income</label>
                    <input type="text" name="monthly_income" required value="<?php echo $logged_user_bio_details['monthly_income']?>"/>
                  </fieldset>

                  <!-- Family Information -->
                  <fieldset>
                    <legend>Family Information</legend>
                  <div class="formFlex">
                    <div>
                      <label>Father's Name</label>
                    <input type="text" name="fathers_name" required value="<?php echo $logged_user_bio_details['fathers_name']?>"/>
                  </div>

                  <div>
                    <label>Father's Status</label>
                    <select name="fathers_status" required>
                      <option style="display: none;" value="">-- Select --</option>
                      <option value="alive" <?php if($logged_user_bio_details['fathers_status'] == 'alive') echo 'selected';?>>Alive</option>
                      <option value="deceased" <?php if($logged_user_bio_details['fathers_status'] == 'deceased') echo 'selected';?>>Deceased</option>
                    </select> 
                  </div>
                </div>

                    <label>Father's Occupation</label>
                    <input type="text" name="fathers_occupation" required value="<?php echo $logged_user_bio_details['fathers_occupation']?>"/>
                    
                    <div class="formFlex">
                    <div>
                      <label>Mother's Name</label>
                    <input type="text" name="mothers_name" required value="<?php echo $logged_user_bio_details['mothers_name']?>"/>
                    </div>

                    <div>
                      <label>Mother's Status</label>
                    <select name="mothers_status" required>
                      <option style="display: none;" value="">-- Select --</option>
                      <option value="alive" <?php if($logged_user_bio_details['mothers_status'] == 'alive') echo 'selected';?>>Alive</option>
                      <option value="deceased" <?php if($logged_user_bio_details['mothers_status'] == 'deceased') echo 'selected';?>>Deceased</option>
                     
                    </select>
                    </div>
                  </div>
                    <label>Mother's Occupation</label>
                    <input type="text" name="mothers_occupation" required value="<?php echo $logged_user_bio_details['mothers_occupation']?>"/>

                    <label>Siblings</label>
                    <input type="number" name="siblings" required value="<?php echo $logged_user_bio_details['siblings']?>"/>

                    <label>Position Among Siblings</label>
                    <input type="number" name="child_order" required value="<?php echo $logged_user_bio_details['child_order'] ?? ""?>"/>
                  </fieldset>

                  <!-- Contact Information -->
                  <fieldset>
                    <legend>Contact Information</legend>
                    <label>Phone</label>
                    <input type="tel" name="phone" required value="<?php echo $logged_user_bio_details['phone']?>"/>

                    <label>Email</label>
                    <input type="email" name="email" required value="<?php echo $logged_user_bio_details['email']?>"/>

                    <label>Present Address</label>
                    <textarea name="present_address" required><?php echo $logged_user_bio_details['present_address'];?></textarea>

                    <label>District</label>
                    <input type="text" name="district" required value="<?php echo $logged_user_bio_details['district']?>"/>
                  </fieldset>

                  <!-- Partner Preferences -->
                  <fieldset>
                    <legend>Partner Preferences</legend>
                    <label>Preferred Age</label>
                    <input
                      type="number"
                      name="preferred_age"
                      placeholder="e.g. 22 - 30"
                      required
                      value="<?php echo $logged_user_bio_details['preferred_age']?>"
                    />

                    <label>Preferred Height</label>
                    <input type="number" step="any" name="preferred_height" required value="<?php echo $logged_user_bio_details['preferred_height']?>" />

                    <label>Preferred Education</label>
                    <input type="text" name="preferred_education"  required value="<?php echo $logged_user_bio_details['preferred_education']?>"/>

                    <label>Preferred Profession</label>
                    <input type="text" name="preferred_profession"  required value="<?php echo $logged_user_bio_details['preferred_profession']?>"/>
                  </fieldset>

                  <!-- Profile Image -->
                  <fieldset>
                    <legend>Images</legend>
                    <label for="profile_picture">Profile Picture</label>
                    <input
                      type="file"
                      name="profile_picture"
                      accept="image/*"
                   <?php 
                   if($logged_user_bio_details['profile_picture']){
                    echo "";
                   }else{
                    echo "required";
                   }
                   ?>
                    />
                    <label for="other_img_one">Other Image 1</label>
                      <input
                      type="file"
                      name="other_img_one"
                      accept="image/*"
                      />
                    <label for="other_img_two">Other Image 2</label>
                      <input
                      type="file"
                      name="other_img_two"
                      accept="image/*"
                      />
                    <label for="other_img_three">Other Image 3</label>
                      <input
                      type="file"
                      name="other_img_three"
                      accept="image/*"
                      />
                  </fieldset>

                  <!-- Submit -->
                  <button type="submit">Register</button>
                </form>
              </div>
            </div>

            <!-- Interested section -->
            <div id="interestedSection" style="display: none">
              <div class="filter"><h2>Interested</h2></div>
              <div class="mainContent">
                <!-- Favorite content -->
                   <!-- fetching all interested bio-data from database -->
                  <?php
                  if($all_interested_biodata && count($all_interested_biodata)>0){
                     foreach($all_interested_biodata as $biodata){
                      $short_name = substr($biodata['full_name'], 0, 8);
                      $short_profession = substr($biodata['profession'], 0, 5);
                      $biodata_json = json_encode($biodata);
                     echo "
              <form action='' method='get' style='margin-top:0;' class='sideBarProfile'>
               <span class='favoriteIcon' style='font-size: 22px'
                    ><i class='fas fa-handshake'></i
                  ></span>
                  <a href='./home.php?details_id={$biodata["id"]}' ><img
                      src='./uploads/{$biodata['profile_picture']}'
                      alt='profile image'
                  /></a>
                  <div class='description'>
                    <table>
                      <tr>
                        <td>NAME:</td>
                        <td>$short_name ..</td>
                      </tr>
                      <tr>
                        <td>AGE:</td>
                        <td>{$biodata['age']} years</td>
                      </tr>
                      <tr>
                        <td>HEIGHT:</td>
                        <td>{$biodata['height']}</td>
                      </tr>
                      <tr>
                        <td>PROFESSION:</td>
                        <td>$short_profession ..</td>
                      </tr>
                      <tr>
                        <td>SKIN COLOR:</td>
                        <td>{$biodata['skin_color']}</td>
                      </tr>
                      <tr>
                        <td>WEIGHT:</td>
                        <td>{$biodata['weight']} KG</td>
                      </tr>
                    </table>
                  </div>
                  <div class='actionButtons'>
                    <a href='./home.php?details_id={$biodata["id"]}' >View Details</a>
                  </div>
                </form>
                     ";
                    };
                  } else{
                    echo "<p>You have no interests</p>";
                  }
                 ?>

              </div>
            </div>

            <!-- Favorite Section -->
            <div id="favoriteSection" style="display: none">
              <div class="filter"><h2>Favorites</h2></div>
              <div class="mainContent">
                <!-- Favorite content -->
                <!-- Fetching all favorites bio-data from database -->
                  <?php
                  if($all_favorites_biodata && count($all_favorites_biodata)>0){
                     foreach($all_favorites_biodata as $biodata){
                      $short_name = substr($biodata['full_name'], 0, 8);
                      $short_profession = substr($biodata['profession'], 0, 5);
                      $biodata_json = json_encode($biodata);
                      $added_interested_already = in_array($biodata["id"], $int_ids) ? "Interested":"Interest";
                     echo "
              <form action='' method='get' style='margin-top:0;' class='sideBarProfile'>
               <span class='favoriteIcon'><i class='fas fa-heart'></i></span>
                  <a href='./home.php?details_id={$biodata["id"]}'><img
                      src='./uploads/{$biodata['profile_picture']}'
                      alt='profile image'
                  /></a>
                  <div class='description'>
                    <table>
                      <tr>
                        <td>NAME:</td>
                        <td>$short_name ..</td>
                      </tr>
                      <tr>
                        <td>AGE:</td>
                        <td>{$biodata['age']} years</td>
                      </tr>
                      <tr>
                        <td>HEIGHT:</td>
                        <td>{$biodata['height']}</td>
                      </tr>
                      <tr>
                        <td>PROFESSION:</td>
                        <td>$short_profession ..</td>
                      </tr>
                      <tr>
                        <td>SKIN COLOR:</td>
                        <td>{$biodata['skin_color']}</td>
                      </tr>
                      <tr>
                        <td>WEIGHT:</td>
                        <td>{$biodata['weight']} KG</td>
                      </tr>
                    </table>
                  </div>
                  <div class='actionButtons'>
                    <button type='submit' value='{$biodata["id"]}' name='remove_favorite'>UnFavorite</button>
                    <button type='submit' value='{$biodata["id"]}' name='add_interested' type='submit'>$added_interested_already</button>
                  </div>
                </form>
                     ";
                    };
                  }else{
                    echo "<p>You have no favorites</p>";
                  }
                 ?>

              </div>
            </div>

            <!-- View as section -->
            <div id="viewAsSection" style="display: none">
              <div class="filter"><h2>View As</h2></div>
              <div class="viewAs-container">
                <div class="viewAs-card">
                  <h2>View Profile As</h2>
                  <p class="subtitle">See how your profile looks to others</p>

                  <!-- Tabs -->
                  <!-- <div class="viewAs-tabs">
                    <button class="active">As Member</button>
                  </div> -->

                  <!-- Profile Preview -->
                  <div class="profile-preview">
                    <div class="profile-photo">
                      <img
                        src="<?php 
                              $url ="placeholder.jpg";
                                if($logged_user_bio_details["profile_picture"]){
                                  $url = "./uploads/". $logged_user_bio_details['profile_picture'];
                                };
                                  echo $url;
                                ?>"
                        alt="Profile Photo"
                      />
                    </div>
                    <div class="profile-info">
                      <h3>
                        <?php echo $logged_user_bio_details["full_name"]?>
                        <!-- <span
                          class="status"
                          style="color: var(---secondaryColor)"
                          ><i class="fa-regular fa-circle-xmark"></i>
                          <?php echo $logged_user_bio_details["status"]?></span
                        > -->
                      </h3>

                      <p><strong>Age:</strong> <?php echo $logged_user_bio_details["age"]?> years</p>
                      <p><strong>Height:</strong> <?php echo $logged_user_bio_details["height"]?></p>
                      <p><strong>Profession:</strong> <?php echo $logged_user_bio_details["profession"]?></p>
                      <p><strong>Location:</strong> <?php echo $logged_user_bio_details["present_address"]?></p>
                      <!-- <p>
                        <strong>About:</strong> I am a simple person looking for
                        a suitable life partner. I value honesty and family.
                      </p> -->
                    </div>
                  </div>

                  <!-- Action -->
                  <div class="viewAs-action">
                    <button onclick="handleShow('updateBio')" class="edit-btn">
                        <i class="fas fa-edit"></i> Edit Profile
                      </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Rules and regulation section -->
            <div id="rulesAndRegulationSection" style="display: none">
              <div class="rules-container">
                <h1>Rules & Regulations</h1>
                <div class="rules-content">
                  <ol>
                    <li>
                      All members must provide accurate personal details during
                      registration.
                    </li>
                    <li>
                      Respectful communication is mandatory across the platform.
                    </li>
                    <li>
                      Sharing false or offensive content is strictly prohibited.
                    </li>
                    <li>Profile images must be genuine and decent.</li>
                    <li>
                      The administration reserves the right to remove any user
                      violating the rules.
                    </li>
                  </ol>
                </div>
              </div>
            </div>

            <!-- Buy connects section -->
        <div id="buyConnectsSection" style="display: none">
          <section class="buy-connects">
            <h2 class="section-title">Buy Connects</h2>
            <p class="section-sub">
              Choose a plan and unlock opportunities to connect with more profiles.
            </p>

            <div class="plans">
              <!-- Plan 1 -->
              <div class="plan-card">
                <h3>Starter</h3>
                <p class="price">৳100</p>
                <ul>
                  <li><i class="fas fa-check-circle"></i> 1 Connect</li>
                  <li><i class="fas fa-check-circle"></i> Basic Support</li>
                </ul>
                <a href="#" class="plan-btn">Buy Now</a>
              </div>

              <!-- Plan 2 -->
              <div class="plan-card">
                <h3>Mini</h3>
                <p class="price">৳200</p>
                <ul>
                  <li><i class="fas fa-check-circle"></i> 3 Connects</li>
                  <li><i class="fas fa-check-circle"></i> Standard Support</li>
                </ul>
                <a href="#" class="plan-btn">Buy Now</a>
              </div>

              <!-- Plan 3 -->
              <div class="plan-card featured">
                <span class="badge">Most Popular</span>
                <h3>Basic</h3>
                <p class="price">৳300</p>
                <ul>
                  <li><i class="fas fa-check-circle"></i> 5 Connects</li>
                  <li><i class="fas fa-check-circle"></i> Priority Support</li>
                </ul>
                <a href="#" class="plan-btn">Buy Now</a>
              </div>

              <!-- Plan 4 -->
              <div class="plan-card">
                <h3>Pro</h3>
                <p class="price">৳500</p>
                <ul>
                  <li><i class="fas fa-check-circle"></i> 15 Connects</li>
                  <li><i class="fas fa-check-circle"></i> Pro Support</li>
                </ul>
                <a href="#" class="plan-btn">Buy Now</a>
              </div>

              <!-- Plan 5 -->
              <div class="plan-card">
                <h3>Premium</h3>
                <p class="price">৳1200</p>
                <ul>
                  <li><i class="fas fa-check-circle"></i> 120 Connects</li>
                  <li><i class="fas fa-check-circle"></i> Premium Support</li>
                </ul>
                <a href="#" class="plan-btn">Buy Now</a>
              </div>
            </div>
          </section>

            </div>

            <!-- notification section -->
            <div id="notificationSection" style="display: none">
              <div class="notification-container">
                <h2>Notifications</h2>
                <p>There is no notification</p>
                <!-- <div class="notification-card">
                  <i class="fas fa-heart"></i>
                  <div class="notification-text">
                    <p>
                      <strong>Rahim Uddin</strong> has shown interest in your
                      profile.
                    </p>
                    <span class="time">2 hours ago</span>
                  </div>
                </div>

                <div class="notification-card">
                  <i class="fas fa-star"></i>
                  <div class="notification-text">
                    <p>
                      <strong>Ayesha Khatun</strong> added you to favorites.
                    </p>
                    <span class="time">1 day ago</span>
                  </div>
                </div>

                <div class="notification-card">
                  <i class="fas fa-comment"></i>
                  <div class="notification-text">
                    <p><strong>Karim Hasan</strong> sent you a message.</p>
                    <span class="time">3 days ago</span>
                  </div>
                </div> -->
              </div>
            </div>

            <!-- Details section -->
            <div id="detailsSection" style="display: none">
                <div class="person-details">
                <!-- Profile Header -->
                <div class="profile-header">
                  <img
                    src="<?php echo  "./uploads/".$biodata_details['profile_picture']?>"
                    alt="Profile"
                  />
                  <div class="profile-basic">
                    <h2><?php echo $biodata_details["full_name"]?> <span class="id">ID: <?php echo $biodata_details["id"]?></span></h2>
                    <p>
                      <i class="fas fa-map-marker-alt"></i> <?php echo $biodata_details["present_address"]?>
                    </p>
                  </div>
                  <!-- Action Buttons -->
                <form action='' method='get' class="actions">

                  <button type='submit' value='<?php echo $biodata_details["id"]?>' name='add_favorite'>
                    <?php
                      $added_favo = in_array($biodata_details["id"], $ids) ? "Added":"Favorite";
                      echo $added_favo
                    ?>
                  </button>
                    <button type='submit' value='<?php echo $biodata_details["id"]?>' name='add_interested'> 
                      <?php
                       $added_interest = in_array($biodata_details["id"], $int_ids) ? "Interested":"Interest";
                      echo $added_interested;

                     
                    ?></button>
                </form>
                </div>
                
                <div class="personDetailsLowerContainer">
                <div class="pdlcleft">
                
                <div class="personImageGallery">
                  <div class="pigMain">
                    <img id="mainImageDetails" src="<?php echo  "./uploads/".$biodata_details['profile_picture']?>" alt="main image">
                    <span id="zoomInBtnDetails" class="zoomInBtn"><i class="fa-solid fa-maximize"></i></span>

                    <div id="zoomImageContainerDetails" class="zoomImageContainer">
                      <span id="zicCloseDetails" class="zicClose"><i class="fa-solid fa-xmark"></i></span>
                        <div class="zoomImageContent">
                        <div class="zicMain">
                        <img id="midSubMain" src="<?php echo  "./uploads/".$biodata_details['profile_picture']?>" alt="main image">
                      </div>
                      <div class="zicSub">
                        <img onclick="handleMid(this)" src="<?php echo  "./uploads/".$biodata_details['profile_picture']?>" alt="subImage">
                        <?php 
                        if (!empty($biodata_details['other_img_one'])) {
                            $imgPath = "./uploads/" . $biodata_details['other_img_one'];
                            echo "<img onclick='handleMid(this)' src='{$imgPath}' alt='subImage'>";
                        }
                        ?>
                        <?php 
                        if (!empty($biodata_details['other_img_two'])) {
                            $imgPath = "./uploads/" . $biodata_details['other_img_two'];
                            echo "<img onclick='handleMid(this)' src='{$imgPath}' alt='subImage'>";
                        }
                        ?>
                        <?php 
                        if (!empty($biodata_details['other_img_three'])) {
                            $imgPath = "./uploads/" . $biodata_details['other_img_three'];
                            echo "<img onclick='handleMid(this)' src='{$imgPath}' alt='subImage'>";
                        }
                        ?>
                                  
                      </div>
                        </div>
                    </div>
                  </div>
                  <div class="pigsub">
                    <img onclick="handleImage(this)" src="<?php echo  "./uploads/".$biodata_details['profile_picture']?>" alt="subImage">
                    <?php 
                    if (!empty($biodata_details['other_img_one'])) {
                        $imgPath = "./uploads/" . $biodata_details['other_img_one'];
                        echo "<img onclick='handleImage(this)' src='{$imgPath}' alt='subImage'>";
                    }
                    ?>
                    <?php 
                    if (!empty($biodata_details['other_img_two'])) {
                        $imgPath = "./uploads/" . $biodata_details['other_img_two'];
                        echo "<img onclick='handleImage(this)' src='{$imgPath}' alt='subImage'>";
                    }
                    ?>
                    <?php 
                    if (!empty($biodata_details['other_img_three'])) {
                        $imgPath = "./uploads/" . $biodata_details['other_img_three'];
                        echo "<img onclick='handleImage(this)' src='{$imgPath}' alt='subImage'>";
                    }
                    ?>

                  </div>
                </div>

                <!-- Basic Details -->
                <div class="info-section">
                  <h3><i class="fas fa-user"></i> Basic Details</h3>
                  <ul>
                    <li><strong>Full Name:</strong> <?php echo $biodata_details["full_name"]?></li>
                    <li><strong>Age:</strong> <?php echo $biodata_details["age"]?> Years</li>
                    <li><strong>Height:</strong> <?php echo $biodata_details["height"]?></li>
                    <li><strong>Gender:</strong> <?php echo $biodata_details["gender"]?></li>
                    <li><strong>Marital Status:</strong> <?php echo $biodata_details["marital_status"]?></li>
                  </ul>
                </div>



                <!-- Professional Information -->
                <div class="info-section">
                  <h3>
                    <i class="fas fa-briefcase"></i> Professional Information
                  </h3>
                  <ul>
                    <li><strong>Education:</strong> <?php echo $biodata_details["education"]?></li>
                    <li><strong>Profession:</strong> <?php echo $biodata_details["profession"]?></li>
                    <li><strong>Monthly Income:</strong> <?php echo $biodata_details["monthly_income"]?>/=</li>
                  </ul>
                </div>


                <!-- Family Details -->
                <div class="info-section">
                  <h3><i class="fas fa-users"></i> Family Details</h3>
                  <ul>
                    <li><strong>Siblings:</strong> — <?php echo $biodata_details["siblings"]?></li>
                  </ul>
                </div>
                <!-- Quick Intro -->
                <div class="info-section">
                  <h3><i class="fas fa-id-card"></i> Overview</h3>
                  <p>Name: <?php echo $biodata_details["full_name"]?>, Age: <?php echo $biodata_details["age"]?> Years</p>
                  <p>Education: <?php echo $biodata_details["education"]?> | Profession: <?php echo $biodata_details["profession"]?></p>
                  <p>Height: <?php echo $biodata_details["height"]?> | Skin Color: <?php echo $biodata_details["skin_color"]?></p>
                  <p><strong>A Few Lines About <?php echo $biodata_details["full_name"]?>:</strong> <?php echo $biodata_details['about']??""?></p>
                </div>

                </div>
                <div class="pdlcright">
                                  <!-- Contact Details -->
                <div class="info-section">
                  <h3><i class="fas fa-phone"></i> Contact Details</h3>
                  <ul>
                    <li><strong>Phone:</strong> <?php 
                      if(isset($biodata_details["phone"])){
                        echo $biodata_details["phone"];
                      }else{
                        echo "Sent interest to see";
                      }
                    
                    ?></li>
                    <li><strong>Email:</strong> <?php 
                      if(isset($biodata_details["email"])){
                        echo $biodata_details["email"];
                      }else{
                        echo "Sent interest to see";
                      }
                    
                    ?></li>
                    <li>
                      <strong>Address:</strong> <?php echo $biodata_details["present_address"]?>
                    </li>
                  </ul>
                </div>
                <div class="info-section warning">
                  <p>⚠️ Please verify profiles carefully—never share sensitive information; we are not responsible for any misuse or false representation.</p>
                </div>
                <div class="advertiseSection">
                  <img src="" alt="advertisement">
                </div>
                
                
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- alert -->
      <div id="alert" style="display: <?php if(!empty($show_alert)) echo 'flex';?>;">
        <div class="alertContent">
            <form action="">
                  <button type="submit" id="alertClose" name="closeAlert"><i class="fa-solid fa-xmark"></i></button>
           </form>         
          <p id="alertText">
            <?php echo $show_alert??"";?>
          </p>
          <form style="display: <?php
                $connect = (int) $logged_user_details["connects"];
                if($connect == 0){
                  if (strpos($show_alert, "connects") !== false) {
                    echo "flex";
                }
                }else{
                  echo "none";
                }
          ?>;" class="alertForm" action="" method="get">
            <a href="./home.php?buyConnects">Buy Connects</a>
            <a href="./home.php?bioId=">Pay for one <?php if(isset($_GET["add_interested"])) echo $_GET["add_interested"]?> </a>
          </form>
        </div>
      </div>
      <!-- Advertise Container 02 -->
      <?php include_once("./components/advertisement2.php")?>
    </div>
    <script src="./script.js"></script>
    <script src="./script2.js"></script>
  </body>
</html>
