<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/6
 * Time: 20:07
 */

class Factory{

     public static function getinstance($class_name){

         // 静态局部变量，函数调用后不会消失，下次调用还在

         static $_instance_list = array();

         // 判断类是否存在
         if(!isset($_instance_list[$class_name])){

             $_instance_list[$class_name] = new $class_name;

         }

         return $_instance_list[$class_name];
     }

}



class A{

    public function sum_list($num)
    {
        return $num;
    }
}


$obj = Factory::getinstance("A");

echo $obj->sum_list(23);