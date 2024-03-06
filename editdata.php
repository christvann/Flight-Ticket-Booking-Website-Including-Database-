<html>
    <head> 
        <title>EDIT DATA</title>
    </head>
    
    <body>
        <h3 align="center">EDIT DATA PEMESANAN</h3>

        <?php
            include "koneksi.php";
            if(isset($_GET['kodepenerbangan']))
            {
                $kodepenerbangan=$_GET['kodepenerbangan'];
            }

            $perintah="SELECT * FROM tbl_pemesanan WHERE kode_penerbangan='$kodepenerbangan'";
            $query=mysqli_query($db, $perintah);

            while ($row=mysqli_fetch_array($query)) {
                ?>
                <form action="prosesdit.php" method="POST">
                    <table align="center">
                        <tr>
                            <td>Nama Maskapai  </td>
                            <td>
                                <input type="hidden" name="kodepenerbangan" value="<?php echo $row['kode_penerbangan']?>"></input>
                                <input type="text" name="namamaskapai" value="<?php echo $row['nama_maskapai']?>"></input>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga Tiket </td>
                            <td>
                                <input type="text" name="hargatiket" value="<?php echo $row['harga']?>"></input>
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
                        <tr>
                            <td>Harga Tiket  </td>
                            <td>
                                <input type="submit" value="SIMPAN EDIT"></input>
                            </td>
                        </tr>
                    </table>
                </form>
            <?php
            }
        ?>
        
    </body>
</html>