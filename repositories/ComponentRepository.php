<?php

/**
 * Peut être modifié (enfin, refait.) pour s'en servir de gamestate.
 * Pour stocker, dans un dictionnaire, les différentes 'rounds' (au sens 1 action)
 * pour pouvoir 'rollback' à l'été précedent ()
 */
class ComponentsRepository {
	private array $queue = [];
	private $result = null;

	public function addComponent(string $component) {
		array_push($this->queue, $component);
	}

	public function setResult(string $component) {
		$this->result = $component;
	}

	public function getResult() {
		return $this->result;
	}

	public function getRounds() {
		return $this->queue;
	}
}
