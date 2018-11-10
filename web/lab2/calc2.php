<?php
header('Content-Type: text/html');
require_once "../include/math.inc.php";

const ARGUMENTS_AMOUNT = 3;
const ADD = "add";
const SUB = "sub";
const MUL = "mul";
const DIV = "div";



if (count($_GET) != ARGUMENTS_AMOUNT) {
	throw new Exception("Wrong amount of arguments");
}

if (isset($_GET['arg1']) && isset($_GET['arg2']) && isset($_GET['operation'])) {
	$firstArgument = $_GET['arg1'];
	$secondArgument = $_GET['arg2'];
	$operation = $_GET['operation'];
	} else {
	throw new Exception("One or more name of GET arguments is wrong");
}

if (!is_numeric($firstArgument) || !is_numeric($secondArgument)) {
	throw new Exception("One or more arguments are not a number");
}

$value = getCalculationValue($firstArgument, $secondArgument, $operation);
echo $value;
