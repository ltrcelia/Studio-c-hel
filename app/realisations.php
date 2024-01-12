<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="public/assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/realisations.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <meta name="description" content="Portfolio du studio présentant diverses réalisations de design print et digital, de web design, de motion design et bien d'autres.">
    <title>Réalisations | Studio céhel</title>
</head>
<body>

    <?php //Exécute le fichier header.php//
        include('header.php'); ?>

    <main>
        <section id="container-realisations">
            
            <?php include 'travaux.php'; ?>
            <?php if(isset($_GET['id'])) {
                    $identifiant = $_GET['id'];
                    if (array_key_exists($identifiant, $array)) {
                    $realisation = $array[$identifiant]; ?>
                        <article id="detail-realisation" class="bg-small">
                            <div id="contenu-realisation">
                                <h1 class="titre"><span><?php echo $realisation['titre']; ?></span></h1>
                                <p><?php echo $realisation['categories']; ?></p><br>
                                <p class="sujet"><?php echo $realisation['sujet']; ?></p><br>
                                <p><?php echo $realisation['description']; ?></p><br>
                            </div>
                            <div id="img-realisation">
                                <?php echo $realisation['images']; ?>
                            </div>
                            <a href="index.php#carousel"><button class="btn btn-framboise">Retour.</button></a>
                        </article>
                <?php } else { http_response_code(404);
                        echo 'Page non trouvée'; }} ?> 

            <div id="services">
                    <h2>Les services </h2>
                <p><a href="services.php">Identité de marque</a> | <a href="services.php">Web design et sites web</a> | <a href="services.php">Contenu de marque</a></p>
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