<?php


// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'db/koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai

$sql = "SELECT * FROM tb_user WHERE email='$email' and Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    if ($row['role'] == "admin") {
      $_SESSION['email'] = $email;
      $_SESSION['level'] = "admin";
      header("location:admin/index.php");
    } elseif ($row['role'] == "user") {
      $_SESSION['email'] = $email;
      $_SESSION['level'] = "user";
      header("location: beranda.php");
    }
  }
} else {
  header("location:index.php?pesan=gagal");
}
$conn->close();


?>


?>