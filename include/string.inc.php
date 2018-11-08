<?php

function last($str)
{
	if (!is_string($str)) {
		throw new Exception("It is not string");
	}

	$strLength = mb_strlen($str);

	if ($strLength == 0) {
		throw new Exception("The string is empty");
	} else {
		return mb_substr($str, $strLength - 1);
	}
}

function withoutLast($str)
{
	if (!is_string($str)) {
		throw new Exception("It is not string");
	}

	$strLength = mb_strlen($str);

	if ($strLength == 0) {
		throw new Exception("The string is empty");
	} else {
		return mb_substr($str, 0, $strLength - 1);
	}
}

function reverse($str)
{
	if (!is_string($str)) {
		throw new Exception("It is not string");
	}

	$strArr = preg_split('~~u', $str, -1, PREG_SPLIT_NO_EMPTY);
	$arrayLength = count($strArr);

	for ($i = 0, $j = $arrayLength - 1; $i <= $j; ++$i, --$j) {
		swap($strArr[$i], $strArr[$j]);
	}

	return implode("", $strArr);
}

function swap(&$value1, &$value2)
{
	$temp = $value1;
	$value1 = $value2;
	$value2 = $temp;
}
