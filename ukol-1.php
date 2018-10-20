<?php

class Ctverec
{
  public $delkaStrany;
  
public function __construct($delkaStrany)
  {
    $this->delkaStrany = $delkaStrany;
 
  }
  
 public function spocitejObsah()
  {
       $obsah = $this->delkaStrany*$this->delkaStrany;
    return $obsah;
  }
}
$ctverec = new Ctverec(6);
echo 'Obsah ctverce o delce strany ';
echo $ctverec->delkaStrany;
echo ' je ';
echo $ctverec->spocitejObsah();