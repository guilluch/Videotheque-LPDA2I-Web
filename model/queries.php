<?php
include_once 'SPDO.php';

function getUsername($idUser) {

    $db = SPDO::getInstance();
    $requete= $db->prepare('SELECT username FROM user WHERE id_user = :id_user');
    $requete->bindValue(':id_user', $idUser);
    $requete->execute();
    $resultat = $requete->fetch();

    if (empty($resultat)) {
        return "";
    } else {
        return $resultat['username'];
    }
}

function getDiaryTitle($idDiary, $idUser) {
    $db = SPDO::getInstance();
    $requete= $db->prepare('SELECT title FROM diary WHERE id_diary = :id_diary AND id_user = :id_user');
    $requete->bindValue(':id_diary', $idDiary);
    $requete->bindValue(':id_user', $idUser);
    $requete->execute();
    $resultat = $requete->fetch();

    if (empty($resultat)) {
        return "error 404";
    } else {
        return $resultat['title'];
    }
}

function getMovieTitle($id) {
    $db = SPDO::getInstance();
    $query= $db->prepare('SELECT title FROM movie WHERE id=:id');
    $query->bindValue(':id', $id);
    $query->execute();
    $result = $query->fetch();

    if (empty($result)) {
        return "error 404";
    } else {
        return $result['title'];
    }
}

function getMovieData($id) {
    $db = SPDO::getInstance();
    $query= $db->prepare('SELECT * FROM movie WHERE id=:id');
    $query->bindValue(':id', $id);
    $query->execute();
    $result = $query->fetch();

    if (empty($result)) {
        return "error 404";
    } else {
        return $result;
    }
}


function getPersonData($id) {
    $db = SPDO::getInstance();
    $query= $db->prepare('SELECT path, firstname, lastname, birthDate, biography FROM person JOIN personHasPicture ON person.id = idPerson JOIN picture ON picture.id = idPicture WHERE person.id=:id');
    $query->bindValue(':id', $id);
    $query->execute();
    $result = $query->fetch();

    if (empty($result)) {
        return "error 404";
    } else {
        return $result;
    }
}

function getAsideData($idMovie) {
    $db = SPDO::getInstance();
    $query= $db->prepare('SELECT path, legend, role FROM picture JOIN personHasPicture pHP ON id = pHP.idPicture JOIN movieHasPerson mHP ON pHP.idPerson = mHP.idPerson WHERE mHP.idMovie = :idMovie');
     $query->bindValue(':idMovie', $idMovie);
    $query->execute();
    $result = $query->fetchAll();
    if (empty($result)) {
        return "error 404";
    } else {
        return $result;
    }
}

function getMovieImagesData($idMovie) {
    $db = SPDO::getInstance();
    $query= $db->prepare('SELECT path, legend FROM picture JOIN movieHasPicture ON id = idPicture WHERE idMovie = :idMovie');
    $query->bindValue(':idMovie', $idMovie);
    $query->execute();
    $result = $query->fetchAll();
    if (empty($result)) {
        return "error 404";
    } else {
        return $result;
    }
}

function getMovieActorsData($idMovie) {
    $db = SPDO::getInstance();
    $query= $db->prepare('SELECT firstname, lastname FROM person JOIN movieHasPerson ON id = idPerson WHERE idMovie = :idMovie AND role = \'actor\'');
    $query->bindValue(':idMovie', $idMovie);
    $query->execute();
    $result = $query->fetchAll();
    if (empty($result)) {
        return "error 404";
    } else {
        return $result;
    }
}

function getFetishActorsData($idDirector) {
    $db = SPDO::getInstance();
    $query= $db->prepare('SELECT path, legend FROM picture JOIN personHasPicture ON id = idPicture JOIN directorHasFetish dHF ON idPerson = idFetish WHERE idDirector = :idDirector');
    $query->bindValue(':idDirector', $idDirector);
    $query->execute();
    $result = $query->fetchAll();
    if (empty($result)) {
        return "error 404";
    } else {
        return $result;
    }
}