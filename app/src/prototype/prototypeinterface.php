<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午3:54
 */
namespace app\prototype;

interface prototypeinterface{
    public function shallowcopy();//浅复制
    public function deepcopy();//深复制
}