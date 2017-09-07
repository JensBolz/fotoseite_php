

<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Portfolio - People</title>
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
                                    <img src="../images/logo.png" alt="Your Happy Family">
                                </a>
                            </h1>
                            <div class="menu_block ">
                                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                                    <ul class="sf-menu">
                                        <li><a href="index.php">Zurück</a></li>
                                        <li class="current">Portfolio</li>
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
                                <h3>Menschen</h3>
                            </div>
                    <?php
                    //Das auszulesende Verzeichnis
                        $dir = "images/gallery/big/classiccars/";

                        //Das Ziel-Array
                        $file_array = Array();

                        //Wenn das Verzeichnis existiert...
                        if(is_dir($dir))    {
                            //...öffne das Verzeichnis
                            $handle = opendir($dir);
                            //Wenn das Verzeichnis geöffnet werden konnte...
                            if(is_resource($handle))    {
                                //...lese die enthaltenen Dateien aus,...
                                while($file = readdir($handle))    {
                                    //...prüfe ob es Directory-Verweise sind...
                                    if($file != "." && $file != "..")
                                        //...und schreibe sie in das Ziel-Array
                                        array_push($file_array, $file);
                                }
                            }else{
                                echo "Das &Ouml;ffnen des Verzeichnisses ist fehlgeschlagen";
                            }
                        }else{
                            echo "Das Verzeichnis existiert nicht";
                        }
                        //Zum Schluss wird das Array ausgegeben
                       // print_r($file_array);


                        for ($i = 0; $i < 12; $i++) {
                             $path = $dir . $file_array[$i]; //Verzeichnis mit Filename verbunden

                             echo "<div class=\"grid_4\"> \n" ;
                             echo "\t\t\t\t\t<div class=\"gal_item\">\n";
                             echo "\t\t\t\t\t\t<a href=\"$path\" > \n";
                             echo "\t\t\t\t\t\t\t<img src=\"$path\">\n"; 
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