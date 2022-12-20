<?php

class Movie{
    public $title;
    public $year;
    public $genre;
    public $age;

    public function __construct($title, $year, $genre, $age)
    {
        $this ->title = $title;
        $this ->year = $year;
        $this ->genre = $genre;
        $this ->age = $age;
    }

    public function miaFunzione(){
        if($this->age < 18){
            return "La visione è stata autorizzata";
        }else {
            return "La visione è riservata ad un pubblico adulto";
        }
    }

}
?>