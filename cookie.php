<?php

     // membuat cookie pertama kali
     setcookie('username' , 'Kelas Industri', time()+3600 , '/');

     // cookie username akan diubah valuenya
     setcookie('username' , 'Muhammad Lailil Mahfud', time()+3600 , '/');

     // menghapus cookie
     setcookie('username' , '', time()-3600 , '/'); 


     echo "cookie username sudah dibuat";
     echo "<br>";
     echo "Valuenya adalah : ";

     // echo @$_COOKIE['username'];

     if(isset($_COOKIE['username'])){
          echo $_COOKIE['username'];
     }
