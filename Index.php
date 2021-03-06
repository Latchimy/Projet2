<!Doctype html>
<html lang="fr">
 <head>
 <title>Projet 2</title>
    <meta charset="utf-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../Projet2/CSS/Projet2.css" rel="stylesheet">
    <!--Javascript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!--Bootstrap version 4.3 pas à jour-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--Bootstrap version 4.3 pas à jour-->
 </head>
 <body>
 <?php echo '<p>Bonjour le monde</p>'; ?>
 <h1>Jeux vidéos</h1>
    <div class="MenuDeroulant">
        <div id="menu">
            <div class="first">
                <button class="firsty">
                    <a href="Xbox.html">Xbox</a></button>
                <div class="first-content">
                    <ul>
                        <li>The Gunk</li>
                        <li>Scorn</li>
                        <li>Halo Infinite</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="menu2">
            <div class="second">
                <button class="secondy">
                    <a href="PS.html">PS</a></button>
                <div class="second-content">
                    <ul>
                        <li>Just Dance</li>
                        <li>Capitain Tsubasa: Rise of New Champion</li>
                        <li>Minecraft</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="menu3">
            <div class="third">
                <button class="thirdy">
                    <a href="PC.html">PC</a></button>
                <div class="third-content">
                    <ul>
                        <li>Fort Boyard</li>
                        <li>WRC 9</li>
                        <li>F1 2020</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="menu4">
            <div class="four">
                <button class="fourty">
                    <a href="Nintendo"></a>Nintendo</button>
                <div class="four-content">
                    <ul>
                        <li>Chained Echoes</li>
                        <li>Neon White</li>
                        <li>The legend of Zelda, skyward sword</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="recherche">
        <form>
            <div>
                <input type="search" id="maRecherche" name="q" placeholder="Rechercher sur le site…">
                <button>Rechercher</button>
            </div>
        </form>
    </div>
    <button class="Espace">
            <a href="espaceperso.html">Mon espace</a></button>
    <!--Slide carrousel essaie -->
    <div class="slides">
        <Div class="container">
            <h2>Les nouveautés</h2>
            <div id="slide1" class="carousel slide" data-ride="carousel">
                <!--Indicateurs-->
                <ol class="carousel-indicators">
                    <li data-target="#slide1" data-slide-to="0" class="active"></li>
                    <li data-target="#slide1" data-slide-to="1"></li>
                    <li data-target="#slide1" data-slide-to="2"></li>
                    <li dara-target="#slide4" data-slide-to="3"></li>
                </ol>

                <!--Carousel-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="ChainedEchoes" src="../Projet2/Public/Images/ChainedEchoes.jpg" alt="Carrousel slide 1" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img classs="Neon" src="../Projet2/Public/Images/NEON WHITE.jpg" alt="Carrousel slide 2" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="Scorn" src="../Projet2/Public/Images/Scorn_Inline1.jpg" alt="Carrousel slide 3" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="Halo" src="Public/Images/Halo.jpg" alt="Carrousel slide 4" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="Justdance" src="../Projet2/Public/Images/JustDance.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="wrc9" src="../Projet2/Public/Images/wrc9.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="zelda" src="../Projet2/Public/Images/ZELDA.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="Minecraft" src="../Projet2/Public/Images/minecraft.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="F1" src="../Projet2/Public/Images/F1.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <!-- Contrôles -->
                <a class="carousel-control-prev" href="#slide1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#slide1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>
    </div>
    <!--Fin slide carousel-->

    <Div class="Body">

    </Div>
    <Div class="right">

    </Div>
    <Div class="left">

    </Div>
    <Div class="footer">

    </Div>
 </body>

</html>