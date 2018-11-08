<?php

function getCalculationValue($firstArgument, $secondArgument, $operation)
{
	switch ($operation) {
		case ADD:
			return $firstArgument + $secondArgument;
		case SUB:
			return $firstArgument - $secondArgument;
		case MUL:
			return $firstArgument * $secondArgument;
		case DIV:
		if ($secondArgument != 0) {
				return $firstArgument / $secondArgument;
			} else {
				throw new Exception("arg2 is zero. Division by zero is not possible");
			}	
	}
}