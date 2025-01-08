<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="SignInSignUp.css" />

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!--https://boxicons.com/ -->

    <title>Register -> Netgate BD</title>
  </head>

  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
      <form method="POST" action="index.html">
          <h1>Create Account</h1>

          <div class="social-icons">
            <a href="#" class="icons"><i class="bx bxl-google"></i></a>
            <!-- will be update later on -->
            <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
            <!-- will be update later on -->
            <a href="#" class="icons"><i class="bx bxl-github"></i></a>
            <!-- will be update later on -->
            <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
            <!-- will be update later on -->
          </div>

          <span>Register with E-mail</span>
          <input type="text" placeholder="Name" />
          <input type="email" placeholder="Enter E-mail" />
          <input type="password" placeholder="Enter Password" />
          <button>Sign Up</button>
        </form>
        <?php 
            include('signUp.php')
        ?>
      </div>

      <div class="form-container sign-in">
      <form method="POST" action="index.html">
          <h1>Sign In</h1>

          <div class="social-icons">
            <a href="#" class="icons"><i class="bx bxl-google"></i></a>
            <!-- will be update later on -->
            <a href="#" class="icons"><i class="bx bxl-facebook"></i></a>
            <!-- will be update later on -->
            <a href="#" class="icons"><i class="bx bxl-github"></i></a>
            <!-- will be update later on -->
            <a href="#" class="icons"><i class="bx bxl-linkedin"></i></a>
            <!-- will be update later on -->
          </div>

          <span>Login With Email & Password</span>
          <input type="email" placeholder="Enter E-mail" />
          <input type="password" placeholder="Enter Password" />
          <a href="#">Forget Password?</a>
          <!-- <a href="index.html">Forget Password?</a> -->
          <button>Sign In</button>
        </form>
        <?php 
            include('signIn.php')
        ?>
      </div>

      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome To <br />Netgate BD</h1>
            <p>Sign in With ID & Passowrd</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hii Learner's</h1>
            <p>Join "Netgate BD" to Improve Your Networking Field Skills</p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script src="register_script.js"></script>
  </body>
</html>
