<?php

require_once __DIR__ .'/Categorie.php';
require_once __DIR__ .'/Giochi.php';
require_once __DIR__ .'/Cibo.php';
require_once __DIR__ .'/Cucce.php';


class Products {
    public $tipoProdotto;
    public $immagine;
    public $nome;
    public $prezzo;
    public $categoria;
    public $valutazione;


    public function __construct($tipoProdotto,$immagine,$nome,$prezzo,$valutazione,Categorie $categoria)
    {
        $this->tipoProdotto=$tipoProdotto;
        $this->immagine=$immagine;
        $this->nome=$nome;
        $this->prezzo=$prezzo;
        $this->valutazione=$valutazione;
        $this->categoria=$categoria;
    }
}