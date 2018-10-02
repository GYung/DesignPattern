<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午10:27
 */
/*
 * 模板方法，模板是抽象类，定义主方法和抽象方法，主方法中调用这些抽象方法(骨架)，子类实现抽象方法
 */
namespace app\template;
use app\template\abstracttemplate;
class children extends abstracttemplate {

    public function method()
    {
        // TODO: Implement opt() method.
        echo '我是子方法';
    }
}
(new children())->method();