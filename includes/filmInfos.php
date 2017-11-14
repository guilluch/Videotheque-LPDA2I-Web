<?php
echo '
<article>
    <h2>' . $data['title'] . '</h2>
    <p>
        Date de sortie :
        <time>' . $data['releaseDate'] . '</time>
    </p>
    <p>
        Avec Christian Bale, Heath Ledger
    </p>
    <h3>Synopsis</h3>
    <p>' . $data['synopsis'] . '</p>
    <p>
        Note : '. $data['rating'] .'/5
        <meter min="0" max="5" value="4.5">4.5/5</meter>
    </p>';
getBlock("imagesGallery.php", getMovieImagesData(1));
echo '</article>';