<?php
require_once 'includes/utils.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>The Dark Knight: Le chevalier noir</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/flaterial.css"/>

</head>
<body>

<?php getBlock('nav.php'); ?>
<main class="container material-boxed">
    <h1>Film</h1>
    <section>
        <?php
        getBlock('filmInfos.php', getMovieData(1));
        getBlock('asides.php', getAsideData(1));
        ?>
    </section>

</main>
<?php getBlock('footer.php'); ?>
</body>
</html>