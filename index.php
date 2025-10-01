<?php
 include_once("./php/config.php");
 include_once("./php/get_only_five_bio.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FontAwesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./style.css">
    <title>Home</title>
</head>
<body>
    <div class="public-home">
    <?php include_once("./components/topbar.php")?>
  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to <span>Ghotok-BD</span></h1>
      <p>Your trusted ghotok-bd platform to find the perfect life partner.</p>
      <a href="./register.php" class="btn-primary">Register Now</a>
      <a href="./login.php" class="btn-secondary">Login</a>
    </div>
    <div class="overlay"></div>
  </section>

  <!-- About Section -->
  <section class="about">
    <h2>Why Choose Ghotok-BD?</h2>
    <p>
      We connect thousands of genuine brides and grooms across Bangladesh.
      With verified profiles, advanced search filters, and privacy-focused
      features, we make your partner search simple, secure, and effective.
    </p>
  </section>
<!-- Latest Uploaded Profiles Section -->
<section class="latest-profiles">
  <div class="container">
    <h2 class="section-title">Latest Uploaded Profiles</h2>
    <p class="section-subtitle">Discover newly added members</p>

    <div class="profiles-grid">
      <?php
        foreach($latest_five_bio as $latest_bio){
          $short_name = substr($latest_bio["full_name"],0,7);
          $img_url = "./uploads/" . $latest_bio["profile_picture"];
          echo "
        <div class='profile-card'>
        <img src='$img_url' alt='Profile'>
        <h3>{$short_name}...</h3>
        <p>{$latest_bio["age"]} yrs • {$latest_bio["profession"]}</p>
        <a href='./home.php' class='view-btn'>View Profile</a>
        </div>
          
          
          ";
        }
      ?>
    </div>
  </div>
</section>
<!-- Features Section -->
<section class="features">
  <h2>Our Features</h2>
  <div class="feature-list">
    <div class="feature">
      <i class="fas fa-user-shield"></i>
      <h3>Verified Profiles</h3>
      <p>We ensure genuine profiles through strict verification.</p>
    </div>
    <div class="feature">
      <i class="fas fa-search"></i>
      <h3>Advanced Search</h3>
      <p>Find your perfect match using filters like age, profession, and location.</p>
    </div>
    <div class="feature">
      <i class="fas fa-heart"></i>
      <h3>Personalized Matches</h3>
      <p>Our system recommends matches based on your preferences.</p>
    </div>
    <div class="feature">
      <i class="fas fa-lock"></i>
      <h3>Secure & Private</h3>
      <p>Your data and privacy are always protected with us.</p>
    </div>
  </div>
</section>


<!-- Testimonials / Success Stories -->
<section class="testimonials">
  <h2>Success Stories</h2>
  <div class="testimonial-list">
    <div class="testimonial">
      <img src="https://plus.unsplash.com/premium_photo-1711044546394-607a69c3654a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8bWFycmlnZSUyMGNvdXBsZXxlbnwwfDB8MHx8fDA%3D" alt="Couple Story 1" />
      <div class="testimonial-text">
        <p>"We met on Ghotok-BD and are now happily married. Thank you for bringing us together!"</p>
        <span>- Rahim & Fatema</span>
      </div>
    </div>
    <div class="testimonial">
      <img src="https://images.unsplash.com/photo-1690749180711-367cef00772f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fG1hcnJpZ2UlMjBjb3VwbGV8ZW58MHwwfDB8fHww" alt="Couple Story 2" />
      <div class="testimonial-text">
        <p>"Best ghotok-bd site with genuine profiles. Highly recommend!"</p>
        <span>- Shakib & Nabila</span>
      </div>
    </div>
  </div>
</section>

  <!-- Call to Action -->
  <section class="cta">
    <h2>Start Your Journey Today</h2>
    <p>Join thousands of people who found their life partners on Ghotok-BD.</p>
    <a href="./register.php" class="btn-primary" style="padding: 10px;border-radius:5px;">Create Free Account</a>
  </section>
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-about">
        <h3>Ghotok-BD</h3>
        <p>
          Ghotok-BD is Bangladesh’s trusted ghotok-bd platform helping brides and grooms
          connect with genuine life partners securely and confidently.
        </p>
      </div>
      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="./home.php">Home</a></li>
          <li><a href="./register.php">Register</a></li>
          <li><a href="./login.php">Login</a></li>
          <li><a href="./home.php">Rules & Regulations</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h4>Contact Us</h4>
        <p><i class="fas fa-envelope"></i> support@ghotokbd.com</p>
        <p><i class="fas fa-phone"></i> +8801318195591</p>
        <p><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2025 Ghotok-BD. All rights reserved.</p>
    </div>
  </footer>
</div>

</body>
</html>