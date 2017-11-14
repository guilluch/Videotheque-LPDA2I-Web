<?php
require_once 'includes/utils.php';


getBlock('startPage.php', ['title' => 'The Dark Knight: Le chevalier noir']);
getBlock('nav.php');
getBlock('startMain.php', ['h1' => 'Film']);
getBlock('filmInfos.php', getMovieData(1));
getBlock('asides.php', getAsideData(1));
getBlock('endMain.php');
getBlock('footer.php');