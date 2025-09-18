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

                    <section class="buy-connects">
  <h2 class="section-title">Buy Connects</h2>
  <p class="section-sub">Choose a plan and unlock opportunities to connect with more profiles.</p>

  <div class="plans">
    <!-- Plan 1 -->
    <div class="plan-card">
      <h3>Basic</h3>
      <p class="price">৳300</p>
      <ul>
        <li><i class="fas fa-check-circle"></i> 10 Connects</li>
        <li><i class="fas fa-check-circle"></i> Valid for 1 Month</li>
        <li><i class="fas fa-check-circle"></i> Standard Support</li>
      </ul>
      <button class="plan-btn">Buy Now</button>
    </div>

    <!-- Plan 2 (Highlighted with Badge) -->
    <div class="plan-card featured">
      <span class="badge">Most Popular</span>
      <h3>Standard</h3>
      <p class="price">৳700</p>
      <ul>
        <li><i class="fas fa-check-circle"></i> 30 Connects</li>
        <li><i class="fas fa-check-circle"></i> Valid for 2 Months</li>
        <li><i class="fas fa-check-circle"></i> Priority Support</li>
      </ul>
      <button class="plan-btn">Buy Now</button>
    </div>

    <!-- Plan 3 -->
    <div class="plan-card">
      <h3>Premium</h3>
      <p class="price">৳1200</p>
      <ul>
        <li><i class="fas fa-check-circle"></i> 60 Connects</li>
        <li><i class="fas fa-check-circle"></i> Valid for 3 Months</li>
        <li><i class="fas fa-check-circle"></i> Premium Support</li>
      </ul>
      <button class="plan-btn">Buy Now</button>
    </div>
  </div>
</section>

        
                  </div>
             </div>

        </div>
        <!-- Advertise Container 02 -->
        <?php include_once("../components/advertisement2.php")?>
    </div>
    <script src="../script.js"></script>
</body>
</html>
