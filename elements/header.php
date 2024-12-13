<?php 
require_once __DIR__ . '/../functions/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="">
    <meta name="creator" content="Kylian Varin (Whitebat), Kimberley Lefevbre (Shinza), Gabriel Mockers (Legiolf)"> 
    <meta name="keyword" content="La meute Normande, furry, Normandie">
    <link rel="stylesheet" href="../style.css">
    <!--<link rel="stylesheet" href="../hilight.css">-->
    <script src="script.js"></script>
    <!-- on fait une fonction pour changer le titre de chaque page -->
    <title>
         <?php if (isset($title)) : ?>
            <?= $title ?>
        <?php else : ?>
            Mon site
        <?php endif ?>
    </title>
</head>
<body>
    <header>
        <div class="header-general">
            <div classclass="boxe-header-logo">
                <a href="../index.php" class="header-logo">
                <img class="header-logo" src="../images/la meute normandemodif 2 clean.png" alt="Logo de la meute" >
                </a>
            </div>
            <div class="header-nav">
                <ul> 
                    <?= nav_menu('nav-link'); ?>
                </ul>
            </div>
            
            <div class="boxe-header-connection">
                <a class="Button-connection" href="">
                    <button value="Connection/Inscription">Connection/Inscription</button>
                </a>
            </div>
        </div>
    </header>
    <main>
