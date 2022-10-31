<?php
$banner_img = "./assets/index_banner.jpg";
$page_title = "Accueil - Restau-Api";
$banner_title = "Bonjour et bienvenue";

include './includes/header.php';
?>

<div class="under_index_menu">
        <div class="under_index_buttons">
            <a href="./menu.php" class="general_btn">Menus</a>
            <a href="./restos.php" class="general_btn">Les restaurants</a>
            <a href="./horaire.php" class="general_btn">Horaires</a>
        </div>

        <p class="description_restau">
            Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.
        </p>
    </div>

    <div class="news_banner">
        <img src="./assets/index_img.jpg">
        <div>
            <h3 class="news_title">Les nouveautés</h3>
        </div>
    </div>

    <div class="news_menu">
        <img src="./assets/new_1.jpg">

        <div class="news_description">
            <h5>Le BIG-BURGER</h5>
            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte.</p>
        </div>
    </div>

    <div class="news_menu">
        <img src="./assets/new_2.jpg">

        <div class="news_description">
            <h5>PIZZA-API</h5>
            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte.</p>
        </div>
    </div>

    <div class="news_menu">
        <img src="./assets/new_3.jpg">

        <div class="news_description">
            <h5>ROCO-PASTAS</h5>
            <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte.</p>
        </div>
    </div>

    <?php include './includes/contact.php'; ?>

<?php
include './includes/footer.php';
?>