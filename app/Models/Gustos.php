<?php

namespace App\Models;

class MisGustos
{
    public $Musica;
    public $Leer;
    public $Jugar;
    public $Comer;

    public function __construct($Musica, $Leer, $Jugar, $Comer)
    {
        $this->Musica = $Musica;
        $this->Leer = $Leer;
        $this->Jugar = $Jugar;
        $this->Comer = $Comer;
        
        return $this;
    }

}
