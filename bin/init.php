<?php
require_once './config/config.php';
require_once './models/Game.php';
require_once './models/Player/Player.php';

$playersArray = isset($_POST[PLAYERS]) && sizeof($_POST[PLAYERS]) > 0 ? $_POST[PLAYERS] : [];

list(PLAYER_ONE => $playerOne, PLAYER_TWO => $playerTwo) = Helpers::validatePlayers($playersArray);

$game = new Game(new PlayerRepository($playerOne, $playerTwo), new ComponentsRepository());

$game->start();
