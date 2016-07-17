<!DOCTYPE html>
<html>

<head lang="fr">
    <meta charset="utf-8">
    <title>Panel Admin</title>
    <meta name="title" content="Panel Admin" />
    <meta name="description" content="Panel Admin" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" id="favicon" href="favicondg.ico">
    <meta name="author" content="Aribart Vincent et Gomez Damien">

    <link href='css/reset.css' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <link href='css/font.css' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/sortable.js"></script>
    <script src="js/navigation.js"></script>
    <script src="js/script.js"></script>

</head>

<body>

    <div id="menumain">
        <div id="main-logo">
            <button id="btn-menu" type="button"><p><i class="icon-simply-left"></i></p></button>
            <a href="">Moutain Panel</a>
        </div>
        <ul>
            <li class="active"><a href=""><i class="icon-grid"></i>Dashboard</a></li>
            <li><a href="slider.html"><i class="icon-layers"></i>Slider</a></li>
            <li><a href="listing-gite.html"><i class="icon-home"></i>Gîtes</a></li>
            <li><a href="gite.html"><i class="icon-pin"></i>GîtesEdit</a></li>
            <li><a href=""><i class="icon-bar-graph-2"></i>Statistiques</a></li>
            <li><a href=""><i class="icon-calendar"></i>Calendrier</a></li>
            <li><a href=""><i class="icon-pen2"></i>Avis</a></li>
            <li><a href=""><i class="icon-cog"></i>Paramètres</a></li>
            <li><a href="components.html"><i class="icon-Filter"></i>Components</a></li>
            <li><a href="http://Www.aribart-vincent.fr"><i class="icon-drop-05"></i>Par Rocket Loop</a></li>
        </ul>
    </div>
    <div id="topbar">
        <a href="#" class="notif inline"><i class="icon-liste"></i><span>3</span></a>
        <a href="#" class="notif inline"><i class="icon-speech-bubble"></i><span>8</span></a>
        <div class="topbar-option">
            <a href="#"><span>Mon compte</span><i class="icon-head"></i></a>
            <a href="#"><span>Déconnexion</span><i class="icon-goout"></i></a>
        </div>
    </div>
    <div id="content">

        <?php
            $d="content/";
            if(isset($_GET['p'])){
                $p=strtolower($_GET['p']);
                if(preg_match("/^[a-z0-9\-]+$/",$p) && file_exists($d.$p.".html")){
                    include $d.$p.".html";
                }
                else{
                    include $d."404.html";
                }
            }
            else{
                include $d."index.html";
            }
        ?>

        <!-- ############################################# -->
        <!--                      SCRIPT                   -->
        <!-- ############################################# -->

        
        <script>
            $(document).ready(function() {
                $('.title-box-blue').click(function(e) {
                    if ($(e.target).is('.active')) {
                         $('.title-box-blue').removeClass('active');                        
                         $(this).parent().children(".content").eq(0).slideUp(300).removeClass('open');
                    } else {
                        $(this).addClass('active');
                        $(this).parent().children(".content").eq(0).slideDown(300).addClass('open');
                        $(this).parent().children(".content").eq(0).style.backgroundColor = "#ff0";
                    }
                    e.preventDefault();
                });
            });
 
        </script>
        <script>
$(function() {

  $('.switch').change(function(){
    $(this).toggleClass('checked');
    $(this).children(".icon-yes").toggleClass('switch-off');
    $(this).children(".icon-remove").toggleClass('switch-on');
  });

});
        </script>
    </div>

    </div>

</body>