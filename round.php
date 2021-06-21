<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/styles.css">
	<title>Fight !</title>
</head>

<body>
	<?php require_once './bin/init.php'; ?>

	<section id="players">
		<?= Helpers::getPlayerCard($playerOne, 'one'); ?>
		<?= Helpers::getPlayerCard($playerTwo, 'two'); ?>
	</section>

	<!-- START THE GAME ! -->
	<?php $game->start(); ?>
	<!-- GAME ENDED ! -->

	<main>
		<section id="rounds">
			<?php foreach ($game->componentQueue->getRounds() as $component) : ?>
				<?= $component ?>
			<?php endforeach; ?>
		</section>

		<section id="result">
			<?= $game->componentQueue->getResult() ?>
		</section>
	</main>
</body>

</html>