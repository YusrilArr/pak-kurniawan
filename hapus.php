<?php

    include("config.php");

    if(isset($_GET['id'])){

        //ambil id dari query string
        $nim = $_GET['id'];

        //query delete
        $sql = "DELETE FROM mahasiswa WHERE nim=$nim";
        $query = mysqli_query($koneksi, $sql);

        //cek apakah hapus berhasil
        if(query){
            header('Location: index.php');
        }else{
            die("Gagal Hapus");
        }
    }else{
        die("Akses Dilarang!");
    }

?>