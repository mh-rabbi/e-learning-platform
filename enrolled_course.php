<?php
session_start();
if (!isset($_SESSION['learnerName'])) {
    $_SESSION['learnerName'] = "Guest"; // Default if not logged in
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Details & Payment</title>
  <!-- Linking Google Fonts for Icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,200,0,0" />

  <!----======== CSS ======== -->
  <link rel="stylesheet" href="homePage.css" />
  <link rel="stylesheet" href="enrolled_course.css">
  <!----===== Boxicons CSS ===== -->
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <div id="sidebar"> <!-- Sidebar placeholder -->
    <nav class="sidebar close">
      <header>
        <div class="image-text">
          <span class="image">
            <img src="img/mainlogo.png" alt="logo" />
          </span>

          <div class="text logo-text">
              <span class="name">Netgate BD</span>
              <span class="profession">
                  <?php echo htmlspecialchars($_SESSION['learnerName']); ?>
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
              <a href="index.html">
                <i class="bx bx-home-alt icon"></i>
                <span class="text nav-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-user-check icon"></i>
                <span class="text nav-text">Enrolled Courses</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-bell icon"></i>
                <span class="text nav-text">Notifications</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-pie-chart-alt icon"></i>
                <span class="text nav-text">Assesments</span>
              </a>
            </li>

            <li class="nav-link">
              <a href="#">
                <i class="bx bx-heart icon"></i>
                <span class="text nav-text">Likes</span>
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
              <span class="switch"></span>
            </div>
          </li>
        </div>
      </div>
    </nav>
  </div>

  <div class="home">
    <div class="course-card">
      <div class="course-header">
        <span class="alert-icon">Course 1</span>

      </div>
      <div class="course-title">
        <h1>IP Addressing and Subnetting - Zero to Hero</h1>
        <p>Go from zero to advanced in IP addressing in a single course!</p>
      </div>
      <button class="join-button">Join Live Class</button> <br> <br>
      <a href="https://www.youtube.com/watch?v=5Xxc5m79M68&list=PLaG9Bjj0zTsXdtDd9IL-IybO-_Qse0HH5"><button
          class="enroll-button">View Recorded Class</button></a>
      <div class="course-details">
        <p><span>⏱️</span> 60 hours on-demand video</p>
        <p><span>📅</span> Assignments</p>
        <p><span>📈</span> 13 coding exercises</p>
      </div>
    </div>



    <div class="course-card">
      <div class="course-header">
        <span class="alert-icon">Course 2</span>
      </div>
      <div class="course-title">
        <h1>Python Complete Course For Python Beginners</h1>
        <p>Python Complete Course For Python Beginners.Learn Python From Beginner To Advanced.</p>
      </div>
      <button class="join-button">Join Live Class</button> <br> <br>
      <a href="https://www.youtube.com/watch?v=5Xxc5m79M68&list=PLaG9Bjj0zTsXdtDd9IL-IybO-_Qse0HH5"><button
          class="enroll-button">View Recorded Class</button></a>

      <div class="course-details">
        <p><span>⏱️</span> 45 hours on-demand video</p>
        <p><span>📅</span> Assignments</p>
        <p><span>📈</span> 22 coding exercises</p>
      </div>
    </div>

    <div class="course-card">
      <div class="course-header">
        <span class="alert-icon">Course 3</span>
      </div>
      <div class="course-title">
        <h1>Learn Ethical Hacking</h1>
        <p>Become an ethical hacker that can hack like black hat hackers and secure systems like cybersecurity experts
        </p>
      </div>
      <button class="join-button">Join Live Class</button> <br> <br>
      <a href="https://www.youtube.com/watch?v=5Xxc5m79M68&list=PLaG9Bjj0zTsXdtDd9IL-IybO-_Qse0HH5"><button
          class="enroll-button">View Recorded Class</button></a>

      <div class="course-details">
        <p><span>⏱️</span> 52 hours on-demand video</p>
        <p><span>📅</span> Assignments</p>
        <p><span>📈</span> 23 coding exercises</p>
      </div>
    </div>






  </div>
  <script src="homePage_script.js"></script>
  <script src="enrolled_course.js"></script>

  <!-- <script src="dark-mode.js"></script> -->

</body>

</html>