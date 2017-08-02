<?php
class Abc{
    
   public function f1(){
        echo "hello this is f1() in Abc<br>";
    }
  /* public function f1($a){
        echo "one argument- f1(10)";
    }//Fatal error: Cannot redeclare Abc::f1() in C:\xampp\htdocs\oops\polymorphism.php on line 7
   /* public function f1($a,$b){
        echo "one argument- f1(10,20)";
    }
   */
}
class Abc2 extends Abc{
    public function f1(){
        Abc::f1();//scope resolution key word
        parent::f1();//parent key word
        echo "hello this is f1() Abc2<br>";
    }  
}
$obj2=new Abc2;
$obj2->f1();
echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";
?>
