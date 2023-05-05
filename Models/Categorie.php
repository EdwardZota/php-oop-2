<?php

class Categorie {
    public $nome;
    public $icon;


    public function __construct($nome,$icon)
    {
        $this->nome=$nome;
        $this->icon=$icon;
    }
}