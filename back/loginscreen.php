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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body class="login-screen">

    <div id="c-login">
        <div class="login-logo">
            <a href=""></a>
        </div>
        <div class="login-input">
            <div class="login-info">
                <input type="text" value="" placeholder="Username" id="username" class="" />
                <input type="password" value="" placeholder="Password" id="password" class="" /> 
                <a class="btn btn-default inline" href="#">Connexion</a>
            </div>
            <div class="login-option">
                <a class="btn-link inline" href="#">Mot de passe perdu ?</a>
                <label><input type="checkbox" id="" value="">Se souvenir de moi</label> 
            </div>
        </div> 
    </div>
    <script>
        $(document).ready(function() {
            $(window).resize(function() {
                $("#c-login").css({
                position:'absolute',
                left:($(window).width() - $("#c-login").outerWidth()) / 2,
                top:($(window).height() - $("#c-login").outerHeight()) / 2
                });
            });
        });
        $(window).load(function() {
          $(window).resize(); 
        });
    </script>

</body>