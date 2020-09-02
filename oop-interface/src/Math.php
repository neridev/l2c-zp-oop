<?php

namespace Penis;


class Math
{
	public static function sum(...$nums)
	{
		return array_sum( $nums );
	}


	public static function avg(...$nums)
	{
		return array_sum($nums) / count($nums);
	}
}