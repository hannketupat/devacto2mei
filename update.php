<?php
include "koneksi.php";
$id = 1;
$newemail = "John.new@example.com";

$sql = "UPDATE siswa SET email='$newemail' WHERE id=$id";
if (mysqli_query($conn, $sql)){
    echo "data berhasil diupdate";
} else {
    echo "error updating record". mysqli_error($conn);
}
?>