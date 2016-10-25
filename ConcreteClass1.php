<?php
require_once 'AbstractClass.php';
class ConcreteClass1 extends AbstractClass
{
   public $a;
    public function f1(){
        return $this->a;
    }
    protected function getValue() {
        return "ConcreteClass1";
    }
    public function prefixValue($prefix) {
        return "{$prefix}ConcreteClass1";
    }
}
?>