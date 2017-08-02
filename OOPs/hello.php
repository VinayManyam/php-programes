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
        <script type="text/javascript"  src="jquery.js"></script> 
        <script>
                 $(document).ready(function(){ 
              $("#class1").click(function() {
 window.parent.$("#res").attr("src", "theory.php?id=class1");     
         });        
              $("#object").click(function() {
 window.parent.$("#res").attr("src", "theory.php?id=object");     
         });         
              $("#new").click(function() {
 window.parent.$("#res").attr("src", "theory.php?id=new");     
         });  
        $("#abs").click(function() { window.parent.$("#res").attr("src", "theory.php?id=abs");});  
        $("#enc").click(function() { window.parent.$("#res").attr("src", "theory.php?id=enc");}); 
        $("#final").click(function() { window.parent.$("#res").attr("src", "theory.php?id=final");}); 
         $("#self").click(function() { window.parent.$("#res").attr("src", "theory.php?id=self");}); 
        $("#static").click(function() { window.parent.$("#res").attr("src", "theory.php?id=static");}); 
        $("#inh").click(function() { window.parent.$("#res").attr("src", "theory.php?id=inh");}); 
        $("#intf").click(function() { window.parent.$("#res").attr("src", "theory.php?id=intf");}); 
        $("#absc").click(function() { window.parent.$("#res").attr("src", "theory.php?id=absc");});
        $("#pol").click(function() { window.parent.$("#res").attr("src", "theory.php?id=pol");});
        $("#mag").click(function() { window.parent.$("#res").attr("src", "theory.php?id=mag");});
         $("#ac").click(function() {
 window.parent.$("#res").attr("src", "theory.php?id=ac");     
         });  
         $("#this").click(function() {
 window.parent.$("#res").attr("src", "theory.php?id=this");     
         }); 
    });
        </script>

    </head>
    <body>
     
         <ol>
             <li id="class1">Class</li>
              <li id="object">Object</li>
              <li id="new">New</li>
              <li id="ac">Access specifiers</li>
              <li id="this">this</li>
              <li id="abs">Abstraction</li>
              <li id="enc">Encapsulation</li>
              <li id="inh">Inheritance</li>
              <li id="intf">Interface</li>
              <li id="absc">Abstract Class</li>
              <li id="pol">Polymorphism</li>
              <li id="mag">Magic functions</li>
              <li id="final">Final</li>
              <li id="static">static</li>
              <li id="self">Self</li>
             
         </ol>  
     
     
      
  
    </body>
</html>
      <?php
        class FirstClass
        {
            public function fun1(){
                echo "it is firstclass function1";
            }
        }
        
        ?>