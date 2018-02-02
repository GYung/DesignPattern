<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 下午4:09
 */

namespace app\src\visitor;

//算法
class visitor implements interfacevisitor
{
    public function visit($subject)
    {
        echo $subject->getvalue();
    }

}