<?php
require_once './models/Player/Player.php';
class Helpers {
	static function validatePlayers(array $players): array {
		$defaultPlayerOne = new Player("DagDag", 60, 5, 'orc', new Shouts('Bien fait pour toi !', 'Ouuuugaaaaahhhh !!!'));
		$defaultPlayerTwo = new Player("Elys", 45, 11, 'elf', new Shouts('Paix pour la nature.', 'Par les forces de la nature !'));
		$playersArray = [PLAYER_ONE => $defaultPlayerOne, PLAYER_TWO => $defaultPlayerTwo];

		foreach ($players as $key => $element) {
			$shouts = null;
			$player = null;
			try {
				list(shoutVictory => $shoutVictory, shoutHit => $shoutHit) = $element;
				$shouts = new Shouts($shoutVictory, $shoutHit);
				unset($element[shoutVictory]);
				$element[shoutHit] = $shouts;
				$player = new Player(...array_values($element));
				$playersArray[$key] = $player;
			} catch (Error $error) {
				return $playersArray;
			}
		}

		return $playersArray;
	}

	static function prettyPrint(array $array) {
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	}

	static function printInfo($message) {
		echo '<div class="message message--info">' . $message . '</div>';
	}

	static function printDanger($message) {
		echo '<div class="message message--danger">' . $message . '</div>';
	}

	static function getPlayerCard(Player $player, $cssClass) {
		$html = <<<EOT
	<div class="player__card player__card--{$cssClass}">
		<b>{$player->getName()}</b>
		<em>{$player->getRace()}</em>
		<ul>
			<li class="prop prop--dmg">
				<i>DMG</i> <b>{$player->getDmg()}</b>
			</li>
			<li class="prop prop--hp">
				<i>HP</i> <b>{$player->getHp()}</b>
			</li>
			<li class="prop prop--shout--hit">
				<i>Hit Shout</i> <b>{$player->getShouts()->hit}</b>
			</li>
			<li class="prop prop--shout--victory">
				<i>Victory Shout</i> <b>{$player->getShouts()->victory}</b>
			</li>
		</ul>
	</div>
EOT;
		return $html;
	}

	static function getPlayerCardAttack(Player $player, Player $enemy, $isPlayerOne): string {
		$cssClass = $isPlayerOne ? 'one' : 'two';
		$enemyHpMinusDmg = $enemy->getHp() + $player->getDmg();
		$html = <<<EOT
	<div class="card--round card--round">
		<b class="card--round__head card--round__head--{$cssClass}">{$player->getShouts()->hit}</b>
		<div class="card--round__body">
			<em>{$player->getName()}</em> de race <em>{$player->getRace()}</em>
			a attaqu?? <em>{$enemy->getName()}</em> de race <em>{$enemy->getRace()}</em>
			avec <b><em>{$player->getDmg()}</em></b> points de d??gats sur <b><em>{$enemyHpMinusDmg}</em></b>
		</div>
		<p class="card--round__footer">Il reste donc <b>{$enemy->getHp()}</b> points de vie ?? <em>{$enemy->getName()}</em></p>
	</div>
EOT;

		return $html;
	}

	static function getPlayerWin(Player $winner, $isPlayerOne): string {
		$cssClass = $isPlayerOne ? 'one' : 'two';
		$html = <<<EOT
	<div class="player player--win player--win--{$cssClass}">
		<em>"{$winner->getShouts()->victory}"</em> <br/> <span>{$winner->getName()}</span>
	</div>
EOT;
		return $html;
	}
}
