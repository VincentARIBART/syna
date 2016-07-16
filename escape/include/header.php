<!DOCTYPE html>
<html>

<head lang="fr">
    <meta charset="utf-8">
    <title>Projet CMS</title>
    <meta name="title" content="Projet CMS" />
    <meta name="description" content="Projet CMS" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" id="favicon" href="favicondg.ico">
    <meta name="author" content="Vinz Lik3">

    <link href='css/reset.css' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/week-picker.js"></script>


    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="media/img/favicon.ico" type="media/img/favicon.ico">

</head>

<body>


    <div class="container">
        <nav>
            <div class="header shadow">
                <a href="#" class="header-logo"></a>
                <ul class="header-menu">
                    <li  ><a href="index.php" <?php if ($nav_en_cours == 'index') {echo ' class="active-menu"';} ?>><i class="icon-home"></i>Accueil</a></li>
                    <li class="sep"></li>
                    <li ><a href="listing.php" <?php if ($nav_en_cours == 'listing') {echo ' class="active-menu"';} ?>><i class="icon-localisation"></i>Nos Logements</a></li>
                    <li class="sep"></li>
                    <li><a href="proximity.php" <?php if ($nav_en_cours == 'proximity') {echo ' class="active-menu"';} ?>><i class="icon-proximity"></i>A Proximité</a></li>
                    <li class="sep"></li>
                    <li><a href="contact.php" <?php if ($nav_en_cours == 'contact') {echo ' class="active-menu"';} ?>><i class="icon-contact"></i>Contact</a></li>
                </ul>
            </div>
        </nav>