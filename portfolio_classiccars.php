<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio - Classic Cars</title>
        <?php
        include './head.php';
        ?>
    </head>
    <body class="" id="top" oncontextmenu="return true">
        <!--==============================header=================================-->
        <header>
            <div id="stuck_container">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <div class="logoText">Jens Bolz Fotografie</div>
                            <div class="menu_block ">
                                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                                    <ul class="sf-menu">
                                        <li><a href="portfolio_main.php">Portfolio</a></li>
                                        <li class="current">Classic Cars</li>
                                         <li><a href="about.php">Über mich</a></li>
                                        <!--                                        <li><a href="references.html">Referenzen</a></li>-->
                                        <li><a href="contact.php">Kontakt</a></li>
                                        <!--                                         <li><a href="http://blog.jens-bolz.de/" target="_blank">Blog</a></li>-->
                                    </ul>
                                </nav>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block1">Classic Cars</div>  
            </div>
        </header>
        <div class="main">
            <!--=====================Content======================-->
             <section class="content cont_pad1">
                <div class="container">
                    <div class="gallery gall__1">
                        <div class="row">
                            
                            <div class="clear"></div>
                            <?php
                            $dir_bigfiles = "images/gallery/big/classiccars/";
                            $dir_thumbs = "images/gallery/thumbs/classiccars/";

                            include './generate_gallery.php';
                            ?>
                        </div>
                    </div>
                </div>
            </section>           
        <!--==============================footer=================================-->
        <footer>
                <section class="block1"></section>
                <?php
                include './footer.php';
                ?>
            </footer>
    </body>
</html>