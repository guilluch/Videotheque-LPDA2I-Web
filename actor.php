<?php
require_once 'includes/utils.php';


getBlock('startPage.php', ['title' => 'Actor']);
getBlock('nav.php');
getBlock('startMain.php', ['h1' => 'Actor']);
getBlock('personInfos.php', getPersonData($_GET['id']));
getBlock('endMain.php');
getBlock('footer.php');