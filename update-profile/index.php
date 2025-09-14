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
  <div class="profileFormContainer">
    <h1>Update Profile</h1>

    <form method="post" enctype="multipart/form-data">
      <!-- Profile Image -->
      <h2>Profile Image</h2>
      <div class="formGroup imageUpload">
        <img src="https://t3.ftcdn.net/jpg/16/61/92/32/240_F_1661923250_h0g40UhSqtK1pQSbj3m28EclaMh92gnM.jpg" alt="Profile Preview" id="profilePreview">
        <div class="field">
          <label>Upload Image</label>
          <input type="file" name="profileImage" accept="image/*" onchange="previewImage(event)">
        </div>
      </div>

      <!-- Personal Info -->
      <h2>Personal Information</h2>
      <div class="formGroup">
        <div class="field">
          <label>Full Name</label>
          <input type="text" name="fullName">
        </div>
        <div class="field">
          <label>Gender</label>
          <select name="gender">
            <option value="">Select</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
      </div>
      <div class="formGroup">
        <div class="field">
          <label>Date of Birth</label>
          <input type="date" name="dob">
        </div>
        <div class="field">
          <label>Age</label>
          <input type="number" name="age">
        </div>
      </div>
      <div class="formGroup">
        <div class="field">
          <label>Height</label>
          <input type="text" name="height">
        </div>
        <div class="field">
          <label>Weight</label>
          <input type="text" name="weight">
        </div>
      </div>
      <div class="formGroup">
        <div class="field">
          <label>Skin Color</label>
          <select name="skinColor">
            <option value="">Select</option>
            <option>Fair</option>
            <option>Medium</option>
            <option>Dark</option>
          </select>
        </div>
        <div class="field">
          <label>Blood Group</label>
          <input type="text" name="bloodGroup">
        </div>
      </div>

      <!-- Education & Profession -->
      <h2>Education & Profession</h2>
      <div class="formGroup">
        <div class="field">
          <label>Education</label>
          <input type="text" name="education">
        </div>
        <div class="field">
          <label>Occupation</label>
          <input type="text" name="occupation">
        </div>
      </div>
      <div class="formGroup">
        <div class="field">
          <label>Monthly Income</label>
          <input type="text" name="income">
        </div>
      </div>

      <!-- Family Info -->
      <h2>Family Information</h2>
      <div class="formGroup">
        <div class="field">
          <label>Father’s Name</label>
          <input type="text" name="fatherName">
        </div>
        <div class="field">
          <label>Mother’s Name</label>
          <input type="text" name="motherName">
        </div>
      </div>
      <div class="formGroup">
        <div class="field">
          <label>No. of Siblings</label>
          <input type="text" name="siblings">
        </div>
      </div>

      <!-- Contact Info -->
      <h2>Contact Information</h2>
      <div class="formGroup">
        <div class="field">
          <label>Phone</label>
          <input type="text" name="phone">
        </div>
        <div class="field">
          <label>Email</label>
          <input type="email" name="email">
        </div>
      </div>
      <div class="formGroup">
        <div class="field">
          <label>Present Address</label>
          <textarea rows="2" name="presentAddress"></textarea>
        </div>
      </div>
      <div class="formGroup">
        <div class="field">
          <label>Permanent Address</label>
          <textarea rows="2" name="permanentAddress"></textarea>
        </div>
      </div>

      <!-- Others -->
      <h2>Other Information</h2>
      <div class="formGroup">
        <div class="field">
          <label>Hobbies</label>
          <textarea rows="2" name="hobbies"></textarea>
        </div>
      </div>
      <div class="formGroup">
        <div class="field">
          <label>Expectations</label>
          <textarea rows="3" name="expectations"></textarea>
        </div>
      </div>

      <!-- Save Button -->
      <div class="formActions">
        <button type="submit" class="saveBtn">Save Changes</button>
      </div>
    </form>
  </div>
   </div>
   </div>
    </div>
        <!-- Advertise Container 02 -->
        <?php include_once("../components/advertisement2.php")?>
    </div>
    <script src="../script.js"></script>
</body>
</html>
