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
            <h2>Instruksi Pembayaran</h2>
        </body>
<?php
$pembayaran = $_POST['pembayaran'];
if($pembayaran=="Transfer Bank"){
    echo "Nomor Virtual Account:<br>";
    echo "82770897654321<br></br>";
    echo "Silakan bayar pesanan Anda ke nomor virtual account di atas<br>";
    echo "Pesanan Anda akan diproses secara otomatis jika pembayaran telah berhasil";
}elseif($_POST['pembayaran']=="COD"){
    echo "Pesanan Anda berhasil dan akan segera dikirimkan, Silakan bayar saat pesanan sampai";
}elseif($_POST['pembayaran']=="Unimaret / i.Uni"){
    echo "Kode Pembayaran:<br>";
    echo "LOGMMDM987654321<br></br>";
    echo "Silakan bayar pesanan Anda di Unimaret / i.Uni dengan kode pembayaran di atas<br>";
    echo "Pesanan Anda akan diproses secara otomatis jika pembayaran telah berhasil";
}elseif($_POST['pembayaran']=="Betamart / Betamidi / Dan+Dan"){
    echo "Kode Pembayaran:<br>";
    echo "LOGMMDM123456789<br></br>";
    echo "Silakan bayar pesanan Anda di Betamart / Betamidi / Dan+Dan dengan kode pembayaran di atas<br>";
    echo "Pesanan Anda akan diproses secara otomatis jika pembayaran telah berhasil";
}else{
    return false;
}

?>
<footer><br></br>
&copy Copyright Land of Gente 2022 | Best Clothing Brand in Multiverse<br></br>
</footer>
</html>
