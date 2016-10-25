<?php
require_once 'ConcreteClass1.php';

class ConcreteClass2 extends AbstractClass
{
   
    public $a;
    public function f1(){
        return $this->a;
    }
    public function getValue() {
        return "ConcreteClass2";
    }
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass2";
    }
}
?>