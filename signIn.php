<?php
include("dbconnect.php");
session_start();
if (isset($_POST['submit'])) {
  $e = mysqli_real_escape_string($conn, $_POST['learnerEmail']);
  $p = md5($_POST['learnerPassword']);
  $sql = "SELECT * FROM learners WHERE learnerEmail = '$e' AND learnerPassword = '$p'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if ($p === $row['password']) {
      $_SESSION['learnerID'] = $row['learnerID'];
      $_SESSION['learnerName'] = $row['learnerName'];
      //header('location: index.html');
      exit;
    }
  } else {
    echo "<p>Please try again.</p>";
  }
}
?>