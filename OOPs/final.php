<?php
 final class Abs{
   public function f1(){
        echo "abs->f1 method<br>";
    }
    final public function fun(){
      echo "final method in Abs <br>";  
    }

}
/*
class b extends Abs{
    public function f2(){
        echo "b f2 function:";
    }
}//Fatal error: Class b may not inherit from final class (Abs) in C:\xampp\htdocs\oops\final.php on line 16

*/
class c {
    public function fun(){
        echo "fun function in class c";
    }
}

$obj=new Abs();
$obj->f1();
$obj1=new c;
$obj1->fun();
echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";
?>
