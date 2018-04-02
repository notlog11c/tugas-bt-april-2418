<?php

class laptop {
    
    var $pemilik;
    var $merk;
    var $ukuran_layar;

    function hidupkan_laptop() {
        return "Hidupkan Laptop";
    }

    function matikan_laptop() {
        return "Matikan Laptop";
    }
}

$laptop_notlog11c = new laptop();
$laptop_angkrek = new laptop();

//ini juga cobaaa
$laptop_notlog11c->pemilik="notlog11c";
$laptop_notlog11c->merk="HP";
$laptop_notlog11c->ukuran_layar="15 inchi";

//cobaa
$laptop_angkrek->pemilik="angkrek";
$laptop_angkrek->merk="asus";
$laptop_angkrek->ukuran_layar="22 inchi";

// tampilkan property
echo $laptop_notlog11c->pemilik;
echo "<br>";
echo $laptop_notlog11c->merk;
echo "<br>";
echo $laptop_notlog11c->ukuran_layar;
echo "<br>";

//tampikan method
echo $laptop_notlog11c->hidupkan_laptop();
echo "<br>";
echo $laptop_notlog11c->matikan_laptop();
echo "<br>";

//tampilkan laptop anggrek
echo $laptop_angkrek->pemilik;
echo "<br>";
echo $laptop_angkrek->merk;
echo "<br>";
echo $laptop_angkrek->ukuran_layar;

?>