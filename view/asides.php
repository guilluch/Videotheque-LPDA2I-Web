<?php
echo '
<div class="asides">
    <aside>
        <h3>Infos réalisateur</h3>';


for ($i = 0 ; $i < sizeof($data) ; ++$i) {
    if ($data[$i]['role'] == "director") {
        echo '
        <figure>
            <a href="realisateur.php?id=' . ($i+1) . '"><img class="portrait hoverable" src="' . $data[$i]['path'] . '"></a>
            <figcaption>' . $data[$i]['legend'] . '</figcaption>
        </figure>';
    }
}


echo '
    </aside>
    <aside>
        <h3>Infos acteurs</h3>';
for ($i = 0 ; $i < sizeof($data) ; ++$i) {
    if ($data[$i]['role'] == "actor") {
        echo '
        <figure>
            <a href="actor.php?id=' . ($i+1) . '"><img class="portrait hoverable" src="' . $data[$i]['path'] . '"></a>
            <figcaption>' . $data[$i]['legend'] . '</figcaption>
        </figure>';
    }
}

echo '
</aside>
<aside id="faq-aside">
    <a class="material btn"">Charger</a>
</aside>
</div>';