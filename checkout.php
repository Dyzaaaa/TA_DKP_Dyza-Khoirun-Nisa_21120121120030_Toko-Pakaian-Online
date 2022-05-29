<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
</head>
<body>
    <header>
        <h1>Checkout</h1>
    </header>
    <div class="page">
        <form action="harga.php" method="POST">
        <table> 
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td>
                    <?php $nama_barang = array('Land of Gente Shirt', 'Land of Gente Sneakers', 'Land of Gente Sweatpants', 'Land of Gente Hoodie', 'Land of Gente Handbag', 'Land of Gente Bucket Hat');?>
                    <select name="nama_barang">
                        <?php
                    foreach($nama_barang as $item) {
                        echo "<option value='$item'>$item</option>";
                    } ?>
                    </select>
                    </td>
            <tr> 
                <td>Jumlah Barang</td>
                <td>:</td>
                <td><input type="number" name="jumlah" placeholder="Masukkan Jumlah Barang" required="" min="1"</td>
            </tr> 
            <td>
            <br>
        </td>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required="" onkeypress="return event.charCode < 48 || event.charCode  >57"></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>:</td>
                <td><input type="tel" name="nohp" placeholder="Masukkan Nomor HP" required=""></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>:</td>
                <td><input type="email" name="email" placeholder="Masukkan E-mail" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" required=""></td>
            </tr>
            <td>
            <br>
        </td>
            <tr>
                <td colspan="3" align="left"><input type="submit" name="simpan" value="Next" class="btn2"></td>
            </tr>
            </table>
        </form>
    </div>
</body>

