<?php 


class Movie {
    public $nome;
    public $annoUscita;

    function __construct($nome, $anno){
        $this->nome = $nome;
        $this->annoUscita = $anno;
    }

}

$lost = new Movie('Kali', 1995);

var_dump($lost)


?>