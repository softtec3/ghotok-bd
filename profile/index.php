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
                <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profile</title>
  <style>
    :root {
      --primaryColor: #ff4d6d;
      --background: linear-gradient(135deg, #ff4d6d, #ff7eb3);
      --textDark: #333;
      --textLight: #666;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
    }

    .profileFormContainer {
      width: 850px;
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    h2 {
      background: var(--background);
      color: white;
      padding: 10px 15px;
      border-radius: 6px;
      margin-top: 30px;
      font-size: 18px;
    }

    form {
      margin-top: 15px;
    }

    .formGroup {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }

    .formGroup .field {
      flex: 1;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: var(--textDark);
      font-size: 14px;
    }

    input, select, textarea {
      width: 100%;
      padding: 8px 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
    }

    .formActions {
      margin-top: 25px;
      text-align: right;
    }

    .saveBtn {
      background: var(--background);
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      font-size: 15px;
    }

    .saveBtn:hover {
      opacity: 0.9;
    }

    .imageUpload {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .imageUpload img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid var(--primaryColor);
    }
  </style>
</head>
<body>

  <div class="profileFormContainer">
    <h1>Update Profile</h1>

    <form method="post" enctype="multipart/form-data">
      <!-- Profile Image -->
      <h2>Profile Image</h2>
      <div class="formGroup imageUpload">
        <img src="https://via.placeholder.com/100" alt="Profile Preview" id="profilePreview">
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
