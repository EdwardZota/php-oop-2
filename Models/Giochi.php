<?php


class Giochi extends Products{
        public $materiale;
        public $colore;


    public function __construct($tipoProdotto,$immagine,$nome,$prezzo,$valutazione,$categoria,$materiale,$colore)
    {

        parent::__construct($tipoProdotto,$immagine,$nome,$prezzo,$valutazione,$categoria);

        $this->materiale=$materiale;
        $this->colore=$colore;
    }
}