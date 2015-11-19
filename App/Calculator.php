<?php

namespace App;

Class Calculator {

  private $inupt1;
  private $inupt2;

  /**
   * @param $i1
   * @param $i2
   */
  public function __construct($i1, $i2){
    $this->inupt1 = $i1;
    $this->inupt2 = $i2;
  }

  public function add(){
    return $this->inupt1 + $this->inupt2;
  }

  public function sub(){
    return $this->inupt1 - $this->inupt2;
  }

  public function mul(){
    return $this->inupt1 * $this->inupt2;
  }

  public function div(){
    return $this->inupt1 / $this->inupt2;
  }

}