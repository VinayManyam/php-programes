<?php


class ClassName{
public $a='public data';
protected $b='protected data';
private $c='private data';
public function funpub(){
echo "it is public method";
}
private function funpri(){
echo "this is private function";
}
protected function funpro(){
echo "this is protected function";
}
}
class Class2 extends ClassName{
    
   static public function callpro(){
        ClassName.funpub();
    }
}


$obj=new ClassName();
echo $obj->a,"<br>";
//echo $obj->b; //Fatal error: Cannot access protected property ClassName::$b in C:\xampp\htdocs\oops\ac.php on line 20
//echo $obj->c; //Fatal error: Cannot access private property ClassName::$c in C:\xampp\htdocs\oops\ac.php on line 21

$obj->funpub();
//$obj->funpri();//Fatal error: Call to private method ClassName::funpri() from context '' in C:\xampp\htdocs\oops\ac.php on line 24
//$obj->funpro();//Fatal error: Call to protected method ClassName::funpro() from context '' in C:\xampp\htdocs\oops\ac.php on line 25
echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";
//class2::callpro();

?>
