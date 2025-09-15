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
                             <div class="notification-container">
  <h2>Notifications</h2>

  <div class="notification-card">
    <i class="fas fa-heart"></i>
    <div class="notification-text">
      <p><strong>Rahim Uddin</strong> has shown interest in your profile.</p>
      <span class="time">2 hours ago</span>
    </div>
  </div>

  <div class="notification-card">
    <i class="fas fa-star"></i>
    <div class="notification-text">
      <p><strong>Ayesha Khatun</strong> added you to favorites.</p>
      <span class="time">1 day ago</span>
    </div>
  </div>

  <div class="notification-card">
    <i class="fas fa-comment"></i>
    <div class="notification-text">
      <p><strong>Karim Hasan</strong> sent you a message.</p>
      <span class="time">3 days ago</span>
    </div>
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
