<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form - POST</title>
</head>
<body>
     <?php
          $errorNama = '';
          $errorTanggalLahir = '';
          $errorJenisKelamin = '';
          $errorAlamat = '';

          if( isset( $_POST['nama'] ) ){
               
               // validasi proses
               if ( $_POST['nama'] == '' ){
                    $errorNama = 'Nama tidak boleh kosong';
               }

               if ( $_POST['tanggal_lahir'] == '' ){
                    $errorTanggalLahir = 'Tanggal lahir tidak boleh kosong';
               }

               if ( $_POST['jenis_kelamin'] == '' ){
                    $errorJenisKelamin = 'Jenis kelamin tidak boleh kosong';
               }

               if ( $_POST['alamat'] == '' ){
                    $errorAlamat = 'Alamat tidak boleh kosong';
               }

          }

     ?>
     <h2>POST : Formulir Data Diri</h2>

     <form action="" method="POST">

          Nama : <input type="text" name="nama" value="<?= @$_POST['nama'] ?>">  
          <?= $errorNama ?>
          <br><br>

          Tanggal Lahir : <input type="date" name="tanggal_lahir" value="<?= @$_POST['tanggal_lahir'] ?>">  
          <?= $errorTanggalLahir ?>
          <br><br>

          Jenis Kelamin :
          <input type="radio" <?= ( isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Laki-laki'  ) ? 'checked' : '' ?>  name="jenis_kelamin" value="Laki-laki"> 
          Laki-laki

          <input type="radio" <?= ( isset($_POST['jenis_kelamin'])  && $_POST['jenis_kelamin'] == 'Perempuan' ) ? 'checked' : '' ?>  name="jenis_kelamin" value="Perempuan"> 
          Perempuan
          <?= $errorJenisKelamin ?>
          <br><br>

          Alamat : <br><textarea name="alamat" cols="30" rows="10">
               <?= @$_POST['alamat'] ?>
          </textarea>
          <?= $errorAlamat ?>
          <br><br>

          <button type="submit">
               KIRIM
          </button>

     </form>

     <?php  if( isset( $_POST['nama'] ) ) {   ?>

               <h2>Hasil Input : </h2>

               Nama : <?= $_POST['nama'] ?> <br>
               Tanggal Lahir : <?= $_POST['tanggal_lahir'] ?> <br>
               Jenis Kelamin : <?= $_POST['jenis_kelamin'] ?> <br>
               Alamat : <?= $_POST['alamat'] ?>

     <?php  }  ?>

</body>
</html>