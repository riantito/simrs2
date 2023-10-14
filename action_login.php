<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "simrs2");
$noktp = $_POST['noktp'];
$password = $_POST['password'];
$sql = mysqli_query($con, "select *from regis where noktp='$noktp' and password='$password'");
$r = mysqli_fetch_array($sql);
if ($r['noktp'] == $noktp and $r['password'] == $password) {
    $_SESSION['noktp'] = $r['noktp'];
    $_SESSION['password'] = $r['password'];
    echo "<script>alert ('Login Sukses');
window.location = 'Admin/dashboard.php'</script>";
} else {
    echo "<script>alert ('SALAH BRAY!');
window.location = 'appointment.php'</script>";
}
?>