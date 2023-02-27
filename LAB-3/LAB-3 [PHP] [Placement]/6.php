<?php

$arr = array(2,1,3,4,5,1,23,4,34);
$k = 1;

foreach($arr as $i)
{
    if($i == $k)
    {
        echo $k . " is found!";
        return;
    }
}

echo $k . " not found";

?>
