<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午2:53
 */
namespace app\src\singleton;
/*
 * 1该类创建繁琐
 * ２核心类，控制整个流程
 * 懒汉模式：类加载时不实例化：多线程下不安全
 * 饿汉模式：类加载时初始化　：类加载慢。访问对象快，不需要同步
 */
class singleton{

    private static $instance=null;

    //私有化构造方法,外界无法调用、
    private function __construct(){
        echo "单例模式的实例被构造了";
    }
    //私有化克隆方法
    private function __clone(){

    }

    public static function getInstance(){

        if(self::$instance ==null){
            self::$instance=new self();
        }
        return self::$instance;
    }
    public function setname(){
        echo 111;
    }
    public function getname(){

    }
}

