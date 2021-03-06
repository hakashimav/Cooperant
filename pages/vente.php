<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Vents page pour placer des articles de ventes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.3.4/animate.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <title>Cooperant | Ventes Pages</title>
    </head>
    <body>
        <div class="header_class">
            <header>
                <div class="coop_anime">
                    <div class="text_coop">
                        <h2 class="h2_coop" title="Cooperant">Coopérant</h2>
                        <h2 class="h2_coop" title="Cooperant">Coopérant</h2>
                    </div>
                </div>        
                <div class="zone_search">
                    <form action="" method="POST" class="form">
                        <!-- the zone for recherche -->
                        <button type="submit" title="Recherche" class="btn_submit_search"><i class="fa fa-search"></i></button><input type="search" name="input_search" id="input_search" class="input_search" placeholder="Rechercher...">
                    </form>
                </div>
                <div class="item">
                    <ul class="items items_vente" >
                        <a href="../index.php" title="Accueil"><i class="fa fa-home home_icon"></i><li class="accueil">Accueil</li></a>
                        <a href="" title="Panier" ><i class="fa fa-cart-plus home_icon"></i><li>Panier</li></a>
                        <a href="#" title="Menu" class="menu" id="menu"><i class="fa fa-ellipsis-v home_icon"></i><li>Menu</li></a>
                    </ul>
                    <ol class="sous_menu">
                        <a href="#" title="Vente"><i class="fa fa-cart-arrow-down icon menu_icon"></i><li>Ventes</li></a>
                        <a href="pages/achats.html" title="Achat"><i class="fa fa-shopping-bag icon menu_icon"></i><li>Achats</li></a>
                        <li class="ligne"></li>
                        <a href="#" title="Vente&Achat"><li>Vente&Achat</li></a>
                    </ol>
                </div>
            </header>
        </div>

        <div class="overlay">
            <p class="vents_text">VENTES</p>
        </div>
        <div class="ajout_article">
            <form action="traitement.php" method="POST" enctype="multipart/form-data" class="form_vents">
                <legend>Ajouter un Article.</legend><br>
                <label for="Nom">Nom</label><br>
                <input type="text" name="Nom" id="Nom" class="input_nom input" placeholder="ex: Iphone,Chemise..." required><br><br>
                <label for="des">Description</label><br>
                <input type="text" name="Description" id="des" class="input-des input" placeholder="ex: Telephone..." required><br><br>
                <label for="etat">Etat</label><br>
                <input type="text" name="Etat" id="etat" class="input_etat input" placeholder="ex: Ecran cassé..." required><br><br>
                <label for="prix">Prix</label><br>
                <input type="text" name="Prix" id="prix" class="input_prix input" required>
                <select name="Devise" id="devise">
                    <option value="Franc">Fc</option>
                    <option value="dollars">$</option>
                    <option value="Euros">€</option>
                </select><br><br>
                <button type="submit" class="btn_valide">Valider</button><button type="reset" class="btn_annule">Annuler</button>
                <div class="image_article">
                    <i class="fa fa-camera camera" id="camera"></i><input type="file"  name="Image" id="Image" class="image">
                </div>
            </form>
        </div>
        <script type="text/JavaScript" src="../assets/js/main.js"></script>
    </body>
</html>
