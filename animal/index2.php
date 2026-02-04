<?php


abstract class animal{
    protected $nome;
    protected $peso;
    private $tipo;
    protected $especie;

    public function __construct( string $nome , float $peso , string $especie)
    {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->especie = $especie;
    }
    
    public function comer()
    {
        $this->tipo = "mamifero";
        //aqui ele só vai funcionar se colocar o os dados enquanto ele esteja na classe principal que esta a privada
        echo "o {$this->nome} da especie {$this->tipo} esta comendo normalmente!!! \n";

    }
    
       abstract public function tipo(): string;

}

class cachorro extends animal{

    public function tipo(): string {
        return "cachorro";
} 

}

$golden =  new cachorro("carlos",25,"terrestre");

$golden->comer();


