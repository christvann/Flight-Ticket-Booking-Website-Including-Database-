<html>
    <head>
        <title>Hapus Data Pemesanan</title>
    </head>
    <body>
        <h3 align="center">FORM HAPUS DATA</h3>
        <?php
        include 'koneksi.php';
        if(isset($_GET['kodepenerbangan']))
            {
                $kodepenerbangan=$_GET['kodepenerbangan'];
            }
            $perintah="SELECT * FROM tbl_pemesanan WHERE kode_penerbangan='$kodepenerbangan'";
            $query=mysqli_query($db,$perintah);

            while ($row=mysqli_fetch_array($query)){
        ?>

        <form action="proseshapus.php" method="post">
            <table align="center">
                <tr>
                    <td>Kode Penerbangan  </td>
                    <td>
                        <input type="text" name="kodepenerbangan" value="<?php echo $row['kode_penerbangan'] ?>"></input>
                    </td>
                </tr>
                <tr>
                    <td>Nama Maskapai  </td>
                    <td>
                        <input type="text" name="namamaskapai" value="<?php echo $row['nama_maskapai'] ?>"></input>
                    </td>                
                </tr>
                <tr>
                    <td>Harga Tiket </td>
                    <td>
                        <input type="text" name="hargatiket" value="<?php echo $row['harga'] ?>"></input>
                    </td>               
                </tr>
                <tr>
                    <td>Jumlah Tiket  </td>
                    <td>
                        <input type="text" name="jumlahtiket" value="<?php echo $row['jumlah']?>"></input>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="HAPUS DATA"></input>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </body>
</html>