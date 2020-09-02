<?php

class Wolf
{
	public $name;
	public $weight;

	public function __construct($name, $weight)
	{
		$this->name = $name;
		$this->weight = $weight;
	}

	public function bark()
	{
		var_dump("GGGGrrrRRrRrRRRrrRrR!!");
	}
}


class Dog extends Wolf
{
	public function bark()
	{
		var_dump("i'm just a puppy, woof:(");
	}
}

class Coyote extends Wolf
{
	public function bark()
	{
		var_dump("woof, ah-MOTHERFUCKING WOOF!!");
	}

	public function kill()
	{
		var_dump( $this->name . " just fuckin killed you dead." );
	}
}


$dunco = new Dog("Dunco", 5);
var_dump( $dunco );
$dunco->bark();

$courage = new Wolf("Courage", 12);
var_dump( $courage );
$courage->bark();

$killer = new Coyote('Danger', 22);
var_dump( $killer );
$killer->kill();