<?php

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
