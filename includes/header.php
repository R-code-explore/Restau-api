<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title><?=$page_title;?></title>
</head>
<body>
    
    <header class="banner">

        <img src="<?=$banner_img;?>" alt="Image qui représente l'intérieur de l'un des restaurants">

        <div class="banner_content">

            <div class="top_content">
                <h1 class="logo_title">Restau-Api</h1>
                <p class="menu_btn" onclick="openMenu()">Menu</p>
            </div>

            <h3 class="welcome_message"><?=$banner_title?></h3>
        </div>
    </header>