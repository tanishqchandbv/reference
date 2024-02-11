<?php

class student{
    public $name, $maths, $sci, $total;

    function __Construct($n, $m, $s){
        $this -> name = $n;
        $this -> maths = $m;
        $this -> sci = $s;
        $this -> total(); //executing the functions through the constructor
        $this -> show();
    }

    function total(){
        $this -> total = $this -> maths + $this -> sci;
        return $this -> total;
    }

    function show(){
        echo "Name of the student:" . $this->name ."<br>";
        echo "Total marks obtained:" . $this->total . "<br>"; 
    }
}

$stu1 = new student("Tanishq", 98, 76);
// $stu1->show(); redundant as we are executing it in the constructor itself
?>