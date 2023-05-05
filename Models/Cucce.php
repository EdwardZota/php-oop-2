<?php


class Cucce extends Products{
    public $materiale;
    public $dimensioni;


    public function __construct($immagine,$nome,$prezzo,$valutazione,$categoria,$materiale,$dimensioni)
    {

        parent::__construct($immagine,$nome,$prezzo,$valutazione,$categoria);

        $this->materiale=$materiale;
        $this->dimensioni=$dimensioni;
    }
}