<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午10:57
 */
namespace app\src\observer;
interface interfacesubject{
    public function add($observer);
    public function notifall();
    public function myself();
}