<?php
include "koneksi.php";

$id = 1;

$sql = "DELETE FROM siswa WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "data berhasil dihapus";
} else {
    echo "error deleting record" . mysqli_error($conn);
}
?>