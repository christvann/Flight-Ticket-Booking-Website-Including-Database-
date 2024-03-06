<?php
 include 'koneksi.php';

 $kodebarang=$_REQUEST['kodepenerbangan'];
 $namabarang=$_REQUEST['namamaskapai'];
 $hargabarang=$_REQUEST['hargatiket'];
 $jumlahbarang=$_REQUEST['jumlahtiket'];

 $perintah = "DELETE * FROM tbl_pemesanan WHERE kode_penerbangan='$kodepenerbangan'";

 if(mysqli_query($db,$perintah)){
    echo"Selamat Data Berhasil Dihapus";
}
else{
    echo "Maaf Data Gagal Disimpan" . mysqli_error($db);
}
?>