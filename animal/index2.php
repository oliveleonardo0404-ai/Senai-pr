<?php


class animal{
    public $patas;
    public $peso;
    public $especie;
    public $tipo;

    function __construct( int $patas , float $peso , string $especie , string $tipo)
    {
        $this->patas = $patas;
        $this->peso = $peso;
        $this->especie = $especie;
        $this->tipo = $tipo;
    }
    
    function comer()
    {
        echo "{$this->especie} esta comendo normalmente!!! \n";
    }

}

$Golden = new animal(4,30,"Canis lupus","mamifero");

$Golden->comer();

$hiena = new animal(4,47,"Crocuta crocuta","mamifero");

$hiena->comer();

$taturana = new animal(6,1,"Polyphemus moth","inseto");

$taturana->comer();


