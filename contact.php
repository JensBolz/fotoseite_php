<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kontakt</title>
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
                                        <li><a href="index.php">Start</a></li> 
                                        <li><a href="portfolio_main.php">Portfolio</a></li>
                                        <li><a href="about.php">Über mich</a></li>
                                        <li class="current">Kontakt</li>
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
            <!--=====================Imprint======================-->
             <div class="block1">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <div class="rel">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <section class="content">
                <div class="container">
                    <div class="row">
<!--                        <div class="grid_12">
                            <div class="map">
                                <figure>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
                                </figure>
                            </div>
                        </div>-->
                        <div class="clear"></div>
                        <div class="grid_5">
                            <h3>Kontakt</h3>                    
                            Jens Bolz Photography <br>
                            Pommernstraße 7<br>
                            76646 Bruchsal<br>
                            Telephone: +49 172 625 9044<br>                       
                            E-mail: <a href="#">foto@jens-bolz.de</a>
                        </div>
                        <div class="grid_6 preffix_1">
                            <h3>Kontakt-Formular</h3>
                            <form id="form">
                                <div class="success_wrapper">
                                    <div class="success-message">Ihre Anfrage wurde übermittelt</div>
                                </div>
                                <label class="name">
                                    <input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid name.</span>
                                </label>
                                <label class="email">
                                    <input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid email.</span>
                                </label>
                                <label class="phone">
                                    <input type="text" placeholder="Telefon" data-constraints="@Required @JustNumbers"/>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid phone.</span>
                                </label>
                                <label class="message">
                                    <textarea placeholder="Nachricht" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*The message is too short.</span>
                                </label>
                                <div>
                                    <div class="clear"></div>
                                    <div class="btns">
                                        <a href="#" data-type="reset" class="btn bt__2">Löschen</a>
                                        <a href="#" data-type="submit" class="btn bt__2">Absenden</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bottom_block"></section>
        </div>
        <!--==============================footer=================================-->
        <footer>
                 <?php
                 include './footer.php';
                 ?>
             </footer>
    </body>
</html>