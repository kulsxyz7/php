<?php 
    // Array
    // variabel yang dapat menampung banyak nilai
    // Elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key and value
    // key-nya adalah index, yang dimulai dari 0
    
    // membuat array 
    // cara lama
    $hari = array( "Senin", "Selasa", "Rabu" );
    // Cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "tulisan", false];

    // menampilkan array
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    // Menampikan 1 elemen pada array
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];

    // menambahkan elemn baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    echo "<br>";
    var_dump($hari);


?>