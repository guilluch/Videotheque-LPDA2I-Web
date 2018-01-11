<?php

echo '
<form action="formValidation.php" method="post">
    <div>
        <label>Titre</label>
        <input type="text" name="title"/>
    </div>
    <div>
        <label>Date de sortie</label>
        <input type="date" name="releaseDate"/>
    </div>
    <div>
        <label>Synopsis</label>
        <textarea name="synopsis"></textarea>
    </div>
    <div>
        <label>Note</label>
        <input type="number" name="note"/>
    </div>
    <div>
        <input type="submit" value="Ajouter"/>
    </div>
</form>';