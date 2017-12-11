<?php
echo '
<div class="asides">
<aside>
<h3>Acteurs fétiches</h3>';
for ($i = 0 ; $i < sizeof($data) ; ++$i) {
        echo '
        <figure>
            <a><img class="portrait hoverable" src="' . $data[$i]['path'] . '"></a>
            <figcaption>' . $data[$i]['legend'] . '</figcaption>
        </figure>';
}
echo '</aside></div>';