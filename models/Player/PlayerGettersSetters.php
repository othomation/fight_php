<?php

class PlayerGettersSetters {
	protected string $name;
	protected float $hp;
	protected float $dmg;
	protected string $race;
	protected Shouts $shouts;

	function __construct(string $name, float $hp, float $dmg, string $race, Shouts $shouts) {
		$this->name = $name;
		$this->hp = $hp;
		$this->dmg = $dmg;
		$this->race = $race;
		$this->shouts = $shouts;
	}
	/**
	 * Get the value of name
	 *
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * Set the value of name
	 *
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName(string $name): self {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get the value of hp
	 *
	 * @return float
	 */
	public function getHp(): float {
		return $this->hp;
	}

	/**
	 * Set the value of hp
	 *
	 * @param float $hp
	 *
	 * @return self
	 */
	public function setHp(float $hp): self {
		$this->hp = $hp;

		return $this;
	}

	/**
	 * Get the value of dmg
	 *
	 * @return float
	 */
	public function getDmg(): float {
		return $this->dmg;
	}

	/**
	 * Set the value of dmg
	 *
	 * @param float $dmg
	 *
	 * @return self
	 */
	public function setDmg(float $dmg): self {
		$this->dmg = $dmg;

		return $this;
	}

	/**
	 * Get the value of race
	 *
	 * @return string
	 */
	public function getRace(): string {
		return $this->race;
	}

	/**
	 * Set the value of race
	 *
	 * @param string $race
	 *
	 * @return self
	 */
	public function setRace(string $race): self {
		$this->race = $race;

		return $this;
	}

	/**
	 * Get the value of shouts
	 *
	 * @return Shouts
	 */
	public function getShouts(): Shouts {
		return $this->shouts;
	}

	/**
	 * Set the value of shouts
	 *
	 * @param Shouts $shouts
	 *
	 * @return self
	 */
	public function setShouts(Shouts $shouts): self {
		$this->shouts = $shouts;

		return $this;
	}
}
