

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portfolio - Mystic und Fetisch</title>
        <?php
            include './head.php';
        ?>
    </head>
    <body class="" id="top" oncontextmenu="return false">
        <!--==============================header=================================-->
        <header>
            <div id="stuck_container">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <h1>
                                <a href="index.php">
                                    <img src="images/logo.png" alt="Your Happy Family">
                                </a>
                            </h1>
                            <div class="menu_block ">
                                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                                    <ul class="sf-menu">
                                        <li><a href="index.php">Zurück</a></li>
                                        <li class="current">Portfolio</li>
<!--                                        <li><a href="references.html">Referenzen</a></li>-->
                                        <li><a href="contact.html">Kontakt</a></li>
<!--                                         <li><a href="http://blog.jens-bolz.de/" target="_blank">Blog</a></li>-->
                                    </ul>
                                </nav>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="main">
            <!--=====================Content======================-->
            <section class="content cont_pad1">
                <div class="container"><div class="ic">More Website Templates @ TemplateMonster.com - May 05, 2014!</div>
                    <div class="gallery gall__1">
                        <div class="row">
                            <div class="grid_4">
                                <h3>Mystic und Fetisch</h3>
                            </div>
                            <div class="clear"></div>
                            <?php
                            $dir_bigfiles = "images/gallery/big/goth/";
                            $dir_thumbs = "images/gallery/thumbs/goth/";

                            include './generate_gallery.php';
                            ?>                                                        
                           
                            
                        </div>
                    </div>
                </div>
            </section>
            <!--==============================Bot_block=================================-->
            <section class="bottom_block">
                
            </section>
        </div>
        <!--==============================footer=================================-->
        <footer>
                 <?php
                 include './footer.php';
                 ?>
             </footer>
    </body>
</html>