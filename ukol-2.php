<?php

class GeometrickyUtvar
 {
   private $pocetStran;
   
   public function __construct($pocetStran)
   {
     $this->pocetStran = $pocetStran;
   }
   
    public function ziskejPocetStran()
  {
      return $this->pocetStran;
  }
}

class Ctverec extends GeometrickyUtvar
{
 private $delkaStrany;
  public function __construct($delkaStrany) 
    {
$this->delkaStrany = $delkaStrany;
    parent::__construct(4);
  }
  public function ziskejObvod()
  {
     $obvod = $pocetStran*$this->ziskejPocetStran();
      return $obvod;
  }
}
class Trojuhelnik extends GeometrickyUtvar
{
 
  public function __construct($pocetStran)
  {
    
    parent::__construct(3);
  }
  public function ziskejObvod()
  {
      $obvod = $pocetStran*$delkaStran;
      return $obvod;
  }
  
}
$ctverec = new Ctverec(3);
echo 'Obsah ctverce o delce strany ';
echo $ctverec->delkaStrany;