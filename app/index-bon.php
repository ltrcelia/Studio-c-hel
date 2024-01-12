<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/assets/img/favicon.svg" type="image/x-icon">
    <link href="public/assets/css/style.css" rel="stylesheet">
    <link href="public/assets/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="description" content="Studio de graphisme et motion design sur Nantes, le Studio céhel vous propose ses services pour vous créer une identité de marque qui correspondra au mieux à vos valeurs : identité visuelle, web design et site web, contenu de marque...">
    <title>Studio céhel</title>
</head>
<body>

    <?php //Exécute le fichier header.php//
        include('header.php'); ?>

    <main class="container">
        <section class="placement">
            <div id="presentation" class="bg-small">
                <div class="presentation">
                    <h1>Hello, je suis Célia, <span>designer de marque</span>,<br>
                    bienvenue dans mon <span>Studio de création web & print</span>.</h1>
                    <p>Je vous aide à créer l’identité visuelle parfaite pour votre entreprise<br>
                    grâce à une image forte et colorée. &#x1F308;</p>
                    <div>
                        <a href="realisations.php"><button class="btn btn-beige">Découvrir mes réalisations.</button></a>
                        <a href="contact.php"><button class="btn btn-framboise">Commencer un nouveau projet.</button></a>
                    </div>
                    
                </div> 
                <div>
                    <img src="public/assets/img/photo-profil-c.png" alt="Photo de la propriétaire de Studio céhel">
                </div>
            </div>
            
            <div class="banniere fond-banniere bg-full">
                <div class="bg-small">
                    <p> Créons ensemble une identité visuelle au plus proche de vos valeurs<br>
                et sublimons votre image.<br>
                &#x1F308;</p>
                </div>
            </div>

            <div class="services bg-full">
                <div class="bg-small">
                    <h2><span class="border">Mes services.</span></h2>
                    <p>Grâce à mes différentes compétences,<br>
                    je vous propose la panoplie complète pour une communication 360°.</p>
                    <div id="services">
                        <div class="identite">
                            <img src="public/assets/img/identite-visuelle.png" alt="Dessin d'un nuancier de couleur">
                            <h3>Identité de marque.</h3>
                            <p>Création d'une image de marque qui présente votre univers et vos valeurs.
                            Elle constitue la base de votre communication.</p>
                        </div>
                        <div class="site">
                            <img src="public/assets/img/site-web.png" alt="Dessin d'un site internet dans un ordinateur">
                            <h3>Web design et site web.</h3>
                            <p>Création de votre site web présantant votre plus belle image, pour que votre clients vous trouve troujours.</p>
                        </div>
                        <div class="contenue-marque">
                            <img src="public/assets/img/contenue-marque.png" alt="Dessin d'un ordinateur montrant une vidéo">
                            <h3>Contenu de marque.</h3>
                            <p>Création de vos supports de communication imprimés et digitaux afin de sublimer votre image de marque.</p>
                        </div>
                    </div>
                    <a href="services.php"><button class="btn btn-rouge">Découvrez mes services.</button></a>
                </div>
            </div>

            <div id="carousel" class="carousel">
                <div class="bg-small">
                    <h2><span class="border">Mes réalisations.</span></h2>
                    <p>Découvez à travers à d’autre projets ce que je peux faire pour votre entreprise.</p>
                    <div id="liste-realisations">
                        <?php include 'travaux.php'; ?>
                        <?php foreach($array as $k => $realisation) : ?>
                            <article class="realisation">
                                <a href="<?php echo $realisation['lien']; ?>">
                                    <?php echo $realisation['images']; ?></a>
                            </article>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div id="qui-je-suis" class="bg-full">
                <div class="bg-small flex-container">
                    <img src="public/assets/img/photo-profil-c.png" alt="Photo de la propriétaire de Studio céhel">
                    <div class="text">
                        <h2><span class="border">Hello, je suis Célia.</span></h2>
                        <p><span class="espace">Graphiste</span> et web developpeur, j'aime en apprendre chaque jour d'avantage pour nourrir ma passion de la communication. Que ce soit au moyen du print, du web ou de la vidéo, j'aime me diversifier afin de développer au maximum mes compétences.<br><br>
                        <span class="espace">Aujourd'hui</span> basé à Nantes, mon studio de web souhaite vous proposer ses services, alors n'hésitez pas à me contacter !</p>
                        <a href="studio.php"><button class="btn btn-rouge">En savoir plus.</button></a>
                    </div>
                </div>
            </div>

            <div id="contact">
                <h2>Vous avez un projet ? Parlons-en ensemble ! </h2>
                <a href="contact.php"><button class="btn btn-beige">Me contacter.</button></a>
            </div>

        </section>
    </main>

    <?php //Exécute le fichier footer.php//
        include('footer.php'); ?>

</body>
</html>