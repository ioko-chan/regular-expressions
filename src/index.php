<?php
$str = 'ahb acb aeb aeeb adcb axeb';
$array = explode(' ',$str);
$result = preg_grep('/a..b/', $array);
echo print_r($result, true). "\n";

$str = 'a1b2c3';
$func = function ($number){
    return pow($number[0],3);
};
$result =  preg_replace_callback('#(\d+)#',$func,$str);
echo $result;