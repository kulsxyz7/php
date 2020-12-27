<?php 
    // $mahasiswa = [
    //     ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
    //     ["Untung Dwi Prayoga", "41518320040", "kulsxyz7@gmail.com", "Teknik Informatika"]
    // ];

    // Array Associative
    // definisinya sama seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>
            "</li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>
</html>