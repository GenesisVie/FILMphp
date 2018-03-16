<?php
/* Module de PHP
 * Paramètres de configuration du site
 *
 * Copyright 2017, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

const DEBUG = false; // production : false; dev : true
// Accès base de données
const BD_HOST = 'db';
const BD_DBNAME = 'film_db';
const BD_USER = 'pl_bru';
const BD_PWD = 'mamene';
// Langue du site
const LANG ='FR-fr';
// Paramètres du site : nom de l'auteur ou des auteurs
const AUTEUR = 'Ananda et Kirschléger';
//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/c_');
define('PATH_ENTITIES','./entities/');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');
//sous dossiers
define('PATH_CSS', PATH_ASSETS.'css/');
define('PATH_IMAGES', PATH_ASSETS.'images/');
define('PATH_SCRIPTS', PATH_ASSETS.'scripts/');
//define("PATH_GALERIE",'galerie/');
//define('PATH_LOG','log/');
//fichiers
//define('LOG_BDD','logbdd.txt');
define('PATH_LOGO', PATH_IMAGES.'logo.png');
define('PATH_MENU', PATH_VIEWS.'menu.php');