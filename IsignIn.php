<?php
include("dbconnect.php");
session_start();

if (isset($_POST['submit'])) {
    $e = mysqli_real_escape_string($conn, $_POST['iloginEmail']);
    $p = $_POST['iloginPassword'];

    $sql = "SELECT * FROM instructors WHERE instructorEmail = '$e'";
    $result = mysqli_query($conn, $sql);
    

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        
        // Verify the password hash
        if (password_verify($p, $row['instructorPassword'])) {
            $_SESSION['instructorID'] = $row['instructorID'];
            $_SESSION['instructorName'] = $row['instructorName'];
            header('Location: Instructor.php'); // Redirect on success
            exit;
        } else {
            echo "<p>Invalid email or password.</p>";
        }
    } else {
        echo "<p>User not found. Please register.</p>";
    }
}
?>
