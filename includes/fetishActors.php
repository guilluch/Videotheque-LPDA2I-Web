<?php
echo '
<div class="asides">
<aside>
<h3>Acteurs fétiches</h3>';
for ($i = 0 ; $i < sizeof($data) ; ++$i) {
        echo '
        <figure>
            <img src="' . $data[$i]['path'] . '">
            <figcaption>' . $data[$i]['legend'] . '</figcaption>
        </figure>';
}
echo '</aside></div>';