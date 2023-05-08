<?php


trait TagliaAnimale {
    public $tagliaAnimale;

    public function setTaglia($tagliaAnimale){
        $this->tagliaAnimale = $tagliaAnimale;

    }

    public function getTaglia(){
        return $this->tagliaAnimale;
    }
}