<?php
 class operation{
   public $first_num=10;
   public $sconde_num=20;

    function sum(){
        return $this->$first_num + $this->$sconde_num;
    }
 }

$op = new operation();
 echo $op->sum();
?>