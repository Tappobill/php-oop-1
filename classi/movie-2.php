<?php

class Movie2{
    public $gioco;
    public $year;
    public $player;
    

    public function __construct($gioco, $year, $player)
    {
        $this ->gioco = $gioco;
        $this ->year = $year;
        $this ->player = $player;
        
    }

    public function miaFunzione(){
        if($this->player >= 2){
            return "Puoi giocare a questo gioco";
        }else {
            return "Hai bisogno di almeno 2 player per giocare";
        }
    }

}
?>