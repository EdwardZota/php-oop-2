<?php


class Cibo extends Products{
    public $calorie;
    public $peso;
    public $tagliaCane;


    public function __construct($immagine,$nome,$prezzo,$valutazione,$categoria,$calorie,$peso,$tagliaCane)
    {

        parent::__construct($immagine,$nome,$prezzo,$valutazione,$categoria);

        $this->calorie=$calorie;
        $this->peso=$peso;
        $this->tagliaCane=$tagliaCane;
    }
}