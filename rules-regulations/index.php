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
                               <div class="rules-container">
  <h1>Rules & Regulations</h1>
  <div class="rules-content">
    <ol>
      <li>All members must provide accurate personal details during registration.</li>
      <li>Respectful communication is mandatory across the platform.</li>
      <li>Sharing false or offensive content is strictly prohibited.</li>
      <li>Profile images must be genuine and decent.</li>
      <li>The administration reserves the right to remove any user violating the rules.</li>
    </ol>
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
