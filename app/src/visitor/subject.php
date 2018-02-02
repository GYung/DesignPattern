<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 下午4:10
 */

namespace app\src\visitor;

//稳定的数据结构
/*
 * 通过设置不同的访问者，将该类实例传递过去，则访问者通过该实例访问数据
 * 数据结构和算法解耦。数据结构稳定的情况下，增加算法不影响系统
 */
class subject implements interfacesubject
{
    public function setvisit($visit)
    {
        $visit->visit($this);
    }
    public function getvalue(){
        echo 'int';
    }

}