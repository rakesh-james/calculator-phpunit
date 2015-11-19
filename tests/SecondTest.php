<?php

Class SecondTest extends PHPUnit_Framework_TestCase
{

  public static function setUpBeforeClass()
  {

    // Create data

  }

  public function testA1(){
    $value =1;
    $this->assertEmpty($value,' Given value is not empty ');

  }

  /**
   * @depends testA1
   */
  public function testB1(){
    $value = 'Hello world!';
    $this->assertNotEmpty($value,'Given value is empty!');
  }

  public static function tearDownAfterClass()
  {

    // Cleanup data.

  }
}

/*
 * The setUp() and tearDown() template methods are run once for each test method
 * (and on fresh instances) of the test case class.

In addition, the setUpBeforeClass() and tearDownAfterClass() template methods are called
before the first test of the test case class is run and after the last test of the test case class is run, respectively.
 */