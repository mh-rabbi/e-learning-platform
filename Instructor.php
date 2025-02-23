<?php
session_start();
if (!isset($_SESSION['instructorName'])) {
    $_SESSION['instructorName'] = "Guest"; // Default if not logged in
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="instructor.css" />
    <link rel="stylesheet" href="homeimageslider.css">
    <!-- Linking Google Fonts for Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,200,0,0" />
    <!-- Linking Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!----===== Boxicons CSS ===== -->
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Netgate BD</title>
  </head>
  <body>
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="img/mainlogo.png" alt="logo" />
          </span>

          <div class="text logo-text">
              <span class="name">Netgate BD</span>
              <span class="profession">
                  <?php echo htmlspecialchars($_SESSION['insturctorName']); ?>
              </span>
          </div>
        </div>
        <i class="bx bx-chevron-right toggle"></i>
      </header>

      <div class="menu-bar">
        <div class="menu">
          <li class="search-box">
            <i class="bx bx-search icon"></i>
            <input type="text" placeholder="Search..." />
          </li>

          <ul class="menu-links">
            <li class="nav-link">
              <a href="instructor.php">
                <i class="bx bx-home-alt icon"></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-user-check icon"></i>
                <span class="text nav-text">My Classes</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-bell icon"></i>
                <span class="text nav-text">Give class alert</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-pie-chart-alt icon"></i>
                <span class="text nav-text">Take Assesments</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-heart icon"></i>
                <span class="text nav-text">Studenst info</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-cog icon"></i>
                <span class="text nav-text">Settings</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="bottom-content">
          <li class="">
            <a href="index.html">
              <i class="bx bx-log-out icon"></i>
              <span class="text nav-text">Logout</span>
            </a>
          </li>

          <li class="mode">
            <div class="sun-moon">
              <i class="bx bx-moon icon moon"></i>
              <i class="bx bx-sun icon sun"></i>
            </div>
            <span class="mode-text text">Dark mode</span>

            <div class="toggle-switch">
              <!-- <button onclick="toggleDarkMode()">Toggle Dark Mode</button> -->
              <span class="switch"></span>
            </div>
          </li>
        </div>
      </div>
    </nav>

    <section class="home">
      <div class="text">Netgate BD</div>

      <!-- home slider -->
      <div class="slider-container">
        <!-- Slider List Items -->
        <div class="slider-wrapper swiper-wrapper">
          <div class="slider-item swiper-slide">
            <div class="slide-content">
              <h3 class="slide-subtitle">Course 01</h3>
              <h2 class="slide-title">
                MikroTik Basic to Advanced Course 2.0!
              </h2>
              <p class="slide-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit
                repellendus harum voluptates.
              </p>
              <a href="course_info.html" class="slide-button"><span>Learn More</span></a>
            </div>
          </div>
          <div class="slider-item swiper-slide">
            <div class="slide-content">
              <h3 class="slide-subtitle">Course 02</h3>
              <h2 class="slide-title">Networking Fundamentals</h2>
              <p class="slide-description">
                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti.
              </p>
              <a href="#" class="slide-button"><span>Learn More</span></a>
            </div>
          </div>
          <div class="slider-item swiper-slide">
            <div class="slide-content">
              <h3 class="slide-subtitle">Course 03</h3>
              <h2 class="slide-title">
                Cisco DevNet Associate!
              </h2>
              <p class="slide-description">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt.
              </p>
              <a href="#" class="slide-button"><span>Learn More</span></a>
            </div>
          </div>
          <div class="slider-item swiper-slide">
            <div class="slide-content">
              <h3 class="slide-subtitle">Course 04</h3>
              <h2 class="slide-title">CCNP Enterprise!</h2>
              <p class="slide-description">
                Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                esse quam nihil molestiae consequatur.
              </p>
              <a href="#" class="slide-button"><span>Learn More</span></a>
            </div>
          </div>
          <div class="slider-item swiper-slide">
            <div class="slide-content">
              <h3 class="slide-subtitle">Course 05</h3>
              <h2 class="slide-title">
                CCIE Sequirty!
              </h2>
              <p class="slide-description">
                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                consectetur, adipisci velit.
              </p>
              <a href="#" class="slide-button"><span>Learn More</span></a>
            </div>
          </div>
        </div>
        <!-- Slider Pagination -->
        <div class="slider-controls">
          <ul class="slider-pagination">
            <div class="slider-indicator"></div>
            <li class="slider-tab current">Microtik Basic to Advanced</li>
            <li class="slider-tab">Networking Fundamentals</li>
            <li class="slider-tab">Cisco DevNet Associate</li>
            <li class="slider-tab">CCNP Enterprise</li>
            <li class="slider-tab">CCIE Security</li>
          </ul>
        </div>
        <!-- Slider Navigations (Prev/Next) -->
        <div class="slider-navigations">
          <button id="slide-prev" class="material-symbols-rounded">
            arrow_left_alt
          </button>
          <button id="slide-next" class="material-symbols-rounded">
            arrow_right_alt
          </button>
        </div>
      </div>
    </section>
    
    <!-- Linking Swiper Script -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Linking Custom Script -->
  <script src="home_imageslider_script.js"></script>
    <script src="homePage_script.js"></script>
    <!-- <script src="dark-mode.js"></script> -->


  </body>
</html>
