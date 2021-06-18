<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		label {
			display: block;
			cursor: pointer;
		}

		fieldset {
			width: 40%;
			display: inline-block;
			text-align: center;
		}

		form {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		button {
			cursor: pointer;
			margin: 1em;
			padding: 2em;
			background: #004fae;
			color: white;
			font-weight: 900;
			border: none;
			border-radius: .2em;
		}

		h1 {
			text-align: center;
		}
	</style>
</head>

<body>

	<h1>Pour tester avec des valeurs par défaut, appuyer sur le gros bouton directement.</h1>
	<form action="./round.php" method="POST">
		<fieldset>
			<span><b>Joueur 1</b></span>
			<div>
				<label for="name">Nom</label>
				<input id="name" type="text" name="name" placeholder="DagDag">
			</div>
			<div>
				<label for="hp">Points de vie</label>
				<input id="hp" type="number" name="hp" placeholder="60">
			</div>
			<div>
				<label for="dmg">Points de dégats</label>
				<input id="dmg" type="number" name="dmg" placeholder="5">
			</div>
			<div>
				<label for="race">Race</label>
				<input id="race" type="text" name="race" placeholder="Orc">
			</div>
			<div>
				<label for="shoutVictory">Cri de victoire</label>
				<input id="shoutVictory" type="text" name="shoutVictory" placeholder="Bien fait pour toi !">
			</div>
			<div>
				<label for="shoutHit">Cri d'attaque</label>
				<input id="shoutHit" type="text" name="shoutHit" placeholder="Ouuuugaaaaahhhh !!!">
			</div>

		</fieldset>
		<fieldset>

			<span><b>Joueur 2</b></span>

			<div>
				<label for="name1">Nom</label>
				<input id="name1" type="text" name="name1" placeholder="Elys">
			</div>
			<div>
				<label for="hp1">Points de vie</label>
				<input id="hp1" type="number" name="hp1" placeholder="45">
			</div>
			<div>
				<label for="dmg1">Points de dégats</label>
				<input id="dmg1" type="number" name="dmg1" placeholder="11">
			</div>
			<div>
				<label for="race1">Race</label>
				<input id="race1" type="text" name="race1" placeholder="Elf">
			</div>
			<div>
				<label for="shoutVictory1">Cri de victoire</label>
				<input id="shoutVictory1" type="text" name="shoutVictory1" placeholder="Paix pour la nature.">
			</div>
			<div>
				<label for="shoutHit1">Cri d'attaque</label>
				<input id="shoutHit1" type="text" name="shoutHit1" placeholder="Par les forces de la nature !">
			</div>
		</fieldset>
		<button type="submit">A la gueeeerre!</button>
	</form>
</body>

</html>