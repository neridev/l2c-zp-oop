<?php

namespace Penis;


trait CanFly
{
	public function fly()
	{
		var_dump( strtoupper($this->name) . ' IS FLYING, HOLY SHIT' );
	}
}