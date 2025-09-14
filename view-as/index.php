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
                     <div class="filter">  <h2>View As</h2></div>
                    <div class="viewAs-container">
  <div class="viewAs-card">
    <h2>View Profile As</h2>
    <p class="subtitle">See how your profile looks to others</p>

    <!-- Tabs -->
    <div class="viewAs-tabs">
      <button class="active">As Member</button>
    </div>

    <!-- Profile Preview -->
    <div class="profile-preview">
      <div class="profile-photo">
        <img src="https://plus.unsplash.com/premium_photo-1672239496290-5061cfee7ebb?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWVufGVufDB8fDB8fHww" alt="Profile Photo">
      </div>
      <div class="profile-info">
        <h3>John Doe  <span class="status" style="color: var(---secondaryColor);"><i class="fa-regular fa-circle-xmark"></i> Inactive</span></h3>
        
        <p><strong>Age:</strong> 26 years</p>
        <p><strong>Height:</strong> 5′ 8″</p>
        <p><strong>Profession:</strong> Software Engineer</p>
        <p><strong>Location:</strong> Dhaka, Bangladesh</p>
        <p><strong>About:</strong> I am a simple person looking for a suitable life partner. I value honesty and family.</p>
      </div>
    </div>

    <!-- Action -->
    <div class="viewAs-action">
      <a href="/ghotok-bd/biodata"><button class="edit-btn"><i class="fas fa-edit"></i> Edit Profile</button></a>
    </div>
  </div>
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
