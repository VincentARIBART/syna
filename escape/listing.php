<?php 
$nav_en_cours = 'listing'; 
include("include/header.php");

?>
<script type="text/javascript">
	$(function(){

	// Instantiate MixItUp:

	$('.container-left').mixItUp();

});
</script>
<div class="container-left m-t-10">
	<div class="article shadow m-b-10 mix cat-sea" data-myorder="2">
		<div class="icon-circle blue"><i class="icon-sea"></i></div>
		<div class="content-article">
			<h2>PASTRY DANISH CUPCAKE</h2>
			<div class="sep"></div>
			<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée caramels wafer gingerbread chocolate</p>
			<a href="article.php" class="btn-2">A Partir de 43€<i class="icon-arrow-r"></i></a>
		</div>
		<figure>
			<img class="img-second" src="media/img/5.png">
			<img src="media/img/2.png">
			<svg preserveAspectRatio="none" viewBox="0 0 180 320">
				<path d="M 300,320 97,320 114,0 300,0 z"></path>
			</svg>
		</figure>
	</div>
	<div class="article shadow m-b-10 mix cat-mount" data-myorder="1">
		<div class="icon-circle green"><i class="icon-mountain"></i></div>
		<div class="content-article">
			<h2>RECTUM ARIBARTUM</h2>
			<div class="sep"></div>
			<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée caramels wafer gingerbread chocolate</p>
			<a href="article.php" class="btn-2">A Partir de 56€<i class="icon-arrow-r"></i></a>
		</div>
		<figure>
			<img class="img-second" src="media/img/6.png">
			<img src="media/img/3.png">
			<svg preserveAspectRatio="none" viewBox="0 0 180 320">
				<path d="M 300,320 97,320 114,0 300,0 z"></path>
			</svg>
		</figure>
	</div>
	<div class="article shadow m-b-10 mix cat-sea" data-myorder="3">
		<div class="icon-circle blue"><i class="icon-sea"></i></div>
		<div class="content-article">
			<h2>CA VESALOPE DICI</h2>
			<div class="sep"></div>
			<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée caramels wafer gingerbread chocolate</p>
			<a href="article.php" class="btn-2">A Partir de 243€<i class="icon-arrow-r"></i></a>
		</div>
		<figure>
			<img class="img-second" src="media/img/7.png">
			<img src="media/img/4.png">
			<svg preserveAspectRatio="none" viewBox="0 0 180 320">
				<path d="M 300,320 97,320 114,0 300,0 z"></path>
			</svg>
		</figure>
	</div>
	<div class="article shadow m-b-10 mix cat-sea" data-myorder="8">
		<div class="icon-circle blue"><i class="icon-sea"></i></div>
		<div class="content-article">
			<h2>PASTRY DANISH CUPCAKE</h2>
			<div class="sep"></div>
			<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée caramels wafer gingerbread chocolate</p>
			<a href="article.php" class="btn-2">A Partir de 43€<i class="icon-arrow-r"></i></a>
		</div>
		<figure>
			<img class="img-second" src="media/img/5.png">
			<img src="media/img/2.png">
			<svg preserveAspectRatio="none" viewBox="0 0 180 320">
				<path d="M 300,320 97,320 114,0 300,0 z"></path>
			</svg>
		</figure>
	</div>
	<div class="article shadow m-b-10 mix cat-mount" data-myorder="16">
		<div class="icon-circle green"><i class="icon-mountain"></i></div>
		<div class="content-article">
			<h2>RECTUM ARIBARTUM</h2>
			<div class="sep"></div>
			<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée caramels wafer gingerbread chocolate</p>
			<a href="article.php" class="btn-2">A Partir de 56€<i class="icon-arrow-r"></i></a>
		</div>
		<figure>
			<img class="img-second" src="media/img/6.png">
			<img src="media/img/3.png">
			<svg preserveAspectRatio="none" viewBox="0 0 180 320">
				<path d="M 300,320 97,320 114,0 300,0 z"></path>
			</svg>
		</figure>
	</div>
	<div class="article shadow m-b-10 mix cat-sea" data-myorder="7">
		<div class="icon-circle blue"><i class="icon-sea"></i></div>
		<div class="content-article">
			<h2>CA VESALOPE DICI</h2>
			<div class="sep"></div>
			<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée caramels wafer gingerbread chocolate</p>
			<a href="article.php" class="btn-2">A Partir de 243€<i class="icon-arrow-r"></i></a>
		</div>
		<figure>
			<img class="img-second" src="media/img/7.png">
			<img src="media/img/4.png">
			<svg preserveAspectRatio="none" viewBox="0 0 180 320">
				<path d="M 300,320 97,320 114,0 300,0 z"></path>
			</svg>
		</figure>
	</div>
</div>
<div class="container-right m-t-10">
	<ul class="search-option shadow">
		<li><img src="media/img/icon-filter.png">NOS FILTRES</li>
		<li><a href="#" class="filter" data-filter="all"><i class="icon-localisation"></i>Tous</a></li>
		<li><a href="#" class="filter" data-filter=".cat-sea"><i class="icon-sea"></i>Bord de Mer</a></li>
		<li><a href="#" class="filter" data-filter=".cat-mount"><i class="icon-mountain"></i>Montagne</a></li>
		<li><a href="#" class="sort" data-sort="myorder:asc"><i class="icon-arrow-t"></i>Prix croissant</a></li>
		<li><a href="#" class="sort" data-sort="myorder:desc"><i class="icon-arrow-b"></i>Prix Décroissant</a></li>
	</ul>
</div>


<?php include("include/footer.php"); ?>