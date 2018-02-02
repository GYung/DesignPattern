<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午11:08
 */

namespace app\src\observer;
use app\src\observer\abstractobserver;
/*
 * 当某个对象变化，其他依赖的对象跟着变化
 * 对象抽象类中通过添加　观察者接口类型，添加多个同类型观察者
 * 对象接口　衍生多种对象抽象类，实现不同的通知
 * 对象类选择需要继承的对象抽象类
 */
class subject extends abstractobserver
{
    public function myself()
    {   echo '开始';
        $this->notifall();

    }
}
(new subject())->myself();