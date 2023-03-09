<?php
    // ambil data yang di inputkan/dikirimkan ole user 
    // panggil file function untuk menggunakan code yang ada di file tersebut
    require_once 'function.php';
    $name = $_POST['name'];
    $mata_kuliah = $_POST['matkul'];
    $uts = $__POST['nilai_uts'];
    $uas = $__POST['nilai_uas'];
    $nilai_tugas = $__POST['nilai_tugas'];
    $_nilai = ($uts + $uas + $nilai_tugas) /3;
    $keterangan = kelulusan($_nilai);
    $grade =grade($_nilai);

    // mencetak nilai variable
    echo "Nama Mahasiswa : $name";
    echo "<br/>Mata Kuliah : $mata_kuliah";
    echo "<br/>Nilai UTS : $nilai_uts";
    echo "<br/>Nilai UAS : $nilai_uas";
    echo "Nilai Tugas Praktikum: $nilai_tugas";
    echo "<br/>Keterangan : $keterangan";
    echo "<br/>Grade : $grade";
    ?>