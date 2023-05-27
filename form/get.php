<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Form - GET</title>
</head>
<body>
     <h2>GET : Formulir Data Diri</h2>

     <form action="" method="GET">

          Nama : <input type="text" name="nama">  
          <br><br>

          Tanggal Lahir : <input type="date" name="tanggal_lahir">  
          <br><br>

          Jenis Kelamin :
          <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
          <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
          <br><br>

          Alamat : <br><textarea name="alamat" cols="30" rows="10"></textarea>
          <br><br>

          <button type="submit">
               KIRIM
          </button>

     </form>

     <?php  if( isset( $_GET['nama'] ) ) {   ?>

               <h2>Hasil Input : </h2>

               Nama : <?= $_GET['nama'] ?> <br>
               Tanggal Lahir : <?= $_GET['tanggal_lahir'] ?> <br>
               Jenis Kelamin : <?= $_GET['jenis_kelamin'] ?> <br>
               Alamat : <?= $_GET['alamat'] ?>

     <?php  }  ?>

</body>
</html>