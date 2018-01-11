<?php
echo '<div class="images">';
for ($i = 0 ; $i < sizeof($data) ; ++$i) {
    echo '
    <figure>
        <img src="' . $data[$i]['path'] . '" class="hoverable">
        <figcaption>' . $data[$i]['legend'] . '</figcaption>
    </figure>';
}
echo '</div>';