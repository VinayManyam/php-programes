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
        <script type="text/javascript"  src="functions.js   "></script> 
              <script type="text/javascript"> 
                  
                           $(document).ready(function(){ 
            $("#bk").click(function() { 
            $("#fun1").attr("src", "hello.php");
         });
           }); 
           
           
        

      </script> 
    </head>
    <body bgcolor="green">
     <div align="center"> 
     <table width="1350" height="650" border="1" bgcolor="white">
         <tr><td valign="top" width="200">Concepts
                 <ol>
                     <li id="bk">basic keywords</li>
                 </ol>
             
             
             
             </td>
             <td  valign="top"  width="300">functional
                 <iframe id="fun1" name="fun1" width="300" height="600"></iframe>
             </td>
             <td  valign="top" >Result
              <iframe id="res" name="res" width="850" height="600"></iframe>
             </td></tr> 
         
         
         
         
      </table>
         
     
     
     </div>  
  
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
