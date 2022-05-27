<?php
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];

if($nama_barang=="Land of Gente Shirt"){
    $harga="10000";
}elseif($nama_barang=="Land of Gente Sneakers"){
    $harga="30000";
}elseif($nama_barang=="Land of Gente Sweatpants"){
    $harga="15000";
}elseif($nama_barang=="Land of Gente Hoodie"){
    $harga="20000";
}elseif($nama_barang=="Land of Gente Handbag"){
    $harga="25000";
}elseif($nama_barang=="Land of Gente Bucket Hat"){
    $harga="5000";
}else{
    return false;
}

$hasil = $harga * $jumlah;

if($hasil>=20000){
    $hasil_diskon = $hasil * 0.1;
    $hasil = $hasil - $hasil_diskon;

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Toko Pakaian Online</title>
        <meta charset="UTF-8">
        <meta name="description" contents="Land of Gente">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
    <header><br></br>
            <center><img src="images/logo1.png" width="480" height="270" alt="Logo"/></center>
            <nav id="navigation">
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=checkout">Checkout</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div class="page">
        <form action="pembayaran.php" method="POST">
        <table> 
            <h2>Total Harga</h2>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php echo $harga." Drachma";?></td>
            </tr> 
            <tr>
                <td>Jumlah Barang</td>
                <td>:</td>
                <td><?php echo $jumlah." Buah";?></td>
            </tr>
            <tr>
                <td>Diskon</td>
                <td>:</td>
                <td><?php echo $hasil_diskon;?>
                <?php if($harga*$jumlah>=20000){
                    echo " Drachma (10%)";
                }else{
                    echo "-";}?></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td><?php echo $hasil." Drachma";?></td>
            </tr>
            <tr>
                <td colspan="3" align="left"><a href="index.php"><input type="submit" value="Next"></a></td>
                <td><br></br></td>
            </tr>
        </table>
    </body>
    <footer><br></br>
        &copy Copyright Land of Gente 2022 | Best Clothing Brand in Multiverse<br></br>
    </footer>
</html>