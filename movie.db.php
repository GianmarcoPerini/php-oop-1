<?php 

class Movie {
    public $nome;
    public $annoUscita;
    public $attore;
    public $genere;

    

    /**
     * funzione di costruzione oggetto
     * 
     * @param string $nome del film
     * @param integer $anno di uscita del film
     * @param array $attore principale
     * @param array $genere
     */
    public function __construct($nome, $anno, $attore, $genere){
        $this->nome = $nome;
        $this->annoUscita = $anno;
        $this->attore = $attore;
        $this->genere = $genere;
    }

    public function isRecent(){
        if($this->annoUscita > 1990){
            return 'recent';
        }
        return 'not recent';
    }

    public function getName(){
        return $this->nome;
    }

    public function getYear(){
        return $this->annoUscita;
    }

    public function getActor(){
        return implode(", ", $this->attore);
    }

    public function getGenre(){
        return implode(", ", $this->genere);
    }
}

$movies = [
    new Movie(
        'Left Behind - La profezia',
        2014,
        ['Nicolas Cage','Cassi Thomson','Chad Michael Murray','Lea Thompson','Nicky Whelan','Quinton Aaron','Jordin Sparks','Martin Klebba','Lolo Jones','Lance E. Nichols',],
        ['fantastico', 'thriller', 'catastrofico'],
    ),

    new Movie(
        'Fino all\'ultimo indizio',
        2021,
        ['Denzel Washington','Rami Malek','Jared Leto','Chris Bauer','Michael Hyatt','Terry Kinney','Natalie Morales','Isabel Arraiza','Joris Jarsky','Glenn Morshower'],
        ['thriller', 'poliziesco', 'drammatico', 'noir'],
    )
]

?>