<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午4:15
 */
/*
 * 客户端与服务端之间
 */

class proxy implements proxyinterface{

    protected $app;
    public function __construct()
    {
        $this->app=new source();
    }

    public function method()
    {
        $this->before();
        $this->app->method();
    }
    public function before(){
        echo '开始代理';
    }
}
