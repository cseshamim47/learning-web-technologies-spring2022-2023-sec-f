<?php

$arr = array(
    array('1','2','3','A'),
    array('1','2','B','C'),
    array('1','D','E','F'),
);  
// echo $arr[0][3];

$k = 2;
for($i = 0; $i < 3; $i++)
{
    for($j = 0; $j < 3; $j++)
    {
        echo $arr[$i][$j] . " ";
        if($k == $j) break;
    }
    $k--;
    echo "<br>";
}

echo "<br>";
echo "<br>";

$k = 3;
for($i = 0; $i < 3; $i++)
{
    for($j = 0; $j < 4; $j++)
    {
        if($k <= $j) 
        echo $arr[$i][$j] . " ";
    }
    $k--;
    echo "<br>";
}



?>