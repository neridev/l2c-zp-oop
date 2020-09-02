<?php

namespace Penis;


abstract class Being
{
	protected $name;
	protected $health;
	protected $mana;
	protected $inventory = [];


	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getHealth()
	{
		return $this->health;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @param mixed $health
	 */
	public function setHealth($health)
	{
		$this->health = $health;
	}


	/**
	 * Being constructor.
	 * @param $name
	 * @param $health
	 * @param int $mana
	 * @param array $inventory
	 */
	public function __construct($name, $health, array $inventory, $mana = 50)
	{
		$this->name      = $name;
		$this->health    = $health;
		$this->mana      = $mana;
		$this->inventory = $inventory;
	}

	abstract public function takeDamage($dmg);
	abstract protected function perish();

}