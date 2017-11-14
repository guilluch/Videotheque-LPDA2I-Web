<?php
echo '
<div class="asides">
    <aside>
        <h3>Infos réalisateur</h3>
        <figure>
            <img src="' . $data[0]['path'] . '">
            <figcaption>' . $data[0]['legend'] . '</figcaption>
        </figure>
    </aside>
    <aside>
        <h3>Infos acteurs</h3>
        <figure>
            <img src="' . $data[1]['path'] . '">
            <figcaption>' . $data[1]['legend'] . '</figcaption>
        </figure>
        <figure>
            <img src="' . $data[2]['path'] . '">
            <figcaption>' . $data[2]['legend'] . '</figcaption>
        </figure>
    </aside>
</div>';