<?php
    include("config.php"); 

    if( !isset($_GET['id']) ){
      header('Location: index.php');
    }

    $mhs = $_GET['id'];

    $sql = "SELECT * FROM mahasiswa WHERE nim=$mhs";
    $query = mysqli_query($koneksi, $sql);
    $mhs = mysqli_fetch_assoc($query);


    if(mysqli_num_rows($query) < 1 ){
      die("data tidak ditemukan...");
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Formulir Edit Mahasiswa</title>
  </head>
  <body>
    <header><h2>Form Edit</h2></header>

    <form action="proses-edit.php" method="POST">
      
      <fieldset>
        <input type="hidden" name="id" value="<?php echo $mhs['nim']?>"/>
        

        <p>
          <label for="nim">NIM</label>
        <input type="text" name="id" disabled value="<?php echo $mhs['nim']?>"/>
        </p>
        <p>
          <label for="nama_lengkap">Nama</label>
          <input type="text" class="isi" name="nama_lengkap" value="<?php echo $mhs['nama_lengkap']?>"/>
        </p>
        
        <p>
          <label for="tempat_lahir">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" value="<?php echo $mhs['tempat_lahir']?>"/>
        </p>

        <p>
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir"  value="<?php echo $mhs['tanggal_lahir']?>"/>
        </p>

        <p>
          <label for="alamat">Alamat</label>
          <textarea name="alamat" rows="5">"<?php echo $mhs['alamat']?>"</textarea>
        </p>

        <p>
        <label for="jurusan">Jurusan</label>
          <input type="text" name="jurusan" value="<?php echo $mhs['jurusan']?>"/>
        </p>
        
        <p>
          <label for="no_hp">Nomor Handphone</label>
          <input type="text" name="no_hp" value="<?php echo $mhs['no_hp']?>"/>
        </p>

        <p>
          <label for="email">Tempat Lahir</label>
          <input type="text" name="email" value="<?php echo $mhs['email']?>"/>
        </p>
        <p>
          <input type="submit" value="Simpan" name="simpan">
        </p>
  </fieldset>
    </form>
  </body>
</html>