<?php
include "koneksi.php";

$sql = "SELECT id, nama, email FROM siswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "ID:" . $row["id"]. "\n" . "-Nama" . $row["nama"]. "-Email". $row["email"]. "<br>"; 
    } 
}else{
    echo "0 hasil";
}
?>