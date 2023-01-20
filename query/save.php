<?php
include("koneksi/koneksi.php");

if (isset($_POST["btn-simpan"])) {
    $nama = $_POST["nama"];
    $berat = $_POST["berat"];
    $kelamin = $_POST["kelamin"];
    $usia = $_POST["usia"];
    $hipertensi = '';


    if ($berat == 'kur') {
        $hipertensi = 'tidak';
    }
    if ($berat == 'nor') {
        $hipertensi = 'tidak';
    }
    if ($berat == 'gem' and $kelamin == 'P') {
        $hipertensi = 'ya';
    }
    if ($berat == 'gem' and $kelamin == 'L' and $usia == 'mud') {
        $hipertensi = 'ya';
    }
    if ($berat == 'gem' and $kelamin == 'L' and $usia == 'tua') {
        $hipertensi = 'tidak';
    };



    $query = "INSERT INTO `hasil` VALUES (NULL, '$nama', '$usia', '$kelamin', '$berat', '$hipertensi')";

    $upload = mysqli_query($db, $query);

    if ($upload > 0) {
        echo "<script >
    alert('Data Berhasil tambah , silahkan cek data anda di tabel hasil');
    </script>";
    } else {
        echo "<script >
    alert('Data Gagal tambah !!!');
    </script>";
    }
}
