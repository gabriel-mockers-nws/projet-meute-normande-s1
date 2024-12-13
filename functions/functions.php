<?php 
//fonction pour les item de navigation (a faire)
function nav_item (string $lien, string $title, string $linkClass = ''): string
{
    $classe = 'nav-item'; 
    if($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe . ' active';
    }

return <<<HTML
<li class="$classe"> 
    <a class="$linkClass $classe" aria-current="page" href="$lien">$title</a>
</li>
HTML;
}


//fonction pour le menu de navigation 

function nav_menu(string $linkClass = ''):string //on créer la fonction 
{
    //on retourne les valeur des page en cliquable
    return 
    nav_item('../pages/index.php', 'Accueil', $linkClass) . 
    nav_item('../pages/description.php', 'Qui sommes-nous?', $linkClass) . 
    nav_item('../pages/evenements.php', 'Evenement', $linkClass) . 
    nav_item('../pages/galery.php', 'Galerie', $linkClass) .
    nav_item('../pages/use-link', 'Liens utiles', $linkClass) ;
}

?>