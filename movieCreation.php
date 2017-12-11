<?php
require_once 'includes/utils.php';

getBlock('startPage.php', ['title' => 'The Dark Knight: Le chevalier noir']);
getBlock('nav.php');
getBlock('startMain.php', ['h1' => 'Film']);
getBlock("movieCreationForm.php");
getBlock('endMain.php');
getBlock('footer.php');