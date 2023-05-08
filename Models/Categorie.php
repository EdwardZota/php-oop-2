<?php

require_once __DIR__ . '/../Traits/tagliaAnimale.php';


class Categorie {
    public $nome;
    public $icon;

    use TagliaAnimale;

    public function __construct($nome,$icon)
    {
        $this->nome=$nome;
        $this->icon=$icon;
    }
}