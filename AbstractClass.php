<?php
 abstract class AbstractClass
{
   /* ������ ����� ������ ���� �������� � �������� ������ */
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    abstract protected function f1();
   /* ����� ����� */
     public function printOut() {
        print $this->getValue() . "\n";
    }
    public  function sum(){
        /*���*/
        $n = $this->f1();
        $sum = $n*$n;
        echo $sum;
    }
	
}

?>
