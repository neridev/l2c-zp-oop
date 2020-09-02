<?php

namespace Penis;


class Hero extends Being
{
	public function takeDamage($dmg)
	{
		$this->health = $this->health - $dmg;

		// armor, dice roll...

		if ( $this->health <= 0 ) {
			$this->perish();
		} else {
			var_dump($this->name.' has '.$this->health.' HP');
		}
	}

	protected function perish()
	{
		var_dump( $this->name . ' died' );
	}

}