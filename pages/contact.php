<?php
$title = "Contact"; //on met le titre en référence à la mini-fonction dans le header
require_once './elements/header.php' 
 ?> 


<div class="formulaire">
    <form class="formulaire">
        <div class="titre-formulaire">
            <h1>Vous avez quelques choses à nous dire ? Contactez-nous !</h1>
        </div>
        <div>
            <label>Choisissez une option*</label>
            <input type="text">
        </div>
            <div class="form-prenom-nom">
                 <div>
                    <label for="username">Nom&nbsp;:<span aria-label="required">*</span></label>
                    <input id="username" type="text" name="username" required />
                </div>
                <div>
                    <label for="first-name">Prénom&nbsp;:<span aria-label="required">*</span></label>
                    <input id="first-name" type="text" name="first-name" required />
                </div>
        </div>
        <div>
            <label for="email">Votre email :<span aria-label="required">*</span></label>
            <input id="email" type="email" name="email" require>

        </div>
        
        
</div>


    </form>
</div>
<? require_once './elements/footer.php' ?>