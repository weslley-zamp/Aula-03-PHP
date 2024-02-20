<?php
// Classe base
class Animal{
    protected $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function emitirSom(){
        echo "Som do animal.";
    }
}

//Classe derivada

class Cachorro extends Animal{
    public function latir(){
        echo "Au Au";
    }
}

//Instanciando objeto de classe derivada 
$cachorro = new Cachorro("Rex");

//Acessando propriedades de classe basica
echo "Nome do animal: " . $cachorro->getNome() . "<br/>";

//Chamando método de classe derivada
$cachorro->latir();
?>