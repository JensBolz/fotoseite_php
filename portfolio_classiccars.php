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
                                        <li><a href="contact.php">Kontakt</a></li>
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
                <div class="container">
                    <div class="gallery gall__1">
                        <div class="row">
                            <div class="grid_4">
                                <h3>Classic Cars</h3>
                            </div>
                            <div class="clear"></div>
                            <?php
                            
                            $dir_bigfiles = "images/gallery/big/classiccars/";
                            $dir_thumbs = "images/gallery/thumbs/classiccars/";

                            include './services/load_pictures.php';

                            
                            
                           

                     
                            for ($i = 0; $i < 12; $i++) {
                                $path_bigfiles = $dir_bigfiles . $file_array[$i]; //Verzeichnis mit Filename verbunden
                                $path_thumbnails = $dir_thumbs . $thumbnail_array[$i];


                                echo "<div class=\"grid_4\"> \n";
                                echo "\t\t\t\t\t<div class=\"gal_item\">\n";
                                echo "\t\t\t\t\t\t<a href=\"$path_bigfiles\"> \n";

                                echo "\t\t\t\t\t\t\t<img src=\"$path_thumbnails\">\n";
                                echo "\t\t\t\t\t\t\t<div class=\"gal_caption\">\n";
                                echo "\t\t\t\t\t\t\t\t<time datetime=\"2014-01-01\">30 Jul 2016</time>\n";
                                echo "\t\t\t\t\t\t\t</div>\n";
                                echo "\t\t\t\t\t\t\t<span class=\"gal_magnify\"></span>\n";
                                echo "\t\t\t\t\t\t</a>\n";
                                echo "\t\t\t\t\t</div>\n";
                                echo "\t\t\t\t</div>\n";
                                echo "\t\t\t\t";
                            }
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