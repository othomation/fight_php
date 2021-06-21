<?php
require_once './config/config.php';
require_once './models/Game.php';
require_once './models/Player/Player.php';

$playersArray = isset($_POST[PLAYERS]) && sizeof($_POST[PLAYERS]) > 0 ? $_POST[PLAYERS] : [];
$players = Helpers::validatePlayers($playersArray);

list(PLAYER_ONE => $playerOne, PLAYER_TWO => $playerTwo) = $players;

$game = new Game(new PlayerRepository(...array_values($players)), new ComponentsRepository());

$game->start();
