<?php

class Auto
{
    public $rokvyroby;
    
    public function __construct()
    {
        $this->rokvyroby = $rokvyroby    }
    public function spocitejVek()
    
}
{
    
}
$skodafabia = new Auto(2001);
echo $skodafabia->spocitejvek();

$skodafabia = [
'rokvyroby'=> 2001,
'barva' => 'bila'
];
function spocitejVek ($rokvyroby)
{
    return date ('Y') - $rokvyroby;
}


echo spocitejVek($skodafabia = ['rokvyroby']);