<?php

include 'assets/sunhours.php';

/**
 * @author mindyk
 * @link http://php.net/manual/ru/function.next.php
 * @link http://php.net/manual/ru/function.current.php
 * @param int   $zipcode
 * @param array $aSunHours
 * @return int
 */
function getSunHours($zipcode, $aSunHours) 
{
	$firstArray = current($aSunHours);
	$firstZip = current($firstArray);
	
	if ($zipcode < $firstZip) {
		return -1;
	}

	foreach ($aSunHours as $data) 
	{
		if (current($data) === $zipcode) {
			return next($data);
		}
	}

	return getSunHours($zipcode - 1, $aSunHours);
}
