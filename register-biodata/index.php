<!DOCTYPE html>
<html lang="en">
<?php include_once("../components/head.php")?>
<link rel="stylesheet" href="../style.css">
<body>
    <div id="container">
        <!-- Advertise Container 01 -->
        <?php include_once("../components/advertisement1.php")?>
        <!-- Main -->
        <div id="main">
            <!-- Top Bar -->
             <?php include_once("../components/topbar.php")?>
             <!-- Top Main Bar -->
              <?php include_once("../components/topbarmain.php")?>
            <!-- Main part -->
             <div id="mainPart">
                <!-- Side bar -->
                 <?php include_once("../components/sidebar.php")?>
                 <!-- Main Content - changeable -->
                  <div id="mainContent">
                    <!-- <?php include_once("../components/filter.php")?> -->
                <div class="registerBiodataContainer">
  <h2>Register Bio-data</h2>
  <form class="registerForm" action="" method="post" enctype="multipart/form-data">
    
    <!-- Personal Information -->
    <fieldset>
      <legend>Personal Information</legend>
      <label>Full Name</label>
      <input type="text" name="full_name" required>

      <label>Gender</label>
      <select name="gender" required>
        <option value="">-- Select --</option>
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>

      <label>Date of Birth</label>
      <input type="date" name="dob" required>

      <label>Age</label>
      <input type="number" name="age" min="18" required>

      <label>Height</label>
      <input type="text" name="height" placeholder="e.g. 5′ 6″">

      <label>Weight</label>
      <input type="text" name="weight" placeholder="e.g. 60 KG">

      <label>Skin Color</label>
      <select name="skin_color">
        <option value="">-- Select --</option>
        <option>Fair</option>
        <option>Medium</option>
        <option>Dark</option>
      </select>
    </fieldset>

    <!-- Education & Profession -->
    <fieldset>
      <legend>Education & Profession</legend>
      <label>Education</label>
      <input type="text" name="education">

      <label>Profession</label>
      <input type="text" name="profession">

      <label>Monthly Income</label>
      <input type="text" name="income">
    </fieldset>

    <!-- Family Information -->
    <fieldset>
      <legend>Family Information</legend>
      <label>Father's Name</label>
      <input type="text" name="father_name">

      <label>Father's Occupation</label>
      <input type="text" name="father_occupation">

      <label>Mother's Name</label>
      <input type="text" name="mother_name">

      <label>Mother's Occupation</label>
      <input type="text" name="mother_occupation">

      <label>Siblings</label>
      <input type="text" name="siblings">
    </fieldset>

    <!-- Contact Information -->
<fieldset>
  <legend>Contact Information</legend>
  <label>Phone</label>
  <input type="tel" name="phone" required>

  <label>Email</label>
  <input type="email" name="email">

  <label>Present Address</label>
  <textarea name="present_address"></textarea>

  <label>Permanent Address</label>
  <textarea name="permanent_address"></textarea>

  <label>District</label>
  <select name="district" required>
    <option value="">-- Select District --</option>
    <option>Dhaka</option>
    <option>Chattogram</option>
    <option>Rajshahi</option>
    <option>Khulna</option>
    <option>Barishal</option>
    <option>Sylhet</option>
    <option>Rangpur</option>
    <option>Mymensingh</option>
  </select>
</fieldset>

    <!-- Partner Preferences -->
    <fieldset>
      <legend>Partner Preferences</legend>
      <label>Preferred Age</label>
      <input type="text" name="partner_age" placeholder="e.g. 22 - 30">

      <label>Preferred Height</label>
      <input type="text" name="partner_height">

      <label>Preferred Education</label>
      <input type="text" name="partner_education">

      <label>Preferred Profession</label>
      <input type="text" name="partner_profession">
    </fieldset>

    <!-- Profile Image -->
    <fieldset>
      <legend>Profile Picture</legend>
      <input type="file" name="profile_image" accept="image/*" required>
    </fieldset>

    <!-- Submit -->
    <button type="submit">Register</button>
  </form>
</div>
                  </div>
             </div>

        </div>
        <!-- Advertise Container 02 -->
        <?php include_once("../components/advertisement2.php")?>
    </div>
    <script src="./script.js"></script>
</body>
</html>
