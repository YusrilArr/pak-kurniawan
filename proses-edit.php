<?php
    include("config.php");

    //Mengecek apakah tombol simpan sudah di klik
    if (isset($_POST['simpan'])){

        $nim = $_POST['id'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $jurusan = $_POST['jurusan'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];


        $sql = "UPDATE mahasiswa SET nim='$nim', 
                                    nama_lengkap='$nama_lengkap', 
                                    tempat_lahir='$tempat_lahir', 
                                    tanggal_lahir='$tanggal_lahir',
                                    alamat='$alamat', 
                                    jurusan='$jurusan', 
                                    no_hp='$no_hp', 
                                    email='$email' WHERE nim='$nim'";
        $query = mysqli_query($koneksi, $sql);

        //Cek apakah query berhasil?
        if(query){
            header('Location: index.php');
        }else{
            //Tampilkan notif jika gagal
            echo "Gagal Menyimpan";
        }

    }else{
        die("Akses dilarang");
    }

?>