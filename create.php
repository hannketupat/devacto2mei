<?php
include "koneksi.php";
$nama = "rehan";
$email = "rehan@gmail.com";

$sql = "INSERT INTO siswa (nama, email) VALUES ('$nama', '$email')";

if(mysqli_query($conn,$sql)){
    echo "Data berhasil ditambahkan";
} else {
    echo "error" . $sql . mysqli_error($conn);
}
?>