<?php 
//fonction pour le menu de navigation 
function nav_item(string $linkClass = ''):string 
{
    return 
    nav_item('../pages/index.php', 'Accueil', $linkClass) . 
    nav_item('../pages/description.php', 'Qui sommes-nous?', $linkClass) . 
    nav_item('../pages/evenements.php', 'Evenement', $linkClass) . 
    nav_item('../pages/galery.php', 'Galerie', $linkClass) .
    nav_item('../pages/use-link', 'Liens utiles', $linkClass) ;
}


?>