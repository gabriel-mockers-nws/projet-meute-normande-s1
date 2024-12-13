<?php
$title = "Contact"; //on met le titre en référence à la mini-fonction dans le header
require_once __DIR__ . '/../elements/header.php' 
 ?> 


<div class="formulaire">
    <form class="formulaire-form">
        <div class="titre-formulaire">
            <h1>Vous avez quelques choses à nous dire ? <br>
                 Contactez-nous !</h1>
        </div>

        <div class="information-formulaire">
                <div class="categorie-formulaire">
                    <label>Choisissez une option*</label>
                    <input class="block-formulaire" type="text">
                </div>
                <div class="form-prenom-nom">
                    <div class="categorie-formulaire">
                        <label for="username">Nom:<span aria-label="required">*</span></label>
                        <input class="block-formulaire" id="username" type="text" name="username" required />
                    </div>
                    <div class="categorie-formulaire">
                        <label for="first-name">Prénom:<span aria-label="required">*</span></label>
                        <input class="block-formulaire" id="first-name" type="text" name="first-name" required />
                    </div>
                </div>
                <div class="categorie-formulaire">
                    <label for="pseudo">Pseudo</label>
                    <input class="block-formulaire" type="text" id="pseudo" name="pseudo"> 
                </div>

                <div class="categorie-formulaire">
                    <label for="email">Votre email :<span aria-label="required">*</span></label>
                    <input class="block-formulaire" id="email" type="email" name="email" require>
                </div>

                <div>
                    <h3>En Anonyme, nous ne pourrons pas vous recontacter.</h2>
                    <p>(Les informations renseigner d'avant avoir sélectionner "Anonyme" sont gardé, pensez à les supprimer.)</p>
                </div>

                <section>
                    <p>
                        <label for="raison-conctact"><span aria-label="required"></span></label>
                        <select name="raison-conctact" id="raison-conctact">
                            <option value="signalez-un problème-avec-la-meute">Signalez un problème</option>
                            <option value="demande-information">Conctater le staff</option>
                            <option value="probleme-avec-le-site-web">Signaler un bug</option>
                            <option value="photo">Partagez vos photos</option>
                            <option value="presence-evenement">Présence à un évènemment</option>
                            <option value="autre">Autre</option>
                        </select>
                    </p>
                </section>

                <div class="categorie-formulaire">
                    <label for="redigez-un-message">Rédigez un message</label>
                    <textarea class="block-formulaire" name="redigez-un-message" id="redigez-un-message"></textarea>
                </div>

                <button type="submit">Envoyer</button>
        
        </div>
    </form>
    </div>


    

<?php require_once  __DIR__ . '/../elements/footer.php' ?>