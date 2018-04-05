<?php


function alarm(){
    $waktu = $_POST["waktu"];
    $alarm = $_POST["alarm"];

    if($waktu == $alarm){
        echo "Bangun Woi Ampas";
    }else{
        echo "Tidur aja pak";
    }
}

alarm();

?>