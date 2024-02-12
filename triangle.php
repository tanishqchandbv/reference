<?php

class printing{

    public $row;


    function __construct($k,){
            $this->row = $k;
            $this -> show();
    }


    function show(){
        for($i = $this->row; $i >= 1; $i--){
            for($j = 1; $j <= $i; $j++){
                echo $i;
            }
            echo "<br>";
        }
    }
}

$obj1 = new printing(15);

