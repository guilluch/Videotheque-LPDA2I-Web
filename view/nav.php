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
    <a id="hideAside" href="javascript:void()">Hide aside</a>
    <a id="fadeImg" href="javascript:void()">Fade image</a>
    <a id="toggleMenu" href="javascript:void()">Toggle menu</a>
</header>';