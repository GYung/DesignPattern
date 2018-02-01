<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午2:53
 */
namespace app\src\prototype;
/*
 * 先创建一个原型对象，然后通过clone创建新的对象，试用大对象创建，new消耗大因为。
 */
use app\src\prototype\prototypeinterface;
class prototype implements prototypeinterface {

    private $_name;
    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function setName($name)
    {
        $this->_name = $name;
    }
    public function getName()
    {
        return $this->_name;
    }
    //基本数据类型的变量都会重新创建，而引用类型，指向的还是原对象所指向的
 public function deepcopy()
 {
     // TODO: Implement deepcopy() method.
     return clone $this;
 }
 //完全彻底的复制
 public function shallowcopy()
 {
     // TODO: Implement shallowcopy() method.
     $serialize_obj = serialize($this);
     $clone_obj = unserialize($serialize_obj);
     return $clone_obj;
 }
}

