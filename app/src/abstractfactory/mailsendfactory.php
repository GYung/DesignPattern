<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午2:19
 */
namespace app\abstractfactory;

use  app\abstractfactory\providerinerface;
use app\abstractfactory\smssender;


//功能接口使得可以扩展更多产品－但当每需要一个产品就需要一一实例化
//工厂组装这些产品或者根据需要生产某个产品：但增加新的产品需要修改工厂类。
//工厂接口使得每个工厂对应生产一种或多种产品，任意组合，解耦，无需修改已写好的类

class mailsendfactory implements providerinerface{

    public function produce()
    {
        // TODO: Implement produce() method.
        return new smssender();
    }

}

$sender=new mailsendfactory();

 ($sender->produce())->sender();