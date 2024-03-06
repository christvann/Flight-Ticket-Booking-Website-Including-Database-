<?php
    include "koneksi.php";

    if (isset ($_POST['kodepenerbangan'])){
        $kodepenerbangan=$_POST['kodepenerbangan'];
        $namamaskapai=$_POST['namamaskapai'];
        $hargatiket=$_POST['hargatiket'];
        $jumlahtiket=$_POST['jumlahtiket'];
        }
        else{
            echo("Maaf Anda dilarang masuk, tanpa melalui form!");
            header("location:formpemesanan.php");
        }

        if(empty($kodepenerbangan)){
            die("Kode Penerbangan Harus Diisi");
        }
        if(empty($namamaskapai)){
            die("Nama Maskapai Harus Diisi");
        }
        if(empty($jumlahtiket)){
            die("Jumlah Tiket Harus Diisi");
        }
        if(empty($hargatiket)){
            die("Harga Tiket Harus Diisi");
        }

        if(!is_numeric($jumlahtiket)){
            die("Jumlah Tiket harus diisi dengan angka");
        }
        if(!is_numeric($hargatiket)){
            die("Harga Tiket harus diisi dengan angka");
        }

    $perintah = "insert into tbl_pemesanan values('$kodepenerbangan','$namamaskapai','$hargatiket','$jumlahtiket')";
    mysqli_query($db,$perintah);
    die("Data Berhasil Disimpan");    
?>