<?php
class myclass{
    public $a=10;
    public function myclass($b){
        $this->a=$b;
       echo $this->a,"myclass method<br>";
    }
    public function f1(){
        echo $this->a,"this is f1()<br>";
    }
         public function __destruct() {
       //  unset($this->a);
         echo $this->a,"<br> destructor called<br>";
     } 
    
 }
 class myclass2{
   public $a=10;
   public function __construct($c) {
      $this->a=$c;
       echo $this->a,"myclass method<br>";
       }
     public function __destruct() {
         unset($this->a);
         echo $this->a,"<br> destructor called";
     }  
     
 }
 $obj=new myclass(60);
 $obj->f1();
  $obj=new myclass(50);
 $obj->f1();
 echo "<br><button onclick=\"javascript:window.history.back();\">Back</button>";
?>

