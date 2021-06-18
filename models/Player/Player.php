<?php

require_once './libs/Helpers.php';
require_once './models/Player/PlayerGettersSetters.php';
require_once './models/Player/Shouts.php';
require_once './repositories/PlayerRepository.php';



class Player extends PlayerGettersSetters {
	public $alive = true;

	function __construct($name,  $hp,  $dmg, $race,  $shouts) {
		parent::__construct($name, $hp, $dmg, $race, $shouts);
	}

	public function attack(Player $enemy) {
		if ($this === $enemy)
			throw new Error('You cannot attack yourself...');

		$enemy->takeDmg($this->getDmg());

		return $this->checkIfDead($enemy);
	}

	public function takeDmg($dmg) {
		if (($this->hp - $dmg) <= 0) {
			$this->hp = 0;
			return;
		}
		$this->hp -= $dmg;
	}

	public function setHp(float $hp): self {
		$this->hp = $hp;

		return $this;
	}

	private function checkIfDead(Player $player) {
		if ($player->getHp() < 1) {
			$this->alive = false;
			return $this->alive;
		}
		return true;
	}
}
