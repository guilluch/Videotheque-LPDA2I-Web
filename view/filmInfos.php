<?php
echo '
<article>
    <h2>' . $data['title'] . '</h2>
    <p>
        Date de sortie :
        <time>' . $data['releaseDate'] . '</time>
    </p>
    <p>
        Avec ';

$actors = getMovieActorsData(1);
for ($i = 0 ; $i < sizeof($actors)-1 ; ++$i) {
    echo $actors[$i]['firstname'] . ' ' . $actors[$i]['lastname'] . ', ';
}
echo $actors[sizeof($actors)-1]['firstname'] . ' ' . $actors[sizeof($actors)-1]['lastname'];


echo '
    </p>
    <h3>Synopsis</h3>
    <p>' . $data['synopsis'] . '</p>
    <p>
        Note : '. $data['rating'] .'/5
        <meter min="0" max="5" value="' . $data['rating'] .'">' . $data['rating'] .'/5</meter>
    </p>';
getBlock("imagesGallery.php", getMovieImagesData(1));
echo '</article>';