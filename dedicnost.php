<?php


class DopravniProstredek
{
     public $rokvyroby;
}
class Auto extends DopravniProstredek
{
   
    
    public function __construct($rokvyroby)
    {
        parent::__construct($rokvyroby);
        }
}
        
class Tramvaj extends DopravniProstredek
{
    public $pocetMistKeStani;
}