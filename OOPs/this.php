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
public function callpri(){
    echo "<br>",$this->c,"<br>";
   $this->funpri();
   echo "<br>",$this->b,"<br>";
   $this->funpro();
}
protected function funpro(){
    
echo "this is protected function";
}
}


echo "output:<br>";
$obj=new ClassName();
echo $obj->a,"<br>";

$obj->callpri();

echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";

?>
