<?php

     class Mobil{

          public $warna;
          public $model;

          public function __construct($warna,$model)
          {
               $this->warna = $warna;    
               $this->model = $model;    
          }

          public function message(){
               return "Mobil saya adalah $this->model berwarna $this->warna";
          }
     }

     $mobil_ku = new Mobil("Hitam","Supra");
     echo $mobil_ku->message();
?>