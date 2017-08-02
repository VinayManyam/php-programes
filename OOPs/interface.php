<?php
interface Int{
  public function f1();
  public function f2();
}
class A implements Int{
    public function f1(){
     echo "interface f1 method<br>";   
    }
    public function f2(){
        echo "interface f2 method<br>"; 
    }
    public function f3(){
        echo " f3 method from class A <br>"; 
    }
}
$a=new A;
$a->f1();
$a->f2();
$a->f3();
echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";
?>