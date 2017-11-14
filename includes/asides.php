<?php
echo '
<div class="asides">
    <aside>
        <h3>Infos réalisateur</h3>';


for ($i = 0 ; $i < sizeof($data) ; ++$i) {
    if ($data[$i]['role'] == "director") {
        echo '
        <figure>
            <img src="' . $data[$i]['path'] . '">
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
            <img src="' . $data[$i]['path'] . '">
            <figcaption>' . $data[$i]['legend'] . '</figcaption>
        </figure>';
    }
}

echo '</aside></div>';