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
        <form action="instruksi.php" method="POST">
        <table> 
            <h2>Pembayaran</h2>
            <tr>
                <?php
                $self = $_SERVER['REQUEST_URI'];
                function pembayaran_form(){  ?>
                <input type="radio" name="pembayaran" id="pembayaran1" value="Transfer Bank" required="required"/>Transfer Bank
                <input type="radio" name="pembayaran" id="pembayaran2" value="COD" required="required"/>COD 
                <input type="radio" name="pembayaran" id="pembayaran3" value="Unimaret / i.Uni" required="required"/>Unimaret / i.Uni
                <input type="radio" name="pembayaran" id="pembayaran4" value="Betamart / Betamidi / Dan+Dan" required="required"/>Betamart / Betamidi / Dan+Dan
                <?php } ?>
            </tr>
            <tr>
                <td>Silakan pilih metode pembayaran yang Anda inginkan: </td>
            </tr>
            <tr><td>
                <?php pembayaran_form();?></td>
                <td><br></br></td>
            </tr>
            <tr>
                <td colspan="3" align="left"><a href="index.php"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </body>
    <footer><br></br>
        &copy Copyright Land of Gente 2022 | Best Clothing Brand in Multiverse<br></br>
    </footer>
</html>