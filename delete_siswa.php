<?php
    include 'connection.php';
    $id = $_GET['id'];

    // $mysql_query("DELETE FROM products WHERE ProductID = '$id'")or die($mysql_error());

    // header("location: products.php?pesan=delete");
    // $sql = "DELETE * FROM products WHERE ProductID = $id";
    $q = $conn->query(sprintf("DELETE FROM calon_siswa WHERE id = '%s'", $id));

    if(!$conn->error){
        header("Location: list_siswa.php");
        // exit();
    }


?> 