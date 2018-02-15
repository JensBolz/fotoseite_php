<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Home</title>
        <?php
        include './head.php';
        ?>
    </head>
    <body class="page1" id="top" oncontextmenu="return true">
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
                            <div class="menu_block">
                                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                                    <ul class="sf-menu">
                                        <li><a href="index.php">Start</a></li>
                                        <li class="current">Portfolio</a></li>
                                        <li><a href="about.php">Über mich</a></li>
                                        <li><a href="contact.php">Kontakt</a></li>                               

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
                
            <section>
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <h2>Portfolio</h2>                            
                            <div class="gallery">
                                <div class="row">
                                    <div class="grid_4 gal_item">
                                        <a href="portfolio_people.php" >
                                            <img src="images/gallery/thumbs/people/thumb1.jpg" alt="">
                                            <div class="gal_caption" >Menschen</div>
                                        </a>
                                    </div>
                                    <div class="grid_4 gal_item" >
                                        <a href="portfolio_classiccars.php">
                                            <img src="images/home/portfolio/thumbs/classiccars_thumb.jpg" alt="">
                                            <div class="gal_caption">Classic Cars</div>
                                        </a>
                                    </div>
                                    <div class="grid_4 gal_item" >
                                        <a href="portfolio_architecture.php">
                                            <img src="images/home/portfolio/thumbs/arcitecture_thumb.jpg" alt="">
                                            <div class="gal_caption">Architektur</div>
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="grid_4 gal_item" >
                                        <a href="portfolio_animales.php">
                                            <img src="images/home/portfolio/thumbs/animal_thumb.jpg" alt="">
                                            <div class="gal_caption">Tiere und Insekten</div>
                                        </a>
                                    </div>
                                    <div class="grid_4 gal_item" >
                                        <a href="portfolio_landscape.php">
                                            <img src="images/home/portfolio/thumbs/landscape_thumb.png" alt="">
                                            <div class="gal_caption">Landschaft</div>
                                        </a>
                                    </div>
                                    <div class="grid_4 gal_item">
                                        <a href="portfolio_nature.php">
                                            <img src="images/home/portfolio/thumbs/nature_thumb.jpg" alt="">
                                            <div class="gal_caption">Natur</div>
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="grid_4 gal_item">
                                        <a href="portfolio_cementaries.php">
                                            <img src="images/home/portfolio/thumbs/cementary_thumb.jpg" alt="">
                                            <div class="gal_caption">Friedhöfe</div>
                                        </a>
                                    </div>                                 
                                    <div class="grid_4 gal_item">
                                        <!--    <a href="portfolio_nude.php">
                                                <img src="images/home/portfolio/thumbs/cementary_thumb.jpg" alt="">
                                                <div class="gal_caption">Nude Art</div>
                                            </a>-->
                                    </div>
                                    <div class="grid_4 gal_item">
                                        <a href="portfolio_goth.php">
                                            <img src="images/home/portfolio/thumbs/goth_thumb.jpg" alt="">
                                            <div class="gal_caption">Goth und Fetisch</div>
                                        </a>
                                    </div>
                                </div>                           
                                                             

                                <div class="clear"></div>
                                <div class="grid_12">
                                    <section class="bottom_block"></section>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <?php
                include './footer.php';
                ?>
            </footer>
        </div>
    </body>
</html>
