<?php

class Santri
{
    public $nama;
    private $umur;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getUmur()
    {
        return 'Umur anda ' .  $this->umur . ' tahun atau ' . $this->umur *365 . ' hari';
    }

    public function setUmur($umur)
    {
        if ($umur < 15){
            echo "Santri is not old enough";
        }
        $this->umur = $umur;
    }
}

$rifky = new Santri("Rifky Maulana");

$rifky->setUmur(20);

var_dump($rifky, $rifky->getUmur());