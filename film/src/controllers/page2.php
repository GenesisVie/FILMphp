<?php
require_once(PATH_MODELS.'GenreDAO.php');
require_once(PATH_MODELS.'FilmDAO.php');

$genreDAO = new genreDAO();
$filmDAO = new filmDAO();
$id_film_choisi = $_GET['id'];

$film = $filmDAO->fromId($id_film_choisi);
$genre_libelle = $genreDAO->fromId($film->getId());

require_once(PATH_VIEWS.'page2.php');
?>
