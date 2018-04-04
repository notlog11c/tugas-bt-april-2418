<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <br>

    <form action = "alarm()" method = "post">
        <label>Waktu :</label>
        <input type="text" name="waktu" placeholder="Masukkan Waktu"><br>
        <label>Alarm :</label>
        <input type="text" name="alarm"><br>
        <input type="submit" value="coba">
    </form>
</body>
</html>

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

// alarm();



?>