<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-1-31
 * Time: 下午2:05
 */

namespace app\src\factory;

use app\src\factory\mailsender;
use app\src\factory\smssender;
//工厂模式：大量产品需要创建且具有统一的接口
//普通工厂：通过传入参数实例化类
class SendFactorySimple {

    public function produce($type){
        switch ($type){
            case 'mail':
                return new mailsender();
            case 'sms':
                return new smssender();
            default:break;
        }
    }
}
//多个工厂方法：防止传入字符串错误
class SendFactoryMethod {


    public function mailsender(){
        return new mailsender();
    }

    public function smssender(){
        return new smssender();
    }
}
//静态工厂：无需实例　直接调用
class SendFactoryStatic {


    public static function mailsender(){
        return new mailsender();
    }

    public static function smssender(){
        return new smssender();
    }
}

(SendFactoryStatic::smssender())->sender();