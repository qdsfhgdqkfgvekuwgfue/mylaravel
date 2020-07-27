<?php

$a = 10;

$b = &$a;

$a = 11;

var_dump($b);


$arr = array('a'=>1,'b'=>2,'c'=>3);


foreach($arr as &$v){
    $v=$v*2;
}

var_dump($arr);

