<?php


abstract class filme{
    protected string $nome ;
    protected string $tipo;
    protected string $data_lancamento;
    protected string $diretor;


    public function __construct( string $nome , string $tipo , string $data_lancamento , string $diretor)
{
    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->data_lancamento = $data_lancamento;
    $this->diretor = $diretor;

}

 abstract public function tipo(): string;


public function passar()
{
    echo "{$this->nome} esta passando!!!\n";
}
}

class NoCinema extends filme{

     public function tipo(): string {
        return "Vingadores Doom day";
}




}

    



