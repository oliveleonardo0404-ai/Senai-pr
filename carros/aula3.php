<?php


abstract class automovel{
    protected string $nome ;
    protected int $rodas;
    protected string $marca;
    protected int $velocidade = 0;

    public function __construct(string $nome, int $rodas , string $marca)
    {
    
        $this->nome = $nome;
        $this->rodas = $rodas;
        $this->marca = $marca;

    } 


    public function acelerar()
    {
        $this->velocidade += 250;
        echo "esta a km {$this->velocidade} !!\n";
    }

    abstract public function tipo(): string;

    public function virar()
    {
        echo "{$this->nome} virou para a esquerda";
    }


}

class carroEsportivos extends automovel{

     public function tipo(): string {
        return "Carro esportivo";

}

  }

  $Corvette = new carroEsportivos("Corvette",4,"Chevrolet");

  $Corvette->acelerar();







