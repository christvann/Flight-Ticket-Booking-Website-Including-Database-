<?php
    include "koneksi.php";
    $kodebarang=$_REQUEST['kodepenerbangan'];
    $namabarang=$_REQUEST['namamaskapai'];
    $hargabarang=$_REQUEST['hargatiket'];
    $jumlahbarang=$_REQUEST['jumlahtiket'];

    $perintah = "UPDATE tbl_pemesanan SET nama_maskapai='$namamaskapai',jumlah='$jumlahtiket',harga='$hargatiket' WHERE kode_penerbangan='$kodepenerbangan'";

    if(mysqli_query($db,$perintah)){
        echo"Database Berhasil Disimpan";
    }
    else{
        echo "Maaf Data Gagal Disimpan".mysqli_error($db);
    }