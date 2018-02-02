<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 下午3:40
 */


class org{
    //生成备忘录
    public function setmento(){
        return new memento($v=1);
    }
    //恢复备忘录
    public function resmemeto($me){

    }
}
class memento{

    public function __construct($v)
    {

    }

}
//备忘录库
class storge{

    public function setmen($memeto){

    }
    public function getmemeto(){

    }
}