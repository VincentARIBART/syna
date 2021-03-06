<?php $nav_en_cours='listing' ; include( "include/header.php"); ?>

<div class="main-slider shadow m-t-10">
    <div class="slider">
        <div class="slider-container">
            <div class="slider-wrapper">
                <div class="slide" style="background:url(media/img/slider/background-2.png)">
                </div>
                <div class="slide" style="background:url(media/img/slider/background-3.png)">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function() {
            Slider.init({
                target: $('.slider'),
                time: 6000
            });
        })();
    </script>
</div>
<div id="info-article" class="shadow m-t-10 p-30">
    <h2>La rose trémière</h2>
    <hr />
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <ul id="list-room">
        <li>Personnes
            <br/>
            <h2>8</h2>
        </li>
        <li class="sep"></li>
        <li>Chambres
            <br/>
            <h2>3</h2>
        </li>
        <li class="sep"></li>
        <li>Lits simples
            <br/>
            <h2>2</h2>
        </li>
        <li class="sep"></li>
        <li>Lits double
            <br/>
            <h2>3</h2>
        </li>
        <li class="sep"></li>
        <li>Salles de bains
            <br/>
            <h2>2</h2>
        </li>
        <li class="sep"></li>
        <li>WC
            <br/>
            <h2>1</h2>
        </li>
    </ul>
    <hr class="clear" />
    <h4 class="inline">Le logement</h4>
    <ul class="inline">
        <li>Type : <span>Logement entier</span>
        </li>
        <li>Type de propiété : <span>Villa</span>
        </li>
        <li>Surface : <span>63m</span>
        </li>
        <li>Nombre d'étages : <span>2</span>
        </li>
    </ul>
    <hr class="clear" />
    <h4 class="inline">Electroménager</h4>
    <ul class="inline" id="list-electro">
        <li><i class="icon-localisation"></i>Micro-onde</li>
        <li><i class="icon-localisation"></i>Grille-pain</li>
        <li><s>Toaster</s>
        </li>
        <li><i class="icon-localisation"></i>Caftière</li>
        <li><i class="icon-localisation"></i>Frigo</li>
        <li><i class="icon-localisation"></i>Four</li>
        <li><i class="icon-localisation"></i>Lave vaisselle</li>
        <li><s>Ordinateur</s>
        </li>
        <li><i class="icon-localisation"></i>Internet</li>
        <li><s>Congélateur</s>
        </li>
    </ul>
    <ul class="inline" id="list-electro">
        <li><i class="icon-localisation"></i>Télévision</li>
        <li><i class="icon-localisation"></i>Chauffage</li>
        <li><i class="icon-localisation"></i>Climatisation</li>
        <li><s>Interphone</s>
        </li>
        <li><i class="icon-localisation"></i>Machine à laver</li>
        <li><s>Sèche linge</s>
        </li>
        <li><s>Fer à repasser</s>
        </li>
        <li><s>Sèche cheveux</s></s>
        </li>
        <li><s>Réfrigérateur</s>
        </li>
    </ul>
    <hr class="clear" />
    <h4 class="inline">Les plus</h4>
    <ul class="inline" id="list-plus">
        <li>Animaux acceptés</li>
        <li>Fumeurs acceptés</li>
        <li>Cheminée</li>
        <li>Piscine collective</li>
        <li>Jacuzzi</li>
    </ul>
    <ul class="inline" id="list-plus">
        <li>Salle de gym</li>
        <li>Parking privé</li>
        <li>Balcon</li>
        <li>Jardin</li>
        <li>Congélateur</li>
    </ul>

</div>
<div class="container-right-304 m-b-10">
    <div id="price-article" class="shadow m-t-10 p-30">
        <ul>
            <li>A partir de :</li>
            <li><span>360 €</span>
            </li>
            <li>par semaine</li>
        </ul>
        <hr />
        <p>Selectionnez une date d'arrivée et de depart pour estimer le prix de votre location *</p>
        <input data-weekpicker="weekpicker" data-week_start="6" />
        <i class="icon-localisation"></i>
        <p>*Location du samedi au samedi</p>
    </div>
    <div id="option-article" class="shadow m-t-10 p-30">
        <h2>Les options</h2>
        <hr />
        <ul>
            <li><i class="icon-localisation"></i>Internet<span>10€</span>
            </li>
            <li><i class="icon-localisation"></i>Machine à laver<span>6€</span>
            </li>
            <li><i class="icon-localisation"></i>Linges de maison<span>15€</span>
            </li>
            <li><i class="icon-localisation"></i>Télévision<span>10€</span>
            </li>
            <li><i class="icon-localisation"></i>Vélos<span>35€</span>
            </li>
            <li><i class="icon-localisation"></i>Bains de soleil<span>20€</span>
            </li>
        </ul>
    </div>
    <div id="meteo-article" class="shadow m-t-10 p-30">
        <ul class="inline">
            <li>24°</li>
            <li>Soleil</li>
            <li>Vent : 5km/h Sud Est</li>
        </ul>
        <ul class="inline">
            <li>Aujourd'hui</li>
            <li>Vendredi 23 Oct</li>
            <li><i class="icon-mountain"></i>
            </li>
        </ul>
    </div>
    <div id="notice-article" class="shadow m-t-10 p-30">
        <h3>Sylvain G.</h3>
        <p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée.</p>
        <ul>
            <li><i class="icon-avis-1"></i>
            </li>
            <li><i class="icon-avis-2 avis-active"></i>
            </li>
            <li><i class="icon-avis-3"></i>
            </li>
            <li><i class="icon-avis-4 "></i>
            </li>
            <li><i class="icon-avis-5"></i>
            </li>
        </ul>
        <p>32 avis - Note moyenne : 4,2 / 5</p>
    </div>
</div>
<div class="clear" id="button-toggle-container">
    <button class="box-trigger  btn-toggle shadow f-l m-r-10" data-box="box-1">A proximité<i class="icon-arrow-b"></i>
    </button>
    <button class="box-trigger  btn-toggle shadow" data-box="box-2">Calculez votre trajet<i class="icon-arrow-b"></i>
    </button>
</div>
<div class="box box-1 table-prox shadow m-t-10">
    
    <table>
        <tr>
            <td><strong>Parc des bisounours</strong>
            </td>
            <td>4 rue de la bierre verte - 69160</td>
            <td>à <strong>4km</strong> du gite</td>
        </tr>
        <tr>
            <td><strong>Jacquard - Préfecture</strong>
            </td>
            <td>Route de paris les ouvrier - 69130</td>
            <td>à <strong>26km</strong> du gite</td>
        </tr>
        <tr>
            <td><strong>La braguette ouverte</strong>
            </td>
            <td>Avenue de la grosse baguette - 69130</td>
            <td>à <strong>2km</strong> du gite</td>
        </tr>
        <tr>
            <td><strong>L'ile des pilleurs de timbes</strong>
            </td>
            <td>Les bateaux du rivage - 69130</td>
            <td>à <strong>23km</strong> du gite</td>
        </tr>
        <tr>
            <td><strong>George le Boulanger</strong>
            </td>
            <td>Chambre 3 des pommier d’ici et de pas la - 69160</td>
            <td>à <strong>14km</strong> du gite</td>
        </tr>
    </table>
</div>
<div id="calculate" class="box box-2 shadow m-t-10">
    <div id="map" class="map">
    </div>
    <div class="p-30">
    	<h2 class="m-b-10">Calculez le temps du trajet en voiture pour vous rendre au gite</h2>
    	<form class="m-t-10 m-b-10">
    		<p class="inline">Adresse du domicile :</p>
    		<input id="message" type="text" value="" name="message">
    		<button type="submit" class="m-l-10">Calculer le trajet<i class="icon-localisation m-l-10"></i></button>
    	</form>
    	<p class="inline m-t-10">Temps de voyages :</p>
    	<h2 class="inline">3h28</h2>
    	<button class="m-l-10 inline">Afficher l'itineraire<i class="icon-localisation m-l-10"></i></button>
    </div>
</div>
<script>
    (function() {
        var triggers, boxes, selected;
        triggers = document.querySelectorAll('.box-trigger');
        boxes = document.querySelectorAll('.box');
        Array.prototype.forEach.call(triggers, function(trigger) {
            trigger.addEventListener('click', function() {
                selected = document.querySelector('.' + this.getAttribute('data-box'));
                if (selected.classList.contains('is-active')) {
                    selected.classList.remove('is-active');
                    return false;
                }
                Array.prototype.forEach.call(boxes, function(box) {
                    box.classList.remove('is-active');
                });
                selected.classList.add('is-active');
            }, false);
        });
    }());
    function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(47.615625, -3.154923),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php include( "include/footer.php"); ?>