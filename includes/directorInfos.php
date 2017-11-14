<?php
echo '
<article>
    <img src="images/nolan.jpg">
    <p>Prénom : ' . $data['firstname'] . '</p>
    <p>Nom : ' . $data['lastname'] . '</p>
    <p>Date de naissance :
        <time>' . $data['birthDate'] . '</time>
    </p>
    <h2>Biographie</h2>
    <p>' . $data['biography'] . '</p>
</article>';