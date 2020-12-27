<?php 

// Biasakan nulis dengan huruf besar
// define("NAMA", 'Untung Dwi Prayoga');

// echo NAMA;

// echo "<br>";

// const UMUR = 21;
// echo UMUR;


// class Coba {
//     const NAMA = 'Untung Dwi Prayoga';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function coba() {
//     return __FUNCTION__;
// }

// echo coba();


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>