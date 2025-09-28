<?php
  include_once("./php/config.php");
  include_once("./php/user_login.php");
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
  <div class="login-container">
  <div class="login-card">
    <p class="alertText" style="display: <?php if($checking){
       echo 'block';
    }else{
      echo "none";
    };?>;"><?php if(!empty($checking)) echo $checking;?></p>
       <!-- Home Icon -->
      <a href="./index.php" class="home-icon"><i class="fas fa-home"></i></a>
    <h2>User Login</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="user_id">Email / Phone</label>
        <input type="text" id="email" name="user_id" placeholder="Enter your email or phone" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="login-btn">Login</button>
    </form>
    <p class="register-link">
      Don’t have an account? <a href="./register.php">Register here</a>
    </p>
  </div>
</div>

</body>
</html>