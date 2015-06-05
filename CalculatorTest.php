<?php

require_once('Calculator.php');

class CalculatorTest extends PHPUnit_Framework_TestCase{

	private $calculator;

	public function setUp() {
		$this->calculator = new Calculator();
	}

	public function tearDown(){
	unset($this->calculator);
	}

	public function testAdd(){

		$result = $this->calculator->add(6,5);
		$this->assertTrue(11 == $result);
		
	}

	public function testAddString(){
		$result = $this->calculator->AddString("1", "2");
		$this->assertTrue(3 == $result);
	}

	public function testAddNull(){
		$result = $this->calculator->add(null, 2);
		$this->assertFalse($result);
	}

	public function testSubtract(){
		$result = $this->calculator->subtract(6,5);
		$this->assertTrue(1 == $result);
	}

	public function testSubtractString(){
		$result = $this->calculator->SubString("3", "2");
		$this->assertTrue(1 == $result);
	}

	public function testSubtractNull(){
		$result = $this->calculator->subtract(null, 2);
		$this->assertFalse($result);
	}

	public function testMulitply(){
		$result = $this->calculator->multiply(2, 3);
		$this->assertTrue(6 == $result);
	}

	public function testMultiplyString(){
		$result = $this->calculator->multiply(null, 3);
		$this->assertFalse($result);	
	}	

	public function testMultiplyNull(){
		$result = $this->calculator->multiply(null, 2);
		$this->assertFalse($result);
	}

	public function testDivide(){
		$result = $this->calculator->divide(6, 3);
		$this->assertTrue(2 == $result);
	}

	public function testDivideString(){
		$result = $this->calculator->DivideString("6", "3");
		$this->assertTrue(2 == $result);
	}


	public function testDivideNull(){
		$result = $this->calculator->divide(null, 3);
		$this->assertFalse($result);
	}

	



}









