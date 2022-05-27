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
        <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'checkout':
                include "checkout.php";
                break;
                case 'about':
                include "about.php";
                break;
                case 'contact':
                include "contact.php";
                break;        
            }
        }
        else{
            include "home.php";
        }
        ?>
        <br></br><br></br>
        <footer>
        &copy Copyright Land of Gente 2022 | Best Clothing Brand in Multiverse<br></br>
    </footer>
    </body>
</html>