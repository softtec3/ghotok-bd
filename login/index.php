<!DOCTYPE html>
<html lang="en">
<?php include_once("../components/head.php")?>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="login-container">
  <div class="login-card">
    <h2>User Login</h2>
    <form action="login.php" method="POST">
      <div class="form-group">
        <label for="email">Email / Phone</label>
        <input type="text" id="email" name="email" placeholder="Enter your email or phone" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="login-btn">Login</button>
    </form>
    <p class="register-link">
      Don’t have an account? <a href="/matrimony/register">Register here</a>
    </p>
  </div>
</div>

</body>
</html>