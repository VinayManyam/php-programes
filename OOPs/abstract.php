<?php
abstract class Abc{
    public $a=10;
    abstract function f1();
    public function f2(){
        echo "this is f2 function from abstract class <br>";
    }
}
class Abc2 extends Abc{
    function f1() {
        echo "this is abstract method from Abc<br>";
        $this->f2();
        }
}
$obj=new Abc2;
$obj->f1();
echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";
?>
