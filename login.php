<?php
// session dimulai
session_start();
include("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];

if ($username != '' && $password != '') {
    // query to check if there is a user data with the provided username and password
    $sql = "SELECT * FROM akun WHERE username='$username' AND password='$password'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) < 1) {
        // create a cookie to hold error message
        setcookie("message", "Maaf, username atau password salah", time() + 60);
        header("location: index.php");
    } else {
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        setcookie("message", "", time() - 60);
        header("location: welcome.php");
    }
} else {
    setcookie("message", "Username atau Password kosong", time() + 60);
    header("location: index.php");
}
?>
