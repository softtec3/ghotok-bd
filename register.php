<?php
  session_start();
  include_once("./php/config.php");
  include_once("./php/user_registration.php");
        if (isset($_SESSION["user_id"])) {
        header("Location: ./home.php");
        exit();
        };
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- FontAwesome cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Ghotok BD</title>
</head>
<body>
  <div class="register-container">
  <div class="register-card">
    <p class="alertText" style="display: <?php if($checking){
       echo 'block';
    }else{
      echo "none";
    };?>;"><?php if(!empty($checking)) echo $checking;?><a href="./login.php" style="font-weight: bold; margin-left: 5px;">Login</a></p>
       <!-- Home Icon -->
      <a href="./index.php" class="home-icon"><i class="fas fa-home"></i></a>
    <h2>Create Your Account</h2>
    <form action="" method="POST">
      <!-- Email / Phone -->
      <div class="form-group">
        <label for="user_id">Email / Phone</label>
        <input type="text" id="email" name="user_id" placeholder="Enter your email or phone" required>
      </div>

      <!-- Password -->
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter a password" required>
      </div>

      <!-- Gender -->
      <div class="form-group">
        <label for="gender">Your Gender</label>
        <select id="gender" name="gender" required>
          <option style="display: none;" value="">Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>

      <!-- Looking For -->
      <div class="form-group">
        <label for="looking_for">Looking For</label>
        <select id="lookingFor" name="looking_for" required>
          <option style="display: none;" value="">Select preference</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>

      <!-- Who is Opening This Account -->
      <div class="form-group">
        <label for="role">Who is opening this account?</label>
        <select id="accountBy" name="role" required>
          <option style="display: none;" value="">Select option</option>
          <option value="ghotok">Ghotok</option>
          <option value="self">Self</option>
          <option value="parents">Parents</option>
          <option value="siblings">Siblings</option>
          <option value="relative">Relative</option>
          <option value="friend">Friend</option>
        </select>
      </div>
      <div class="form-group">
        <p style="font-weight: bold;">Security Questions</p>
      </div>

        <div class="form-group">
        <label for="security_ques_one">What is the name of your first school?</label>
        <input type="text" id="email" name="security_ques_one" placeholder="Enter your answer" required>
      </div>
        <div class="form-group">
        <label for="security_ques_two">What was the name of your first pet?</label>
        <input type="text" id="email" name="security_ques_two" placeholder="Enter your answer" required>
      </div>
        <div class="form-group">
        <label for="security_ques_three">What city were you born in?</label>
        <input type="text" id="email" name="security_ques_three" placeholder="Enter your answer" required>
      </div>

      <!-- Submit -->
      <button type="submit" class="register-btn">Register</button>
    </form>
    <p class="login-link">
      Already have an account? <a href="./login.php">Login here</a>
    </p>
  </div>
</div>

</body>
</html>