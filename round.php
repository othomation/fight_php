<link rel="stylesheet" href="./assets/styles.css">
<?php

require_once './models/Game.php';
require_once './models/Player/Player.php';

$playerOne;
$playerTwo;

if (Helpers::validatePost($_POST)) {
	$playerOne = new Player($_POST["name"], floatval($_POST["hp"]), floatval($_POST["dmg"]), $_POST["race"], new Shouts($_POST["shoutVictory"], $_POST["shoutHit"]));
	$playerTwo = new Player($_POST["name1"], floatval($_POST["hp1"]), floatval($_POST["dmg1"]), $_POST["race1"], new Shouts($_POST["shoutVictory1"], $_POST["shoutHit1"]));
} else {
	$playerOne = new Player("DagDag", 60, 5, 'orc', new Shouts('Bien fait pour toi !', 'Ouuuugaaaaahhhh !!!'));
	$playerTwo = new Player("Elys", 45, 11, 'elf', new Shouts('Paix pour la nature.', 'Par les forces de la nature !'));
}

$game = new Game(new PlayerRepository($playerOne, $playerTwo), new ComponentsRepository());


?>

<section id="players">
	<?= Helpers::getPlayerCard($playerOne, 'one'); ?>
	<?= Helpers::getPlayerCard($playerTwo, 'two'); ?>
</section>

<!-- START THE GAME ! -->
<?php $game->start(); ?>
<!-- GAME ENDED ! -->

<section id="rounds">
	<?php foreach ($game->componentQueue->getRounds() as $component) : ?>
		<?= $component ?>
	<?php endforeach; ?>
</section>

<section id="result">
	<?= $game->componentQueue->getResult() ?>
</section>