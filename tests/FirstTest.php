<?php

Class FirstTest extends PHPUnit_Framework_TestCase{

  public function testFirst(){

    $this->assertEquals(1,10,'1 is not equals to 1');
  }

  public function testSecond(){
    $this->assertNotEquals(1,2,'1 is equals to 2');
  }

  public function testThird(){
    $array = array('a','b');
    $this->assertContains('a',$array,' Array doesnt have a');

    //$this->arrayHasKey();

    //$a;
    //$this->assertEmpty($a,' a is not empty. ');


  }


}