<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Register -> Netgate BD</title>

    <!-- CSS File -->
    <link rel="stylesheet" href="SignInSignUp.css" />

    <!-- Boxicons for social media icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- PHP Error Reporting (Debugging) -->
    <?php
      error_reporting(E_ALL);
      ini_set('display_errors', 1);
    ?>
  </head>

  <body>
    <div class="container" id="container">
      <!-- Sign-Up Form -->
      <div class="form-container sign-up">
        <form method="POST" action="IsignUp.php">
          <h1>Create Account</h1>

          <div class="social-icons">
            <a href="#" class="icons"><i class="bx bxl-google"></i></a>
            <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="icons"><i class="bx bxl-github"></i></a>
            <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
          </div>

          <span>Register with E-mail</span>
          <input type="text" placeholder="Name" name="instructorName" required />
          <input type="email" placeholder="Enter E-mail" name="instructorEmail" required />
          <input type="password" placeholder="Enter Password" name="instructorPassword" required />
          <button type="submit" name="submit">Sign Up</button>
        </form>
      </div>

      <!-- Sign-In Form -->
      <div class="form-container sign-in">
        <form method="POST" action="IsignIn.php">
          <h1>Sign In</h1>

          <div class="social-icons">
            <a href="#" class="icons"><i class="bx bxl-google"></i></a>
            <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="icons"><i class="bx bxl-github"></i></a>
            <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
          </div>

          <span>Login With Email & Password</span>
          <input type="email" placeholder="Enter E-mail" name="iloginEmail" required />
          <input type="password" placeholder="Enter Password" name="iloginPassword" required />
          <a href="#">Forgot Password?</a>
          <button type="submit" name="submit">Sign In</button>
        </form>
      </div>

      <!-- Toggle Section -->
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome To <br />Netgate BD</h1>
            <p>Sign in With ID & Password</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hii Instructor</h1>
            <p>Join "Netgate BD"</p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript File -->
    <script src="register_script.js"></script>

    <!-- PHP Includes (Check for Errors) -->
    <?php
      if (file_exists('IsignUp.php')) {
        include('IsignUp.php');
      } else {
        echo "<script>console.error('Error: IsignUp.php file not found!');</script>";
      }

      if (file_exists('IsignIn.php')) {
        include('IsignIn.php');
      } else {
        echo "<script>console.error('Error: IsignIn.php file not found!');</script>";
      }
    ?>
  </body>
</html>
