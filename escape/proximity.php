<?php 
$nav_en_cours = 'proximity'; 
include("include/header.php");
?>
<script>
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


	<div id="map" class="map shadow m-t-10">
		
	</div>
	<div class="table-prox shadow m-t-10">
		<div class="title-table-prox">
			<h2><i class="icon-proximity"></i>Veuillez séléctionner votre gite..</h2>
			<div class="select-prox">
				<i class-"icon-arrow-b"></i>
			    <select>
			   		<option selected>Liste de nos gites ..</option>
				    <option>Les 3 petites Toriblack et le bucheron</option>
				    <option>Le retour de la licorne sans corne</option>
			    </select>
			</div>
		</div>
		<table>
			<tr>
				<td><strong>Parc des bisounours</strong></td>
				<td>4 rue de la bierre verte - 69160</td>
				<td>à <strong>4km</strong> du gite</td>
			</tr>
			<tr>
				<td><strong>Jacquard - Préfecture</strong></td>
				<td>Route de paris les ouvrier - 69130</td>
				<td>à <strong>26km</strong> du gite</td>
			</tr>
			<tr>
				<td><strong>La braguette ouverte</strong></td>
				<td>Avenue de la grosse baguette - 69130</td>
				<td>à <strong>2km</strong> du gite</td>
			</tr>
			<tr>
				<td><strong>L'ile des pilleurs de timbes</strong></td>
				<td>Les bateaux du rivage - 69130</td>
				<td>à <strong>23km</strong> du gite</td>
			</tr>
			<tr>
				<td><strong>George le Boulanger</strong></td>
				<td>Chambre 3 des pommier d’ici et de pas la - 69160</td>
				<td>à <strong>14km</strong> du gite</td>
			</tr>
		</table>

	</div>

<?php include("include/footer.php"); ?>