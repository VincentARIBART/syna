<?php 
$nav_en_cours = 'contact'; 
include("include/header.php");
?>
<script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>
	<div class="contact-form m-t-10 shadow">
		<form id="" name="" method="post" ajax="post.php" action='#'>
			<i class="icon-user"></i>
			<span>*</span>
			<input class="icon-phone" id="name" name="name" required="required" type="text" placeholder="Nom & Prenom"/>
			<i class="icon-phone"></i>
			<span>*</span>
			<input id="phone" name="phone" required="required" type="text" placeholder="N° de téléphone"/>
			<i class="icon-contact"></i>
			<span>*</span>
			<input id="mail" name="mail" required="required" type="text" placeholder="Adresse e-mail"/>
			<i class="icon-pushpin"></i>
			<span>*</span>
			<input id="title" name="title" required="required" type="text" placeholder="Objet du message"/>
			<span>*</span>
			<textarea id="message" name="message" required="required" type="text" placeholder="Votre message ..."></textarea>
			<p>* Informations necessaire a l'envoie du message</p>
			<button id="button" class="inputbtn inputform5" type="submit" name="button">Envoyez votre message</button> 
			<span id="result" class="classered"></span>
		</form>
		<div class="contact-info">
			<h2 class="clear">Nos Informations<i class="icon-user"></i></h2>
			<p>La Tante de Aribartum</p>
			<p>42500 - France</p>
			<p>Avenue de la Toriblack des bois</p>
			<p>06.12.58.64.92</p>
			<p>04.68.75.24.16</p>
			<p>contact@whitefox.fr</p>
			<div id="map" class="map-contact"></div>
		</div>
	</div>
<?php 
include("include/footer.php");
?>