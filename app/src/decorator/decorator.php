<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午4:15
 */
/*
 * 扩展一个类的方法，动态增加移除功能
 */
class decorator implements decoratorinterface{

    protected $app;
    public function __construct($app)
    {
        $this->app=$app;
    }

    public function method()
    {
        echo '装饰类前';
        $this->app->method();
        // TODO: Implement action() method.
        echo '装饰类后';
    }
}
