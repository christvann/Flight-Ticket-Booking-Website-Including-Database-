<html>
    <head>
        <title>FORM PEMESANAN</title>
    </head>
    <body>
        <h3 align="center">Form Orderan</h3>
        <form method="POST" action="simpandata.php" align="center">
            <div>
                <label>Masukkan Kode Penerbangan &ensp;</label>
                <input name="kodepenerbangan" type="text">
            </div>
            <br>
            <div>
                <label>Masukkan Nama Maskapai &ensp;</label>
                <input name="namamaskapai" type="text">
            </div>
            <br>
            <div>
                <label>Masukkan Harga Tiket &ensp;</label>
                <input name="hargatiket" type="text">
            </div>
            <br>
            <div>
                <label>Masukkan Jumlah Tiket &ensp;</label>
                <input name="jumlahtiket" type="text">
            </div>
            <br>
            <div>
                <input type="submit" value="Simpan">
            </div>
        </form>
    </body>
</html>