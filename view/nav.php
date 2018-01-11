<?php
echo '
<header>
    <nav>
        <ul>
            <li><a href="index.php">Film</a></li>
            <li><a href="realisateur.php?id=' . ($i+1) . '">Réalisateur</a></li>
            <!--<li><a href="acteurs.html">Acteurs</a></li>-->
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="movieCreation.php">Nouveau film</a></li>
        </ul>
    </nav>
    <button id="hideAside" class="material btn">Hide aside</button>
    <button id="fadeImg" class="material btn">Fade image</button>
    <button id="toggleMenu" class="material btn">Toggle menu</button>
</header>';