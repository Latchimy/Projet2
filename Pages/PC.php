<!DOCTYPE html>
<html>

<head>
    <title>Projet 2</title>
    <meta charset="utf-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../CSS/Projet2.css" rel="stylesheet">
    <!--Javascript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!--Bootstrap version 4.3 pas à jour-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--Bootstrap version 4.3 pas à jour-->
</head>

<body>
    <h1>Jeux sur PC</h1>
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
                <button class="Espace">
                    <a href="espaceperso.html">Mon espace</a></button>
                <input type="search" id="maRecherche" name="q" placeholder="Rechercher sur le site…">
                <button>Rechercher</button>
            </div>
        </form>
    </div>

    <!--Slide carrousel essaie -->
    <div class="slides2">
        <Div class="container2">
            <h2>Les nouveautés</h2>
            <div id="slide1" class="carousel slide" data-ride="carousel">
                <!--Indicateurs-->
                <ol class="carousel-indicators">
                    <li data-target="#slide1" data-slide-to="0" class="active"></li>
                    <li data-target="#slide1" data-slide-to="1"></li>
                    <li data-target="#slide1" data-slide-to="2"></li>
                </ol>

                <!--Carousel-->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="Justdance" src="../Public/Images/JustDance.jpg" alt="Carrousel slide 1" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="FB" src="../Public/Images/" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="F1" src="../Public/Images/F1.jpg" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Articles">
        <img img class="images" src="../Public/Images/F1.jpg">
        <div class="textes">
            <p>F1 2020 est le jeu vidéo officiel des championnats de Formule 1 et de Formule 2 2020 développé et édité par Codemasters.<br>Le circuit de la rue de Hanoi et le circuit Zandvoort – circuits qui sont nouveaux au championnat en 2020 – seront
                inclus dans le jeu malgré le report des Grands Prix vietnamiens et néerlandais.<br>F1 2020 introduira une fonction de gestion d'équipe connue sous le nom de "Mon équipe " (My Team) qui permet au joueur de créer et de diriger une onzième
                équipe7, Codemasters avait précédemment utilisé ce mode dans Dirt 4, une partie de la franchise Dirt Rally.<br>Le jeu poursuivra également la tendance de la série d'inclure des voitures de Formule 1 historiques en tant que contenu téléchargeable,
                et mettra en vedette quatre voitures conduites par Michael Schumacher.<br>Il s'agit notamment de la Jordan 191, du Benetton B194, du Benetton B195 et de la Ferrari F1-2000</p>
        </div>
    </div>
</body>

</html>