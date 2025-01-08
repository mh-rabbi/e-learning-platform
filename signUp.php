<?php
require_once ('dbconnect.php');
if (isset($_POST['submit'])) {
    $u = mysqli_real_escape_string($conn, $_POST['learnerName']);
    $e = mysqli_real_escape_string($conn, $_POST['learnerEmail']);
    $p = md5($_POST['learnerPassword']);
 
    $sql = "select * form learners where learnerEmail = '$e' && learnerPassword = '$p'";
    $result = mysqli_query($conn, $sql);
    $sql1 = "insert into learners(learnerName, learnerEmail, learnerPassword) values('$u','$e','$p')";
    mysqli_query($conn, $sql1);
    //header("location: index.html");
}
?>
