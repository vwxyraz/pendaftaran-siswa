<!DOCTYPE html>
<html>


<?php

    include('connection.php');
    $id = $_POST['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $u_name = $conn->real_escape_string($_POST['nama']);
        $u_alamat = $conn->real_escape_string($_POST['alamat']);
        $u_jeniskel = $conn->real_escape_string($_POST['jenis_kelamin']);
        $u_agama = $conn->real_escape_string($_POST['agama']);
        $u_sekolah = $conn->real_escape_string($_POST['sekolah_asal']);


        $q =$conn->query(sprintf("UPDATE calon_siswa SET nama = '%s', alamat = '%s', jenis_kelamin = '%s', agama = '%s', sekolah_asal = '%s' 
                                WHERE id = '%s'" , $u_name, $u_alamat, $u_jeniskel, $u_agama, $u_sekolah, $id));


        
        header("Location: list_siswa.php") ;
    }
    // else{
    //     $q = $conn->real_escape_string(sprintf("SELECT *FROM calon_siswa WHERE id = '%s'", $id));

    //     if($q = $conn->query($q))
    //     {
    //         while($res = $q->fetch_assoc())
    //         {
    //             $u_name = $conn->real_escape_string($_POST['nama']);
    //             $u_alamat = $conn->real_escape_string($_POST['alamat']);
    //             $u_jeniskel = $conn->real_escape_string($_POST['jenis_kelamin']);
    //             $u_agama = $conn->real_escape_string($_POST['agama']);
    //             $u_sekolah = $conn->real_escape_string($_POST['sekolah_asal']);
    //         }
    //     }
    // }
?>  

<!-- <br>
<button class = "btn" onclick="window.location.href='products.php';">
      Lihat Product
      <link rel="stylesheet" href='buttonstyle.css'/>
    </button> -->
</html>