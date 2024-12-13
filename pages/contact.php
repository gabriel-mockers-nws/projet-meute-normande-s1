<?php
$title = "Contact"; //on met le titre en référence à la mini-fonction dans le header
require_once  __DIR__ . '/../elements/header.php' 
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
                    <label for="username">Nom:<span aria-label="required">*</span></label>
                    <input id="username" type="text" name="username" required />
                </div>
                <div>
                    <label for="first-name">Prénom:<span aria-label="required">*</span></label>
                    <input id="first-name" type="text" name="first-name" required />
                </div>
        </div>
        <div>
            <label for="email">Votre email :<span aria-label="required">*</span></label>
            <input id="email" type="email" name="email" require>

        </div>
        <div>
            <h2>En Anonyme, nous ne pourrons pas vous recontacter.</h2>
            <p>(Les informations renseigner d'avant avoir sélectionner "Anonyme" sont gardé, pensez à les supprimer.)</p>
        </div>
        <section>
            <p>
                <label for="raison-conctact"></label>
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


        
        
</div>


    </form>
</div>
<?php require_once  __DIR__ . '/../elements/footer.php' ?>