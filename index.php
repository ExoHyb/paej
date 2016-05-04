<?php include "header.php" ?>
<div class="container">
    <!-- Ouverture ROW présentation PAEJ -->
    <div class="row">
        <div class="col-md-12">
            <div class="style-presentation">
                <h2>Qu'est que le PAEJ ?!</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
    <!-- Fermeture ROW présentation PAEJ -->
    <!-- Ouverture ROW pour Actualités et Action -->
    <div class="row">
        <!-- Ouverture Colonne pour Actualités -->
        <?php include "display_article_home.php"; ?>
        <!-- Fermeture Colonne pour Actualités -->
        <!-- Ouverture Colonne pour Action -->
        <div class="col-md-6">
            <div class="style-activites">
                <h2>Les activités du PAEJ</h2>
                <div class="separate-line"></div>
                <div class="row">
                    <div class="display-activites">
                        <div class="col-md-3">
                            <img class="img-responsive" src="http://placehold.it/250x250" alt="" />
                        </div>
                        <div class="col-md-9">
                            <div class="text-article">
                                <p id="date">
                                    29 mars 2016 à 11:55
                                </p>
                                <h3>Zombies reversus ab inferno</h3>
                                <p>
                                    Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separate-line"></div>
                <div class="row">
                    <div class="display-activites">
                        <div class="col-md-3">
                            <img class="img-responsive" src="http://placehold.it/250x250" alt="" />
                        </div>
                        <div class="col-md-9">
                            <div class="text-article">
                                <p id="date">
                                    29 mars 2016 à 11:55
                                </p>
                                <h3>Zombies reversus ab inferno</h3>
                                <p>
                                    Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separate-line"></div>
                <div class="row">
                    <div class="display-activites">
                        <div class="col-md-3">
                            <img class="img-responsive" src="http://placehold.it/250x250" alt="" />
                        </div>
                        <div class="col-md-9">
                            <div class="text-article">
                                <p id="date">
                                    29 mars 2016 à 11:55
                                </p>
                                <h3>Zombies reversus ab inferno</h3>
                                <p>
                                    Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separate-line"></div>
                <div class="button-home">
                    <a href="#">Plus d'activités...</a>
                </div>
            </div>
        </div>
        <!-- Fermeture Colonne pour Action -->
    </div>
    <!-- Fermeture ROW pour Actualités et Action -->
    <!-- Ouverture ROW pour Questions Fréquentes -->
    <div class="row">
        <div class="col-md-12">
            <div class="style-faq-accueil">
                <h2>Les Questions Fréquentes</h2>
                <ul>
                    <li><a href="#">Question ? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</a></li>
                    <li><a href="#">Question ? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</a></li>
                    <li><a href="#">Question ? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</a></li>
                    <li><a href="#">Question ? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</a></li>
                    <li><a href="#">Question ? Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</a></li>
                </ul>
                <div class="button-home">
                    <a href="#">Plus de questions...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fermeture ROW pour QUestions Fréquentes -->
    <!-- Code Embed FACEBOOK -->
    <div class="row">
        <div class="col-md-6">
            <div class="style-facebook">


                <?php include "embed_twitter.php" ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="style-contact">
                <h2>Contact</h2>
                <h3>Céline & Olivier</h3>
                <p>
                    06.70.80.73.36
                </p>
                <ul>
                    <li>Point Accueil Ecoute Jeunes</li>
                    <li>10-12 Rue des Clapiers</li>
                    <li>48000 Mende</li>
                </ul>
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:370px;width:550px;'><div id='gmap_canvas' style='height:370px;width:550px;'></div><div><small><a href="http://embedgooglemaps.com">									google maps carte							</a></small></div><div><small><a href="http://www.youtubeembedcode.com">generate youtube code</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(44.5198646,3.504471800000033),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(44.5198646,3.504471800000033)});infowindow = new google.maps.InfoWindow({content:'<strong>PAEJ</strong><br>10-12 rue des clapiers 48000<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
        </div>
    </div>
    <!-- Fin code embed Facebook -->
</div>
<?php include "footer.php" ?>