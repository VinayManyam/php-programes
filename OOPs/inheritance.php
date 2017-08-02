<?php

class A{
    public $a=20;
    public function f1(){
    echo "this is class A";    
    }
}
class B extends A{
public function f2(){
    echo $this->a."<br>";
    $this->f1();
}
}
$obj=new B();
$obj->f2();
echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";
?>
