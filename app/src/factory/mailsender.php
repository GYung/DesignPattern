<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-1-31
 * Time: 下午2:03
 */
namespace app\src\factory;
use app\src\factory\sendinerface;
class mailsender implements sendinerface{

    public function sender()
    {
        // TODO: Implement sender() method.
        echo 'my is mail';
    }
}