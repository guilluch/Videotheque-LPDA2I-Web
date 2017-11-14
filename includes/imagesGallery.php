<?php
/*echo '
<div class="images">
    <figure>
        <img src="' . $data[0]['path'] . '">
        <figcaption>' . $data[0]['legend'] . '</figcaption>
    </figure>
    <figure>
        <img src="' . $data[1]['path'] . '">
        <figcaption>' . $data[1]['legend'] . '</figcaption>
    </figure>
    <figure>
        <img src="' . $data[2]['path'] . '">
        <figcaption>' . $data[2]['legend'] . '</figcaption>
    </figure>
</div>';*/

echo '<div class="images">';
for ($i = 0 ; $i < sizeof($data) ; ++$i) {
    echo'
    <figure>
        <img src="' . $data[$i]['path'] . '">
        <figcaption>' . $data[$i]['legend'] . '</figcaption>
    </figure>';
}
echo '</div>';