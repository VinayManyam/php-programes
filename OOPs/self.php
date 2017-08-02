<?php

class A
{
    public static $a=10;
    public static function f1(){
        echo "this is static function in A";
        //echo $this->a;//Fatal error: Using $this when not in object context in C:\xampp\htdocs\oops\static.php on line 8
        echo self::$a;
        }
    public function f2(){
        echo "<br>this is static function:";
        self::f1();
        }
   
}
echo A::$a,"<br>";
A::f1();
$obj=new A();
echo "<br>";
//echo $obj->a; // Accessing static property A::$a as non static in C:\xampp\htdocs\oops\static.php on line 20, we cant access like this
$obj->f1();
//A::f2();// Non-static method A::f2() should not be called statically in C:\xampp\htdocs\oops\static.php on line 23
$obj->f2();
echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";
?>