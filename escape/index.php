<?php 
$nav_en_cours = 'index'; 
include("include/header.php");

?>

	<div class="main-slider shadow m-t-10">
		<div class="slider">
            <div class="slider-container">
                <div class="slider-wrapper">
                    <div class="slide" style="background:url(media/img/slider/background-1.png)">
                    	<h1>CANDY GRECE GITES</h1>
                    	<p>CHOCOLATE CAKE SWEET EASYTU</p>
                    	<a href="#" class="btn-1">CLIQUEZ ICI</a>
                    </div>
                    <div class="slide" style="background:url(media/img/slider/background-1.png)">
                    	<h1>LOREM IPSULUM DOLORS</h1>
                    	<p>CHOOBOTUM DESTAL EL METOS</p>
                    	<a href="#" class="btn-1">CLIQUEZ ICI</a>
                    </div>
                    <div class="slide" style="background:url(media/img/slider/background-1.png)">
                    	<h1>RECTUM DARIBARTUM</h1>
                    	<p>SWEET EASYTU TERUMINOUT DEMI</p>
                    	<a href="#" class="btn-1">CLIQUEZ ICI</a>
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
	<div class="desc shadow m-t-10 m-b-10">
		<div class="cont-desc">
			<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée caramels. Wafer gingerbread chocolate jujubes brownie marzipan gummies muffin cupcake. Halvah chupa chups oat cake candy pudding danish.</p>
		</div>
	</div>
	<div class="top-article shadow">
		<div class="icon-circle blue"><i class="icon-sea"></i></div>
		<div class="content-top-article">
			<h2>PASTRY DANISH CUPCAKE</h2>
			<div class="sep"></div>
			<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée caramels wafer gingerbread chocolate</p>
			<a href="#" class="btn-2">A Partir de 23€<i class="icon-arrow-r"></i></a>
		</div>
		<figure>
			<img src="media/img/1.png">
			<svg preserveAspectRatio="none" viewBox="0 0 180 320">
				<path d="M 181,320 73,320 91,0 181,0 z"></path>
			</svg>
		</figure>
	</div>
	<div class="notice shadow">
		<h3>Sylvain G.</h3>
		<p>Chocolate cake sweet ice cream marshmallow powder. Pastry danish cupcake dragée.</p>
		<ul>
			<li><i class="icon-avis-1"></i></li>
			<li><i class="icon-avis-2 avis-active"></i></li>
			<li><i class="icon-avis-3"></i></li>
			<li><i class="icon-avis-4 "></i></li>
			<li><i class="icon-avis-5"></i></li>
		</ul>
	</div>


<?php include("include/footer.php"); ?>