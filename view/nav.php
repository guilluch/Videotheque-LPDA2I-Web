<?php
echo '
<header>
    <nav>
        <ul>
            <li><a href="index.php">Film</a></li>
            <li><a href="realisateur.php?id=' . ($i+1) . '">Réalisateur</a></li>
            <!--<li><a href="acteurs.html">Acteurs</a></li>-->
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </nav>
    <button id="hideAside">Hide aside</button>
    <button id="fadeImg">Fade image</button>
    <button id="toggleMenu">Toggle menu</button>
</header>';