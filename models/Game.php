<?php

require_once './libs/Helpers.php';
require_once './repositories/PlayerRepository.php';
require_once './repositories/ComponentRepository.php';

class Game {
	/**
	 * If set to true, game is running.
	 */
	private $state = false;
	public PlayerRepository $playerRepository;
	public ComponentsRepository $componentQueue;

	public function __construct(PlayerRepository $playerRepository, ComponentsRepository $componentQueue) {
		$this->playerRepository = $playerRepository;
		$this->componentQueue = $componentQueue;
	}

	public function start() {
		$this->state = true;
		while ($this->state) {
			$playersByRole = $this->playerRepository->getRandomRoles();

			$attacker = $playersByRole[IS_ATTACKING];
			$attacked = $playersByRole[IS_HIT];

			$attackedAlive = $attacker->attack($attacked);

			$this->componentQueue->addComponent(Helpers::getPlayerCardAttack($attacker, $attacked, $this->playerRepository->isPlayerOne($attacker)));

			if (!$attackedAlive) {
				$winner = $attacker;
				$this->playerRepository->setWinner($winner);
				$this->stop();
				return;
			}
		}
	}

	public function stop() {
		$this->state = false;
		$winner = $this->playerRepository->getWinner();
		$this->componentQueue->setResult(Helpers::getPlayerWin($winner, $this->playerRepository->isPlayerOne($winner)));
	}

	public function getState() {
		return $this->state;
	}
}
