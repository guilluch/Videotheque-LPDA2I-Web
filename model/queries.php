<?php
include_once 'SPDO.php';

function getUsername($idUser) {

    $db = SPDO::getInstance();
    $requete= $db->prepare('SELECT username FROM user WHERE id_user = :id_user');
    $requete->bindValue(':id_user', $idUser, PDO::PARAM_STR);
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
    $requete->bindValue(':id_diary', $idDiary, PDO::PARAM_STR);
    $requete->bindValue(':id_user', $idUser,PDO::PARAM_STR);
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
    $query->bindValue(':id', $id, PDO::PARAM_STR);
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
    $query->bindValue(':id', $id, PDO::PARAM_STR);
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
    $query= $db->prepare('SELECT * FROM person WHERE id=:id');
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();

    if (empty($result)) {
        return "error 404";
    } else {
        return $result;
    }
}

function getAsideData() {
    $db = SPDO::getInstance();
    $query= $db->prepare('SELECT * FROM picture JOIN personHasPicture ON id = idPicture JOIN movieHasPerson ON ');
    // $query->bindValue(':idMovie', $idMovie, PDO::PARAM_STR);
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
    $query= $db->prepare('SELECT * FROM picture JOIN movieHasPicture ON id = idPicture WHERE idMovie = :idMovie');
    $query->bindValue(':idMovie', $idMovie, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetchAll();
    if (empty($result)) {
        return "error 404";
    } else {
        return $result;
    }
}