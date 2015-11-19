<?php

use App\Calculator;

Class CalculatorTest extends PHPUnit_Framework_TestCase{

  public $calculator;

  public static function setUpBeforeClass()
  {
  }

  public function testAdd(){
    $abcd = new Calculator(2,4);
    $addition = $abcd->add();
    $this->assertEquals(6,$addition,'addition failed!');
  }

  public function testMul(){
    $abcd = new Calculator(2,4);
    $multi = $abcd->mul();
    $this->assertEquals(8,$multi,'multi failed!');
  }

}