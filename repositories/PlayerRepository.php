<?php
require_once './config/config.php';

class PlayerRepository {
	protected array $players = [PLAYER_ONE => null, PLAYER_TWO => null];
	public $winner = null;

	public function __construct(Player $playerOne = null, Player $playerTwo = null) {
		$this->setPlayers($playerOne, $playerTwo);
	}

	private function setPlayers(Player $playerOne, Player $playerTwo) {
		$this->players[PLAYER_ONE] = $playerOne;
		$this->players[PLAYER_TWO] = $playerTwo;
	}
	protected function addPlayer(Player $player): void {
		array_push($this->players, $player);
	}

	public function getPlayers() {
		return $this->players;
	}

	public function arePlayersFull(): bool {
		return $this->players[PLAYER_ONE] && $this->players[PLAYER_TWO];
	}

	public function isPlayerOne(Player $player) {
		return $this->players[PLAYER_ONE] === $player;
	}


	public function getRandomRoles(): array {
		$isAttackingIndex = rand(0, 1) === 1 ? PLAYER_ONE : PLAYER_TWO;
		$isHitIndex = $isAttackingIndex === PLAYER_ONE ? PLAYER_TWO : PLAYER_ONE;
		return [IS_ATTACKING => $this->players[$isAttackingIndex], IS_HIT => $this->players[$isHitIndex]];
	}

	public function getWinner() {
		return $this->winner;
	}

	public function setWinner(Player $player) {
		$this->winner = $player;
	}
	public function getNbPlayers() {
		return sizeof($this->players);
	}
}