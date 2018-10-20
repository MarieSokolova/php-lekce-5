<?php
interface ITrojrozmernyObrazec
{
    public function ziskejObjem();
}
{
    public function ziskejPovrch();
}
abstract class TrojrozmernyObrazec implements ITrojrozmernyObrazec
{
    private $pocetDimenzi;
    public function __construct($pocetDimenzi)
    {
        $this->pocetDimenzi = $pocetDimenzi;
    }
    public function ziskejPocetDimenzi()
    {
        return $this->pocetDimenzi;
    }
}

class Kvadr extends TrojrozmernyObrazec
{
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
 {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct(3);
    }
    public function ziskejObjem();
    {
        return $this->a * $this->b * $this->c;
    }
    {
    public function ziskejPovrch();
        return 2*(($this->a * $this->b)+($this->b * $this->c)+($this->a * $this->c));
    }
}
class Krychle extends TrojrozmernyObrazec
{
    private $a;
   
    public function __construct($a)
 {
        $this->a = $a;
        
        parent::__construct(3);
    }
    public function ziskejObjem();
    {
        return $this->a * $this->a * $this->a;
    }
    {
    public function ziskejPovrch();
        return (6*($this->a * $this->a));
    }
}
class Koule extends TrojrozmernyObrazec
{
    private $a;
   
    public function __construct($a)
 {
        $this->a = $a;
        
        parent::__construct(3);
    }
    public function ziskejObjem();
    {
        return (4*3.14/3)*pow($this->a, 3);
    }
    {
    public function ziskejPovrch();
        return (4*3.14)*pow($this->a, 2);
    }
}
class Jehlan extends TrojrozmernyObrazec
{
    private $v;
    private $Spodstavy;
    private $Splaste;
    public function __construct($v, $Spodstavy, $Splaste)
 {
        $this->v = $v;
        $this->Spodstavy = $Spodstavy;
        $this->Splaste = $Splaste;
        parent::__construct(3);
    }
    public function ziskejObjem();
    {
        return ($this->v*$this->Spodstavy/3);
    }
    {
    public function ziskejPovrch();
        return ($this->Spodstavy+$this->Splaste);
    }
}
function vypisDetail(ITrojrozmernyObrazec $utvar)
{
    echo '<h3>' . get_class($utvar) . '</h3>';
    echo 'Objem: ' . $utvar->ziskejObjem() . '<br>';
    echo 'Povrch: ' . $utvar->ziskejPovrch() . '<br><br>';
}
$krychle = new Krychle (3);
vypisDetail($krychle);
