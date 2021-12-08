<!DOCTYPE html>
<html>


<?php

include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $u_name = $conn->real_escape_string($_POST['nama']);
    $u_alamat = $conn->real_escape_string($_POST['alamat']);
    $u_jeniskel = $conn->real_escape_string($_POST['jenis_kelamin']);
    $u_agama = $conn->real_escape_string($_POST['agama']);
    $u_sekolah = $conn->real_escape_string($_POST['sekolah_asal']);


    $q =$conn->query(sprintf("INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal)
                VALUES ('%s', '%s', '%s', '%s', '%s')", $u_name, $u_alamat, $u_jeniskel, $u_agama, $u_sekolah));


    
    header("Location: list_siswa.php") ;
}
?>  

<!-- <br>
<button class = "btn" onclick="window.location.href='products.php';">
      Lihat Product
      <link rel="stylesheet" href='buttonstyle.css'/>
    </button> -->
</html>