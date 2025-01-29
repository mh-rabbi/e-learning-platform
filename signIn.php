<?php
include("dbconnect.php");
session_start();

if (isset($_POST['submit'])) {
    $e = mysqli_real_escape_string($conn, $_POST['learnerEmail']);
    $p = $_POST['learnerPassword'];

    $sql = "SELECT * FROM learners WHERE learnerEmail = '$e'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        
        // Verify the password hash
        if (password_verify($p, $row['learnerPassword'])) {
            $_SESSION['learnerID'] = $row['learnerID'];
            $_SESSION['learnerName'] = $row['learnerName'];
            header('Location: homePage.html'); // Redirect on success
            exit;
        } else {
            echo "<p>Invalid email or password.</p>";
        }
    } else {
        echo "<p>User not found. Please register.</p>";
    }
}
?>
