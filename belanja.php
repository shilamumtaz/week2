<?php
    // ambil data yang di inputkan/dikirimkan ole user S
    $customer = $_POST['name_customer'];
    $pilihan_produk = $_POST['sepeda.mobil,motor'];
    $jumlah = $__POST['jumlah'];
    $harga = $__POST['harga'];
    $_total_belanja = ($jumlah * $harga) ;

    // mencetak nilai variable
    echo "Customer : $name_customer";
    echo "<br/>Pilihan Produk : $sepeda,mobil,motor";
    echo "<br/>Jumlah : $jumlah";
    echo "<br/>Harga : $harga";
    ?>