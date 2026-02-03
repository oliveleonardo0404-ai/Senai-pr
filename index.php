
class automovel{
    public $cor;
    public $rodas;
    public $tipo; 
    public $marca;

    function __construct(string $cor, int $rodas , string $tipo , string $marca)
    {
    
        $this->cor = $cor;
        $this->rodas = $rodas;
        $this->tipo = $tipo;
        $this->marca = $marca;

    } 

    function acelerar()
    {
        echo "{$this->tipo} esta acelerando!!\n";
        
    }

}

$Corolla = new automovel("vermelho", 4 ,"sedan","toyota");

$Corolla->acelerar();

$Yamaha = new automovel("preta", 2 ,"esportiva","maha");

$Yamaha->acelerar();


$onibus = new automovel("laranja",4,"Urbano","Mercedes-Benz");

$onibus->acelerar();