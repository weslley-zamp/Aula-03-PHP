<?php
class Forma{
    public function calcularArea(){
        echo "Área da forma.";
    }
}

//Classes derivadas
class Quadrado extends Forma{
    public function calulcarArea(){
        echo "Área do quadrado.";
    }
}

class Circulo extends Forma{
    public function calulcarArea(){
        echo "Area do circulo";
    }
}

//Função utilizando polimorfismo

function exibirArea(Forma $forma){
 $forma->calcularArea();
}

//Instanciando objetos
$quadrado = new Quadrado();
$circulo = new Circulo();

//Chamando a função com diferentes objetos

exibirArea($quadrado);
exibirArea($circulo);
?>