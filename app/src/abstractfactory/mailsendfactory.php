<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午2:19
 */
namespace app\src\abstractfactory;

use  app\src\abstractfactory\providerinerface;
use app\src\abstractfactory\smssender;


//功能接口使得可以扩展更多功能－但当每需要多个组合功能就需要一一实例化
//工厂组装这些功能或者根据需要生产功能－但增加新的组合功能需要修改工厂类。
//工厂接口使得每个工厂对应生产一种组合功能，解耦，无需修改已写好的类

class mailsendfactory implements providerinerface{

    public function produce()
    {
        // TODO: Implement produce() method.
        return new smssender();
    }

}

$sender=new mailsendfactory();

 ($sender->produce())->sender();