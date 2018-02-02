<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 下午3:16
 */

namespace app\src\chain;
/*
 * 责任链　每个对象持有下一对象实例，同一时刻，请求有一个对象传给下一个对象，直到某个对象决定处理
 */

class myhandle extends abstracthandle implements interfacehandle
{
    public function opt()
    {
        // TODO: Implement opt() method.
    echo '执行｜';
    if($next=$this->gethandle()){
        $next->opt();
    }
    }

}

$h1=new myhandle();
$h2=new myhandle();
$h3=new myhandle();
$h1->sethandle($h2);
$h2->sethandle($h3);
$h1->opt();