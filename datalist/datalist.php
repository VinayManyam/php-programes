<html> 
   <head> 
      <title>Drop Down</title> 
      <script type="text/javascript" src="jquery.js"></script> 
   
      <script type="text/javascript" language="javascript"> 
         $(document).ready(function() { 
    
     $( "#target" ).keyup(function() {
         key=$("#target").val();
         $.post(  
                  "data.php", 
          {action:'typer',key:key}, 
                  function(data) {
                   test= JSON.parse(data);    
           if(key.length!='') {
            $("#dl").empty();
            $("#target").html('');
            $("#target2").html('');
            
            for(var i=0;i<test.length;i++)
            {
                $("#dl").append("<option value='" + test[i] + "'></option>");
            }
        }
        }
               );    
               
});
$("#target").focusout(function(){
   name=$(this).val();
            $.post(  
                  "data.php", 
          {action:'data',key:name}, 
                  function(data) {
                  test= JSON.parse(data);
                  if(test.length!=''){
				  $("#target1").val(test[0]["time"]);
                  $("#target2").val(test[0]["director"]);
				  }else{
				$("#target1").val('');
                $("#target2").val('');
				  }
            }
               );
    
    
});
     });
  
  </script> 
   
   </head> 
  
   <body> 
       <div align="center">
        Movie:   <input id="target" type="text" value="" list="dl"> <br><br>
      time: <input id="target1" type="text" value="" list="dl"> <br><br>
      Director: <input id="target2" type="text" value="" list="dl"> 
       <datalist id="dl"></datalist>
</div>
   
   </body> 
  
</html> 
