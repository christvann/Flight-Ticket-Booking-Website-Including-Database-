<html>
    <head>
        <title>Data Pemesanan</title>
    </head>
    <body>
        <h1 align="center">Christ Traveling</h1>
        <br/>
        <h2 align="center">Data Booking</h3>
        <table border="1" align="center">
            <tr>
                <th>No</th>
                <th>Kode Penerbangan</th>
                <th>Nama Maskapai</th>
                <th>Harga Tiket</th>
                <th>Jumlah Tiket</th>
                <th>Aksi</th>
            </tr>
            <?php
            include "koneksi.php";
            $perintah="SELECT * FROM tbl_pemesanan";
            $query=mysqli_query($db, $perintah) or die(mysqli_error());
            $nomor=0;
            while($data=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td>
                    <?php echo $nomor=$nomor+1;?>
                </td>
                <td>
                    <?php echo $data['kode_penerbangan'];?>
                </td>
                <td>
                    <?php echo $data['nama_maskapai'];?>
                </td>
                <td>
                    <?php echo $data['harga'];?>
                </td>
                <td>
                    <?php echo $data['jumlah'];?>
                </td>
                <td>
                    <a href="editdata.php?kodepenerbangan=<?php echo$data['kode_penerbangan']; ?>">Edit</a>
                    /
                    <a href="hapusdata.php?kodepenerbangan=<?php echo$data['kode_penerbangan']; ?>">Hapus</a> 
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>