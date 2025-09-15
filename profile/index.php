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
                     <div class="filter"><h2>Profile</h2></div>
<div class="status-select-container">
                       <div class="status-select">
  <label for="profileStatus">Profile Status</label>
  <select id="profileStatus" name="status">
    <option value="inactive">Inactive</option>
    <option value="active">Active</option>
    <option value="married">Got Married</option>
  </select>
</div>
</div>

<div class="person-details">
  
  <!-- Profile Header -->
  <div class="profile-header">
    <img src="https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?w=200&h=200&fit=crop" alt="Profile">
    <div class="profile-basic">
      <h2>John Flekh <span class="id">ID: XHF476GF34R</span></h2>
      <p><i class="fas fa-circle" style="color: red;"></i> Inactive</p>
      <p><i class="fas fa-map-marker-alt"></i> Jashore, Khulna, Bangladesh</p>
    </div>
  </div>

  <!-- Quick Intro -->
  <div class="info-section">
    <h3><i class="fas fa-id-card"></i> Overview</h3>
    <p>Name: John Flekh, Age: 26 Years</p>
    <p>Education: Bachelor | Profession: Businessman</p>
    <p>Height: 5ft 8in | Skin Color: Bright</p>
    <p><strong>A Few Lines About John:</strong> .............</p>
  </div>

  <!-- Basic Details -->
  <div class="info-section">
    <h3><i class="fas fa-user"></i> Basic Details</h3>
    <ul>
      <li><strong>Profile For:</strong> Self</li>
      <li><strong>Full Name:</strong> John Flekh</li>
      <li><strong>Age:</strong> 24 Years</li>
      <li><strong>Height:</strong> 5ft 8in</li>
      <li><strong>Gender:</strong> Male</li>
      <li><strong>Marital Status:</strong> Unmarried</li>
      <li><strong>Mother Tongue:</strong> English</li>
      <li><strong>Blood Group:</strong> B+</li>
      <li><strong>Religion:</strong> Islam</li>
    </ul>
  </div>

  <!-- Contact Details -->
  <div class="info-section">
    <h3><i class="fas fa-phone"></i> Contact Details</h3>
    <ul>
      <li><strong>Phone:</strong> +8801300000000</li>
      <li><strong>Email:</strong> xzy@contact.com</li>
      <li><strong>Address:</strong> 50 Washington Square S, New York, NY 10012, USA</li>
    </ul>
  </div>

  <!-- Professional Information -->
  <div class="info-section">
    <h3><i class="fas fa-briefcase"></i> Professional Information</h3>
    <ul>
      <li><strong>Education:</strong> Bachelor</li>
      <li><strong>Profession:</strong> Teacher</li>
      <li><strong>Employment:</strong> Private Sector</li>
      <li><strong>Annual Income:</strong> 200000/=</li>
    </ul>
  </div>

  <!-- Lifestyle -->
  <div class="info-section">
    <h3><i class="fas fa-leaf"></i> Lifestyle</h3>
    <ul>
      <li><strong>Eating Habits:</strong> —</li>
      <li><strong>Drinking Habits:</strong> —</li>
      <li><strong>Smoking Habits:</strong> —</li>
    </ul>
  </div>

  <!-- Location -->
  <div class="info-section">
    <h3><i class="fas fa-map"></i> Location</h3>
    <ul>
      <li><strong>City:</strong> Jashore</li>
      <li><strong>State:</strong> Khulna</li>
      <li><strong>Country:</strong> Bangladesh</li>
      <li><strong>Nationality:</strong> Bangladeshi</li>
    </ul>
  </div>

  <!-- Family Details -->
  <div class="info-section">
    <h3><i class="fas fa-users"></i> Family Details</h3>
    <ul>
      <li><strong>No. of Brothers:</strong> —</li>
      <li><strong>No. of Sisters:</strong> —</li>
      <li><strong>Father’s Profession:</strong> —</li>
      <li><strong>Mother’s Profession:</strong> —</li>
      <li><strong>Family Origin:</strong> —</li>
    </ul>
  </div>

  <!-- Interests & Hobbies -->
  <div class="info-section">
    <h3><i class="fas fa-heart"></i> Interests & Hobbies</h3>
    <ul>
      <li>Interest 1</li>
      <li>Interest 2</li>
      <li>Hobby 1</li>
      <li>Hobby 2</li>
    </ul>
  </div>
  <!-- Action Buttons -->
  <div class="actions">
    <a href="/ghotok-bd/biodata" class="btn primary"><i class="fas fa-user-edit"></i> Update Bio-data</a>
  </div>

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
