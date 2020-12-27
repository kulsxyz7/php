<?php 
    // // Variable Scope / lingkup variabel
    // $x = 10;

    // function tampilX() {
    //     echo $x;
    // }

    // tampilX();

    // SUPERGLOBALS
    // Variable global milik PHP
    // merupakan Array Associative

    // $_GET
    $mahasiswa = [
        [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "b.jpg"
        ],
        [
            "nama" => "Untung Dwi Prayoga",
            "nrp" => "41518320040",
            "email" => "kulsxyz7@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "a.jpg"
        ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
     <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
     </li>  
    <?php endforeach; ?>
</ul>
</body>
</html>