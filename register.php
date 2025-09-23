<!DOCTYPE html>
<html lang="en">
<?php include_once("./components/head.php")?>
<link rel="stylesheet" href="./style.css">
<body>
  <div class="register-container">
  <div class="register-card">
       <!-- Home Icon -->
      <a href="./index.php" class="home-icon"><i class="fas fa-home"></i></a>
    <h2>Create Your Account</h2>
    <form action="register.php" method="POST">
      <!-- Email / Phone -->
      <div class="form-group">
        <label for="email">Email / Phone</label>
        <input type="text" id="email" name="email" placeholder="Enter your email or phone" required>
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
          <option value="">Select gender</option>
          <option value="male">Man</option>
          <option value="female">Woman</option>
          <option value="other">Other</option>
        </select>
      </div>

      <!-- Looking For -->
      <div class="form-group">
        <label for="lookingFor">Looking For</label>
        <select id="lookingFor" name="lookingFor" required>
          <option value="">Select preference</option>
          <option value="men">Men</option>
          <option value="women">Women</option>
        </select>
      </div>

      <!-- Who is Opening This Account -->
      <div class="form-group">
        <label for="accountBy">Who is opening this account?</label>
        <select id="accountBy" name="accountBy" required>
          <option value="">Select option</option>
          <option value="ghotok">Ghotok</option>
          <option value="self">Self</option>
          <option value="parents">Parents</option>
          <option value="siblings">Siblings</option>
          <option value="relative">Relative</option>
          <option value="friend">Friend</option>
        </select>
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