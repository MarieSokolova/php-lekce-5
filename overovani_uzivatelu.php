<?php

class Uzivatel
{
    public $jmeno;
    public $heslo;
    public function __construct($jmeno, $heslo)
    {
        $this->jmeno = $jmeno;
        $this->heslo = $heslo;
    }
    public function overeni()
    {
        if ($this->jmeno == 'josef' && $this->heslo == 'josef1234'){
           return true;
       } else {
           return false;
       }
    }
    public function ziskejJmeno()
    {
        return $this->jmeno;
    }
}
class Prihlasovani extends Uzivatel
{
    public $prihlaseniUzivatele = ['jmeno', 'heslo'];
    public function prihlas()
    {
    parent::__construct($jmeno, $heslo);
    
    
    }
    public function zobrazPrihlaseneUzivatele()
    {
        echo $prihlaseniUzivatele;
    }
    
}

$uzivatel = new Uzivatel('josef', 'josef1234');
