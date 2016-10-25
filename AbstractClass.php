<?php
 abstract class AbstractClass
{
   /* Данный метод должен быть определён в дочернем классе */
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    abstract protected function f1();
   /* Общий метод */
     public function printOut() {
        print $this->getValue() . "\n";
    }
    public  function sum(){
        /*код*/
        $n = $this->f1();
        $sum = $n*$n;
        echo $sum;
    }
	
}

?>
