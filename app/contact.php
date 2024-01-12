<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/assets/img/favicon.svg" type="image/x-icon">
    <link href="public/assets/css/style.css" rel="stylesheet">
    <link href="public/assets/css/contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="description" content="Vous souhaitez entrer en contact avec moi ? Je vous invite à me contacter par mail pour toutes les questions que vous pouvez avoir.">
    <title>Contact | Studio céhel</title>
</head>
<body>

    <?php //Exécute le fichier header.php//
        include('header.php'); ?>

    <main>
        <section id="formulaire">
            <div class="bg-small">
                    <div class="intro">
                    <h1><span class="border">Me contacter.</span></h1>
                        <h2>Vous souhaitez travailler avec moi ?<br>
                        Laissez moi un message ici</h2>
                </div>
                <form action="" method="post" class="formulaire">
                    <div class="container1">
                        <div class="colonne1">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="input-field" required>
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" autocomplete="on" required>
                            <label for="entreprise">Nom de l'entreprise</label>
                            <input type="text" name="entreprise" id="entreprise" required>
                        </div>
                        <div class="colonne2">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" required>
                            <label for="tel">Téléphone</label>
                            <input type="tel" name="tel" id="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" autocomplete="on" required>
                            <label for="site">Lien vers votre site internet ou vos réseaux</label>
                            <input type="text" name="site" id="site">
                        </div>
                    </div>

                    <div class="container2">
                        <div class="colonne3">
                        <fieldset class="checkbox">
                            <legend>Quels sont vos besoins ?</legend>
                            <div>
                                <input type="checkbox" id="identiteVisuelle" name="besoins[]" value="Identité visuelle">
                                <label for="identiteVisuelle">Identité visuelle</label>
                            </div>
                            <div>
                                <input type="checkbox" id="siteWeb" name="besoins[]" value="Site web">
                                <label for="siteWeb">Site web</label>
                            </div>
                            <div>
                                <input type="checkbox" id="motionDesign" name="besoins[]" value="Motion design">
                                <label for="motionDesign">Motion design</label>
                            </div>
                            <div>
                                <input type="checkbox" id="illustration" name="besoins[]" value="Illustration">
                                <label for="illustration">Illustration</label>
                            </div>
                            <div>
                                <input type="checkbox" id="supportsPapierDigital" name="besoins[]" value="Supports papier/digital">
                                <label for="supportsPapierDigital">Supports papier/digital</label>
                            </div>
                            <div>
                                <input type="checkbox" id="autre" name="besoins[]" value="Autre">
                                <label for="autre">Autre</label>
                            </div>
                        </fieldset>
                        </div>
                        <div class="colonne4">
                            <label for="budget">Budget approximatif</label>
                            <input type="text" name="budget" id="budget" required>
                            <label for="delais">Delais approximatif</label>
                            <input type="text" name="delais" id="delais" required>
                        </div>
                    </div>

                    <div class="container3">
                        <div class="colonne5">
                            <label for="decouvert">Comment avez-vous découvert le studio ?</label>
                            <select name="decouvert" id="decouvert">
                                <option value="choix">Choisissez...</option>
                                <option value="internet">Internet</option>
                                <option value="bouche-a-oreille">Bouche à oreille</option>
                                <option value="intagram">Instagram</option>
                                <option value="autre">Autre...</option>
                            </select>
                        </div>
                        <div class="colonne6">
                            <label for="objet">Objet</label>
                            <input type="text" name="objet" id="objet" required>
                        </div>
                        <div class="colonne7">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" maxlength="250" required></textarea>
                        </div>
                    </div>
                    <div class="mail">
                        <p>Vous pouvez me contacter sur <a href="mailto:hello@studio-cehel.com" class="a-mail">hello@studio-cehel.com</a></p>
                    </div>
                    <div class="button">
                        <input type="submit" value="Envoyer." class="btn btn-rouge">
                    </div>
                </form>

                <div class="text">
                    <p><span>Le studio n’accepte malheureusement pas de stage ni d’alternance.</span></p>
                </div>
                <div class="bientot">
                    <h2>À bientôt !</h2>
                </div>
            </div>
        </section>
    </main>

    <?php //Exécute le fichier footer.php//
        include('footer.php'); ?>

</body>
</html>