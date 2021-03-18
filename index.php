<?php

use MyApp\Data\Database;
use MyApp\Game\Game;
use MyApp\Game\Player\Player;
require_once realpath("vendor/autoload.php");

$database= new Database();
//$database= new \MyApp\Data\Database();
$game= new Game();
$gameController= new \MyApp\Game\GameController();
$player = new Player();



