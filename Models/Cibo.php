<?php

require_once __DIR__ . '/../Traits/tagliaAnimale.php';

class Cibo extends Products{
    public $calorie;
    public $peso;
    
    use TagliaAnimale;


    public function __construct($immagine,$nome,$prezzo,$valutazione,$categoria,$calorie,$peso,$tagliaAnimale)
    {

        parent::__construct($immagine,$nome,$prezzo,$valutazione,$categoria);

        $this->calorie=$calorie;
        $this->peso=$peso;
        $this->tagliaAnimale=$tagliaAnimale;
    }
}