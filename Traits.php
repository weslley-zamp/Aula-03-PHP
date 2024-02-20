<?php
trait Log{
    public function registrationLog($mensagem){
        echo "Registrando log: $mensagem";
    }
}

//Utilizando o trait em uma classe 
class Produto{
    use Log;

    public function atualizarEstoque($quantidade){
        //Lógica para atualizar estoque
        $this->registrationLog("Estoque atualizado em $quantidade unidades")
    }
}

//Instanciando objeto utilizando o método trait
$produto = new Produto();
$produto->atualizarEstoque(10);
?>