<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午10:27
 */
/*
 * 规定接口必须实现的方法，供用户选择不同的实现类，抽象类提供辅助方法
 */
class plus extends abstracttemplate implements interfacestrategy{
    public function opt($exp)
    {
        // TODO: Implement opt() method.
        echo '接口';
    }
}