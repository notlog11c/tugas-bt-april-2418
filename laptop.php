<?php

class laptop 
{
    var $pemilik;
    var $merk;
    var $ukuran_layar;

    function hidupkanLaptop(){
        return "Yee Laptop Sudah Hidup!";
    }
    function matikanLaptop(){
        return "Yahh Laptop Dimatikan!";
    }
}

$laptopRifky = new laptop();

$laptopRifky->pemilik="Rifky";
$laptopRifky->merk="Asus ROG";
$laptopRifky->ukuran_layar="22 inchi";

var_dump($laptopRifky->hidupkanLaptop());

var_dump($laptopRifky->matikanLaptop());
