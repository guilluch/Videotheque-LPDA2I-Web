<?php
require_once 'includes/utils.php';

getBlock('startPage.php', ['title' => 'FAQ']);
getBlock('nav.php');
getBlock('startMain.php', ['h1' => 'FAQ']);
getBlock('questionsFaq.php');
getBlock('endMain.php');
getBlock('footer.php');