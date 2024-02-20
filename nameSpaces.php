<?php
//Declarando um nameSpace
namespace App\Produtos;

//Definindo uma classe dentro do namespace
class Produto{
    public function exibirDetalhes(){
        echo "Detalhes do produto";
    }
}

//Importando e utilizando a classe com um alias 
use App\Produtos\Produto as ProdutoApp;
$produto = new ProdutoApp();
$produto->exibirDetalhes();
?>