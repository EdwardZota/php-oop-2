<?php


class Giochi extends Products{
        public $materiale;
        public $colore;


    public function __construct($immagine,$nome,$prezzo,$valutazione,$categoria,$materiale,$colore)
    {

        parent::__construct($immagine,$nome,$prezzo,$valutazione,$categoria);

        $this->materiale=$materiale;
        $this->colore=$colore;
    }
}