<?php

//Belajar Pewarisan

class Computer
{
    public $merk;
    public $processor;
    public $VGA;

    public function beliKomputer(){
        return "Ini Komputer Gue";
    }
}

class laptop extends Computer
{
    public function lihat_spec(){
        return "merk: $this->merk, processor; $this->processor, VGA: $this->memory";
    }
}

$laptopAcer = new laptop();
$laptopAcer->merk = "Acer";
$laptopAcer->processor = "Intel core i5";
$laptopAcer->VGA = "GTX 1050ti";

$laptopAsusROG = new laptop();
$laptopAsusROG->merk = "Zephyrus";
$laptopAsusROG->processor = "Intel core i9";
$laptopAsusROG->VGA = "GTX 1080ti";

var_dump($laptopAcer->beliKomputer() , $laptopAsusROG);

?>