<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>jquery-multi-select</title>
    <link rel="stylesheet" type="text/css" href="example-styles.css">
    <link rel="stylesheet" type="text/css" href="demo-styles.css">
</head>
<body>

    <form class="demo-example" method="post" action="">
        <label for="people">Select people:</label>
        <select id="people" name="geners[]"  multiple>
                       <option value="1">Action</option>
            <option value="2">Biography</option>
            <option value="3">crime</option>
      <option value="4">family</option>
            <option value="5">horror</option>
            <option value="6">romance</option>
              <option value="7">sports</option>
            <option value="8">war</option>
            <option value="9">Adventure</option>
              <option value="10">comedy</option>
            <option value="1">documentary</option>
            <option value="12">fantasy</option>
            
                        <option value="13">thriller</option>
              <option value="14">Animation</option>
            <option value="15">costume</option>
            <option value="18">history</option>
              <option value="17">musical</option>
            <option value="18">Psychological</option>
            
        </select>
        <input type="submit" name="submit" value="submit">
    </form>



    <script type="text/javascript" src="jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="jquery.multi-select.js"></script>
    <script type="text/javascript">
    $(function(){
        $('#people').multiSelect();
   
    });
    </script>

</body>
</html>
<?php
extract($_POST);
if(isset($submit))
{
$test=$_POST['geners'];


$con= mysqli_connect('localhost', 'root','','s61');
for($i=count($test)-1;$i>=0;$i--)
{
    
    $qer="INSERT INTO subcat(`pid`,`scid`) VALUES ( $test[$i],1231231231)";
    mysqli_query($con, $qer);
    
}


}
?>
