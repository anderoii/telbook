<?php
$name1;
$name1=$_GET['cename'];
$namber2=$_GET['cenumber'];
print (name4($name1,$namber2));

function name4($name5, $name6){
    $name7=$name5.' ' .$name6;
    $name7.='  ви писали';
    return $name7;
}
?>