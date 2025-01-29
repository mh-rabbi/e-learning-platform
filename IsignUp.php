<?php
require_once ('dbconnect.php');
if (isset($_POST['submit'])) {
    $u = mysqli_real_escape_string($conn, $_POST['instructorName']);
    $e = mysqli_real_escape_string($conn, $_POST['instructorEmail']);
    $p = password_hash($_POST['instructorPassword'], PASSWORD_BCRYPT); // Secure Hash

    // Check if email already exists
    $sql = "SELECT * FROM instructors WHERE instructorEmail = '$e'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<p>Email already registered!</p>";
    } else {
        $sql1 = "INSERT INTO instructors(instructorName, instructorEmail, instructorPassword) VALUES('$u','$e','$p')";
        if (mysqli_query($conn, $sql1)) {
            //header("Location: homePage.html"); // Redirect on success
            echo "Registration complete";
            exit;
        } else {
            echo "<p>Registration failed. Try again.</p>";
        }
    }
}
?>
