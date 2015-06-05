<?php

class Calculator 
{
//Addition
	public function add($num1, $num2){
		//if value is null then return false
		if(is_null($num1) || is_null($num2)){
			return false;
		}else{
			return $num1 + $num2;
			}
		}

	public function AddString($num1, $num2){
		return intval($num1) + intval($num2);
	}

//Subtraction
	public function subtract($num1, $num2){
		//if value is null return false
		if(is_null($num1) || is_null($num2)){
			return false;
		}else{
		return $num1 - $num2;
		}
	}

	public function SubString($num1, $num2){
	
		return intval($num1) - intval($num2);
	}

//Multipication
	public function multiply($num1, $num2){
		//if value is null return false
		if(is_null($num1) || is_null($num2)){
			return false;
		}else{
		return $num1 * $num2;
		}
	}

	public function MultiplyString($num1, $num2){
	
		return intval($num1) * intval($num2);
	}

//Division
	public function divide($num1, $num2){
		//if value is null return false
		if(is_null($num1) || is_null($num2)){
			return false;
		}else{
		return $num1 / $num2;
		}
	}


	public function DivideString($num1, $num2){
	
		return intval($num1) / intval($num2);
	}
	


}



?>