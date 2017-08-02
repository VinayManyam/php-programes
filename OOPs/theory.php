<?php
if(isset($_GET['id'])){
$data=$_SERVER['QUERY_STRING'];
$name=explode('=', $data);
$val=$name[1];
}
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>oops in php</title>
      </head>
              <script type="text/javascript"  src="jquery.js"></script> 
        <script>

                 $(document).ready(function(){ 

         var name='<?php if(isset($_GET['id'])){ echo $val;}?>';
         
         if(Boolean(name)){
        $("#"+name).show();
         }
  $("#exe").click(function() {
  window.parent.$("#res").attr("src", "ac.php"); 
         });  
  $("#exe1").click(function() {
  window.parent.$("#res").attr("src", "this.php"); 
         });
           $("#exe3").click(function() {
  window.parent.$("#res").attr("src", "static.php"); 
         });
           $("#exe2").click(function() {
  window.parent.$("#res").attr("src", "final.php"); 
         });
                    $("#exe4").click(function() {window.parent.$("#res").attr("src", "self.php");});
                    $("#exe5").click(function() {window.parent.$("#res").attr("src", "inheritance.php");});
                    $("#exe6").click(function() {window.parent.$("#res").attr("src", "interface.php");});
                    $("#exe7").click(function() {window.parent.$("#res").attr("src", "abstract.php");});
                    $("#exe8").click(function() {window.parent.$("#res").attr("src", "polymorphism.php");});
                    $("#exe9").click(function() {window.parent.$("#res").attr("src", "magicfun.php");});
         });
          
        </script>
      
      
    <body>
            <!-- title -->
                <div id='trail' style="display:none">
                    <font color='red'>Class</font>
                     <p> </p>  <br><input type="button" id="exe5" value="run">
                        <textarea rows='30' cols='100'readonly>

                        </textarea>
                </div> 
        
     <div align="center"> 
               <!-- title -->
                <div id='mag' style="display:none">
                    <font color='red'>Magic functions</font>
                     <p> 1.Constructor:spacial method inside class with same class name,used to initialize class variables,these are accessed by 
                     all other methods in the class
                     <br>2.destruct:rivers functionality to constructor but it is going to executed after all methods in class
                     </p>  <br><input type="button" id="exe9" value="run">
                        <textarea rows='30' cols='100'readonly>
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
                        </textarea>
                </div> 
         
         
         
              <!-- title -->
              <div id='pol' style="display:none">
                    <font color='red'>Polymorphism</font>
                    <p>
                        Polymorphism is greek word that is many forms.one method can be may exist in different forms.it can be achieved by two ways<br>
                    <ol>
                        <li>function overloading:writing same method with different arguments inside a class</li>
                        <li>function over ridding:using same function name with same signature in both parent and child class comes under function
                            over ridding .it is possible only in with inheritance </li>
                        <li>function over ridding</li>
                    </ol>
                    </p>  
                     <br><input type="button" id="exe8" value="run">
                        <textarea rows='30' cols='100'readonly>
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
                        </textarea>
                </div> 
         
      <!-- title -->
                <div id='absc' style="display:none">
                    <font color='red'>Abstract Class</font>
                     <p>Abstract class is initiated only by  inheriting to other class .that is we cant create object to Abstract class<br>
                     when inheriting from Abstract class All methods are marked as Abstract in the parent class,abstract method declaration must be defined in child class.
                     </p> 
                     <br><input type="button" id="exe7" value="run">
                        <textarea rows='30' cols='100'readonly>
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
                        </textarea>
                </div> 
         
         
                <div id='intf' style="display:none">
                    <font color='red'>Interface</font>
                     <p> defined to provide a common function names to implementers,different implementers can implement those interfaces according to there 
                     requirements by developers</p>
                     <p>* must be public methods</p>
                     <p>* implements key word is used to interface these interfaces with class</p>
                     <p>* interface methods must be defined in the implemented class</p>
                     <br><input type="button" id="exe6" value="run">
                     <textarea rows='30' cols='100' readonly>
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
                     </textarea>
                        </textarea>
                </div> 
         
         
         
         
         <!-- Inheritance-->
<div id='inh' style="display:none">
             <font color='red'>Inheritance</font>
                     <p> we can acquire data from one class to another class .that is parent class to child class,classA  -> classB</p> 
                     <p>advantages of inheritance</p>
                     <ol>
                         <li>code reusable</li>
                         <li>avoid redundant code(duplicate code)</li>
                     </ol>
                     <p>*we have to use extend key word to inherit one class to another<br>* in php only single leve and multi level inheritances are available</p>
                     <br><input type="button" id="exe5" value="run">
                        <textarea rows='30' cols='100'readonly>
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

                        </textarea>
                </div>
        
                     <div id='self' style="display:none">
  <font color='red'>Self</font>
  <p>self is a keyword ,we can refer present class static data members and static member functions inside the class.we cant refer static data members and static member functions
  with $this keyword.we need to use scope resolution (::) operation with self.
  </p>
     <input type="button" id="exe4" value="run">
  <textarea rows='30' cols='100' readonly>
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



   </textarea>
  
      
         </div>
       
         <div id='static' style="display:none">
  <font color='red'>Static</font>
  <p>
      declaring class memers or methods are static makes them accessible without needing an instalation of the class ,a member declared 
      as static make them accessed with instantiated class object. 
        </p>  <br>
        <input type="button" id="exe3" value="run">
        <textarea rows='30' cols='100' readonly>
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

   </textarea>
  
   
         </div>
         
         <div id='final' style="display:none">
  <font color='red'>Final</font>
  
  <p>
      final is a keyword when we make class as final we cant allow that class to inhert by other class.when we make a method as final
    we cant override that method on sub classes.to crate final class before class keyword called final.to create final method before access 
    specifier we have to keep final key word</p>
  <br>
  <input type="button" id="exe2" value="run" readonly>
  <textarea rows='30' cols='100' readonly>
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


   </textarea>
  
    
         </div>
          
            <div id='abs' style="display:none">
  <font color='red'>Abstraction</font>
  <p>
 Hiding data members and  member functions in a class without providing access to outside class,using access specifiers we can control the availability of data members
 and member function out side the class
  
   <textarea rows='10' cols='100'>
syntax

using Access specifiers we can get abstraction;

$obj=new ClassName();

   </textarea>
  
  </p>     
         </div>

         
         <div id='class1' style="display:none">
  <font color='red'>Class</font>
  <p>   Class is a plan or blue print to an object.class contains data members and member functions in side a block,it exist virtually  or logically 
  </p>  <br>
   <textarea rows='30' cols='100'readonly>
syntax
class ClassName{
//dm
//mf

}
   </textarea>
         </div>
        
          <div id='enc' style="display:none">
  <font color='red'>Encapsulation</font>
  <p> binding data members and member functions inside class</p>
  
  <textarea rows='30' cols='100' readonly>
syntax
class ClassName{
//dm
//mf

}
$obj=new ClassName();

   </textarea>
         </div>
       
   <div id='object' style="display:none">
  <font color='red'>Object</font>
  <p>
   Object is an instance of a class.after creating class we can construct an object to the class, the object can be a combination of variables, functions, and data structures.exists as physically. 
  
   <textarea rows='30' cols='100' readonly>
syntax
class ClassName{
//dm
//mf

}
$obj=new ClassName();

   </textarea>
  
  </p>     
         </div>

   <div id='new' style="display:none">
  <font color='red'>Object</font>
  <p>
  New is a keyword with this we can create or initialize an object for created class.when object class content will load into memory
  <br>
  
  <textarea rows='30' cols='100'readonly>
syntax
class ClassName{
//dm
//mf

}
$obj=new ClassName();

   </textarea>
  
  </p>     
         </div>

  <div id='ac' style="display:none" align='left'>
  <font color='red'>Object</font>
  <p>1.Private </p>
  <p>Private data members and methods are accessed within the class and not accessed in outside the class or even another inherited class </p>
   <p>1.Protected </p>
  <p> protected data members and member function accessed in the class and these data can be access by inherited class but not outside the class</p>
   <p>1.Public </p>
  <p> Public  data members and member function accessed in the class,inherited class and outside the class </p>
  <br>
  <input type="button" id="exe" value="run">
     <textarea rows='30' cols='100' readonly>
syntax



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
echo "<br>";
//class2::callpro();

   </textarea>
  </div>
         
            <div id='this' style="display:none">
  <font color='red'>This</font>
  <p>
  $this is a keyword ,represent present class or current class.in order to exiguit methods within the class or use member data in other methods within the class $this is usefull.  

 <br><input type="button" id="exe1" value="run">
  
   <textarea rows='30' cols='100' readonly>  

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
   </textarea>
  
  </p>     
         </div>


     </div>  
  
    </body>
</html>
      <?php

        
        ?>