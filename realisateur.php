<?php
require_once 'includes/utils.php';


getBlock('startPage.php', ['title' => 'Réalisateur - Christopher Nolan']);
getBlock('nav.php');
getBlock('startMain.php', ['h1' => 'Réalisateur']);
getBlock('personInfos.php', getPersonData($_GET['id']));
getBlock('fetishActors.php', getFetishActorsData($_GET['id']));
getBlock('endMain.php');
getBlock('footer.php');