   <?php
      if($_POST['action']=='typer'){
       $key=$_POST['key'];
    echo json_encode(movies1($key));
   }
   if($_POST['action']=='data'){
       $name=$_POST['key'];
    echo json_encode(datafun($name));
   }
function movies1($test){
    
             $con= mysqli_connect("localhost", "root", "", "movies");
          $str="SELECT mname FROM movies WHERE mname LIKE '%$test%' limit 0,5";
        $res= mysqli_query($con,$str);
        $arr2=array();
        while($row= mysqli_fetch_assoc($res)){
                       $arr2[]=$row['mname'];
                        
        }
        return $arr2;
        
}
  
   
  function datafun($test){
    
        $con= mysqli_connect("localhost", "root", "", "movies");
        $str="select time,director from movies where mname='$test'";
        $res= mysqli_query($con,$str);
        $arr2=array();
        while($row= mysqli_fetch_assoc($res)){
                       $arr2[]=$row;
        }
        return $arr2;
    }
      ?>
