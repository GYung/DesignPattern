<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午10:25
 */
namespace app\src\template;
abstract class abstracttemplate{
    public function spilt(){
        echo '父类';
    }
    abstract public function method();
}