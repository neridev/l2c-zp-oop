<?php

namespace Penis;


class Enemy extends Being
{
	use CanFly;

	public function takeDamage($dmg)
	{
		$this->health = $this->health - $dmg;

		echo "*ouch*";

		if ( $this->health <= 0 ) {
			var_dump($this->name.' dropped '.$this->inventory['gold'].' gold.');
			$this->perish();
		}
		else {
			var_dump($this->name.' has '.$this->health.' HP left');
		}
	}

	protected function perish()
	{
		var_dump( $this->name . ' died' );
	}
}