<?php



function cat($pid){
    $con= mysqli_connect('localhost', 'root', '', 's61');
    $str="select scid from subcat where pid='$pid'";
    $res= mysqli_query($con, $str);
    while($row= mysqli_fetch_assoc($res))
    {
       echo "<br>";
       subcat($row['scid']);
          }    
}
cat(11111152);
function subcat($scid)
{
    $con= mysqli_connect('localhost', 'root', '', 's61');
    $str="select name from subcat where cid='$scid'";
    $res= mysqli_query($con, $str);
$result= mysqli_fetch_assoc($res);
      echo $result['name'];
            
}

?>