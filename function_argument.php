<?php

function perkenalan($nama, $umur)
{
     // intruksi function
     echo "Halo nama saya $nama,
umur saya $umur <br>";
}

function tinggiBadan($umur, $tinggi = 170)
{
     echo "Tinggi saya $tinggi <br>";
}

perkenalan("Lailil", 23);
echo "<br>";
tinggiBadan(10);

echo "<br>";
echo "<br>";

function luasPersegiVoid($sisi)
{
     $sisi * $sisi;
}
function luasPersegi($sisi)
{
     return $sisi * $sisi;
}
luasPersegiVoid(10);
$luaspersegi = luasPersegi(10);
echo $luaspersegi * 5;

echo "<br>";
echo "<br>";
echo "Passing Argument By Reference <br>";

function penjumlahan(&$angka)
{
     return $angka += 100;
}
$nilai = 30;
penjumlahan($nilai);
echo $nilai;
