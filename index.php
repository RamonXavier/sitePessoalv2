<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem Vindo(a)!</title>
    <link rel="stylesheet" href="css/ui-kit/uikit.css">
    <link rel="stylesheet" href="css/fa-icon/all.css">
    <link rel="stylesheet" href="css/myStyle/style.css">   
    <script type="text/javascript" src="js/ui-kit/uikit.js"></script>
    <script type="text/javascript" src="js/fa-icon/all.js"></script>
    <script type="text/javascript" src="js/fa-icon/solid.js"></script>
    <script type="text/javascript" src="js/javascript/jquery.js"></script>
</head>
<body>
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="#offcanvas-slide" class="uk-button" uk-toggle><i class="fas fa-bars fa-spin"></i></a></li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li>
                <img src="img/ramon1.png" alt="Ramon Xavier" id="ramonIcon">
            </li>
        </ul>
    </div>
</nav>
<div id="offcanvas-slide" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</div>
<div class="uk-container">
    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title"><span class="icons-cat"><i class="fas fa-award"></i> Certificados</span></h3>
                <p id="certificado_desc"></p>
                <p> <button class="uk-button bt-box">Danger</button></p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body">
                <h3 class="uk-card-title"><span class="icons-cat"><i class="fas fa-layer-group"></i> Projetos</span></h3>
                <p id="projetos_desc"></p>
                <p> <button class="uk-button bt-box">Danger</button></p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-secondary uk-card-body">
                <h3 class="uk-card-title"><span class="icons-cat"><i class="fab fa-battle-net"></i> Exeperiências</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p> <button class="uk-button bt-box">Danger</button></p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body">
                <h3 class="uk-card-title"><span class="icons-cat"><i class="fas fa-bolt"></i> Habilidades</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p> <button class="uk-button bt-box">Danger</button></p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-primary uk-card-body">
                <h3 class="uk-card-title"><span class="icons-cat"><i class="fas fa-address-card"></i> Dados Pessoais</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p> <button class="uk-button bt-box">Danger</button></p>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-secondary uk-card-body">
                <h3 class="uk-card-title"><span class="icons-cat"><i class="fas fa-brain"></i> Objetivo e Escolaridade</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p> <button class="uk-button bt-box">Danger</button></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/javascript/textos.js"></script>
</body>
</html>