<?php
/* 
require 'test1.php';

require 'test2.php'; */

spl_autoload_register('autoload1');
\auto\Test1::test();
Test1::test();
Test2::test();



function autoload1($class){
    //echo $class;
    require __DIR__.'/'.$class.'.php';
}
function autoload2($class){
    //echo $class;
    require __DIR__.'/'.$class.'.php';
}