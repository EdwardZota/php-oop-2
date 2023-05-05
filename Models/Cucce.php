<?php


class Cucce extends Products{
    public $materiale;
    public $dimensioni;


    public function __construct($tipoProdotto,$immagine,$nome,$prezzo,$valutazione,$categoria,$materiale,$dimensioni)
    {

        parent::__construct($tipoProdotto,$immagine,$nome,$prezzo,$valutazione,$categoria);

        $this->materiale=$materiale;
        $this->dimensioni=$dimensioni;
    }
}