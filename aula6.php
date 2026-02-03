<?php


class filme{
    public $nome;
    public $tipo;
    public $data_lancamento;
    public $diretor;


    function __construct( string $nome , string $tipo , string $data_lancamento , string $diretor)
{
    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->data_lancamento = $data_lancamento;
    $this->diretor = $diretor;

}

function passar()
{
    echo "{$this->nome} esta passando!!!\n";
}
}

$interestelar = new filme("Interestelar","ficção científica","28/10/2014","Cristopher Nolan" );

$interestelar->passar();

$diario = new filme("diario de uma paixão","romance","13/08/2004","Nick Cassavetes");

$diario->passar();

$koenokatachi = new filme("koe no katachi","Romance","17/9/2016","Naoko Yamada");

$koenokatachi->passar();

    



