<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午11:07
 */

namespace app\src\observer;
use app\src\observer\interfaceobserver;

class observer implements interfaceobserver
{
    public function update()
    {
        // TODO: Implement update() method.
     echo '收到更新通知';
    }
}